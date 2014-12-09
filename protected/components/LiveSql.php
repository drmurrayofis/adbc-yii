<?php

/**
 * Interface for the LiveSql subsystem.
 */
class LiveSql extends CApplicationComponent
{
    public $css_prefix = 'sql-editor';



    /**
     * Registers scripts needed for LiveSQL.
     * Depends on jQuery, but does NOT register it.
     */
    public function registerClientScripts()
    {
        $scripts = Yii::app()->clientScript;
        $scripts->registerScriptFile('/js/worker.sql.js', CClientScript::POS_HEAD);
        $scripts->registerScriptFile('/js/livesql.js', CClientScript::POS_HEAD);
    }



    /**
     * Returns an HTML SQL editor that modifies a client-side copy
     * of a SQLite3 database delivered from the server.
     *
     * @param $path string Webroot-relative to the SQLite3 database, minus the .sqlite extension.
     * @param $code string SQL to place inside the editor
     * @return string HTML for an editor
     */
    public function renderEditor($path, $code = '')
    {
        // Strip first / to prevent confusion over Yii routes.
        // It will be root-relative either way.
        if ($path[0] == '/')
        {
            $path = ltrim($path, '/');
        }

        $cp = $this->css_prefix;

        // holds output table
        $output   = CHtml::tag('div', array('class'=>"${cp}-output"), '');

        // holds SQL code
        $textarea = CHtml::tag('textarea', array(), $code);

        // render toolbar
        $lis      = CHtml::tag('li', array('class'=>"${cp}-execute icon-flash"), '');
        $buttons  = CHtml::tag('ul', array('class'=>"${cp}-buttons"), $lis);
        $toolbar  = CHtml::tag('div', array('class'=>"${cp}-toolbar"), $buttons);

        $attrs = array(
            'class' => $cp,
            'data-base-name' => $path
        );

        return CHtml::tag('div', $attrs, $toolbar.$textarea.$output);
    }
}
