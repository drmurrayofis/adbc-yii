<?php

/**
 * Configures and prints an instance of zyrolasting/sequencer-js.
 * A sequence is just a container element in HTML that shows
 * arbitrary HTML in a sequential order. This can be used
 * to set up slideshows, quizzes, or so on. The "frames" of the
 * sequence are stored in a hidden element of the HTML response.
 */
class Sequence extends CWidget
{
    private $frames = array();
    public  $seqid  = "main-sequence";


    /**
     * Registers script that controls sequence. Note that everything
     * happens client-side. This class just sets up use of sequences
     * and lets you add frames.
     */
    public function init()
    {
        $cs = Yii::app()->clientScript;
        if (!$cs->isScriptFileRegistered('/js/sequencer.js', CClientScript::POS_HEAD))
        {
            $cs->registerScriptFile('/js/sequencer.js', CClientScript::POS_HEAD);
        }
    }

    /**
     * Renders the sequence.
     */
    public function run()
    {
    ?>
        <div class="sequencer" data-seq-root="<?php echo $this->seqid; ?>">
            <div class="sequencer-toolbar">
                <ul class="sequencer-buttons">
                    <li data-action="first" class="icon-to-start-alt"></li>
                    <li data-action="prev" class="icon-to-start"></li>
                    <li data-action="auto" class="icon-play"></li>
                    <li data-action="next" class="icon-to-end"></li>
                    <li data-action="last" class="icon-to-end-alt"></li>
                </ul>
            </div>
            <div class="sequencer-body" data-seq-id="<?php echo $this->seqid; ?>"></div>
            <div class="hidden">
                <div data-sequence="<?php echo $this->seqid; ?>">
                    <?php
                    for ($i = 0; $i < count($this->frames); ++$i)
                    {
                        $f = $this->frames[$i];
                        echo CHtml::tag('div', array('data-seq-index'=>$f['indicies']), $f['html']);
                    }
                    ?>
                </div>
            </div>
        </div>
        <script type="text/javascript">        
        $(function(){
            seq = new Sequencer(['<?php echo $this->seqid; ?>']);
            seq.advance();

            $('[data-action="first"]').click(function(){
                seq.reset();
            });

            $('[data-action="last"]').click(function(){
                seq.end();
            });

            $('[data-action="next"]').click(function(){
                seq.advance();
            });

            $('[data-action="prev"]').click(function(){
                seq.back();
            });

            $('[data-action="auto"]').click(function(){
                seq.toggle();
            });
        });
        </script>
    <?php
    }




    /**
     * Adds content to the sequence.
     *
     * @param $html string HTML content.
     * @param $indicies string A space-seperated list of
     * zero-based indicies that controls during what frames
     * the HTML is visible. For example, "0 3 6" makes the HTML
     * visible on frames 0, 3 and 6.
     */
    public function addContent($html, $indicies=null)
    {
        if (is_null($indicies))
        {
            $indicies = count($this->frames);
        }

        $this->frames[] = array(
            'html'=>$html,
            'indicies'=>$indicies
        );
    }
}
