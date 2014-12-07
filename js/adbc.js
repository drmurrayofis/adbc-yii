// Hash of local databases
workers = {};
activeEditor = null;

/*
CompositeKeys combines all ordinals of selected <options> into a object
that represents a composite identifier each time a tracked <select> element
changes value.
*/
function compositeKeys(callback)
{        
    if (typeof callback != 'function') {
        throw new Error("compositeKeys callback is not a function");
    }
    
    var prefix = "keycomp-";
    var selectables = $('select[id^="'+prefix+'"]');
    var keys = {};    
        
    selectables.change(function() {
        selectables.each(
            function(index)
            {
                var key = $(this).attr('id').substring(prefix.length);
                var ordinal = $(this).children(':selected').index();
                
                keys[key] = ordinal;
            }
        );
        
        callback(keys);
    });
}



/**
 * Callback for Worker that reports a SQL error in the active editor
 */
function onSqlError(e)
{
    var output = activeEditor.children('output');
    output.addClass('sql-editor-error filled');
    output.html(e.message);
}



/**
 * Loads SQLite3 database by name from server.
 * Returns Uint8Array representing file contents.
 */
function loadDb(name)
{
    var bytes;
    var worker;

    var xhr = new XMLHttpRequest();

    xhr.open('GET', '/files/databases/' + name + '.sqlite', true);
    xhr.responseType = 'arraybuffer';

    xhr.onload = function(e)
    {
        bytes = new Uint8Array(this.response);

        if (!(name in workers))
        {
            worker = new Worker("/js/worker.sql.js");

            worker.onerror = onSqlError;

            worker.onmessage = function()
            {
                console.log("Database " + name + " opened");
            };
            
            worker.postMessage({
                id: 1, 
                action: 'open',
                buffer: bytes
            });

            workers[name] = worker;
        }
    };

    xhr.send();
}



/**
 * Creates an HTML table representing SQL results.
 */
function createSqlTable(columns, values)
{
    function cocat(vals, tag){
        if (vals.length === 0) return '';

        var open  = '<' + tag + '>';
        var close = '</' + tag + '>';

        return open + vals.join(close + open) + close;
    };

    var table = $('<table></table>').addClass('sql-table');
    var thead = $('<thead></thead>').append(cocat(columns, 'th'));

    var rows = values.map(function(v){ return cocat(v, 'td'); });
    var tbody = $('<tbody></tbody>').append(cocat(rows, 'tr'));

    table.append(thead);
    table.append(tbody);

    return table;
}


// jQuery ready
$(function(){

    // load referenced SQLite3 dbs from server
    $('.sql-editor').each(function(){
        var db_name;
        var bytes;

        db_name = $(this).attr('data-base-name');
        loadDb(db_name);
    });

    $('.sql-editor-execute').click(function(){
        var editor;
        var db_name;
        var code;

        editor  = $(this).parents('.sql-editor');
        db_name = editor.attr('data-base-name');

        if (db_name in workers)
        {
            var worker = workers[db_name];

            code = editor.children('textarea').val() + ';';

            worker.onmessage = function(e)
            {
                var results = e.data.results;
                var output  = editor.children('output');

                output.removeClass('sql-editor-error');
                output.html('');

                for (var i = 0; i < results.length; ++i)
                {
                    output.append(createSqlTable(results[i].columns, results[i].values));
                }

                output.addClass('filled');
            };

            activeEditor = editor;

            worker.postMessage({
                id: 2,
                action: 'exec',
                sql: code
            });
        }
        else
        {
            throw db_name + " has no associated worker";
        }

        return false; // prevents scrolling to top
    });
});
