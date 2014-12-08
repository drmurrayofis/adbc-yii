/*
CompositeKeys combines all ordinals of selected <options> into a 
composite identifier each time a <select> element matching
[id^="keycomp-"] changes value.
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
