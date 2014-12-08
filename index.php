<?php

function kill($data)
{
    header('Content-type: text/plain');
    die(var_dump($data));
}

function get(&$v, $def=null)
{
    return isset($v) ? $v : $def;
}


// change the following paths if necessary
$yii=dirname(__FILE__).'/../../../usr/local/share/yiiframework/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
class ADBC extends CWebApplication
{
    protected function init()
    {
        foreach (glob(dirname(__FILE__).'/protected/modules/*', GLOB_ONLYDIR) as $mod)
        {
            $this->setModules(array(basename($mod)));
        }
        return parent::init();
    }
}


$app = new ADBC($config);
$app->run();
