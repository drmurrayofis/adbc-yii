function Sequencer(tracks, delay, callbackMap)
{
    this.tracks  = [];
    this.callbacks = typeof callbackMap !== 'undefined' ? callbackMap : {};
    this.index   = 0;
    this.playing = false;
    this.timeout = null;
    this.delay   = typeof delay !== 'undefined' ? delay : 3000;
    this.duration = 0;
    
    for (var i = 0; i < tracks.length; ++i)
    {
        // use only existing elements.
        if ($('[data-seq-id="' + tracks[i] + '"]').length)
        {
            this.tracks.push(tracks[i]);
            
            var target = $('[data-sequence^="' + tracks[i] + '"]');
            var sequence_duration = target.children().length;
            if (sequence_duration > this.duration)
            {
                this.duration = sequence_duration;
            }
        }
    }

    this.advance = function()
    {
        if (this.index >= this.duration - 1) return;

        ++this.index;
        this.refresh();
        
        if (this.playing)
        {
            this.play();
        }
    };

    this.refresh = function()
    {
        for (var i = 0; i < this.tracks.length; ++i)
        {
            var track = this.tracks[i];
                        
            var destination = $('[data-seq-id="' + track + '"]');
            var source      = $('[data-sequence^="' + track + '"] [data-seq-index~="' + this.index + '"]');
            
            if (source.length)
            {
                destination.html(source.html());
                
                if (typeof this.callbacks[track] == 'function')
                {
                    (this.callbacks[track])(destination, this.index);
                }
            }
        }

        if (typeof this.callbacks['frame' + this.index] == 'function')
        {
            (this.callbacks['frame' + this.index])();
        }
    };

    this.back = function()
    {
        if (this.index <= 0) return;

        --this.index;
        this.refresh();
        this.stop();
    };

    this.end = function()
    {
        this.index = this.duration - 1;
        this.refresh();
        this.stop();
    };
    
    this.reset = function()
    {
        this.index = -1;
        this.advance();
        this.stop();
    };
    
    this.play = function()
    {
        this.playing = true;
        this.timeout = setTimeout(this.advance.bind(this), this.delay);
    };
    
    this.stop = function()
    {
        if (this.timeout)
        {
            clearTimeout(this.timeout);
        }
    };

    this.toggle = function()
    {
        if (this.playing)
        {
            this.stop();
        }
        else
        {
            this.play();
        }
    };
}
