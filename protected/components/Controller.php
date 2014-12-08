<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';



	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();


	/**
	 * @var array context submenu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $submenu=array();



	/**
	 * @var array context topic menu. This property will be assigned to {@link CMenu::items}.
	 */
	public $topics_menu=array();



	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();



    /**
     * @var string Prefix used for all ADBC form CSS classes 
     */
    private $form_css_prefix = 'adbc-form';



    /**
     * @var array The configuration used for all forms in ADBC.
     */
    protected $form_config = array(
        'enableAjaxValidation' => true,
        'enableClientValidation' => false,
        'method' => 'post',
    );



    /**
     * Initializes the controller
     *
     * @return void
     */
    public function init()
    {
        $cmods = $this->getCmodNames();
        $this->menu = array();

        foreach ($cmods as $name)
        {
            $this->menu[] = array(
                'label'=>$name,
                'url'=>array('/'.$this->nameToId($name))
            );
        }

        $this->menu[] = array('label'=>'Info', 'url'=>'/info');
    }



    /**
     * Starts rendering a form in a view, and returns
     * the CActiveForm object to be used. You must
     * call {@link Controller::endFormRender} once
     * you are done using the form object.
     *
     * @return CActiveForm
     */
    public function beginFormRender($model)
    {
        
        $this->form_config['errorMessageCssClass'] = $this->form_css_prefix.'-error';
        $this->form_config['htmlOptions'] = array(
            'class' => $this->form_css_prefix,
        );

        $form = $this->beginWidget('CActiveForm', $this->form_config);

        $flash_html_options = array(
            'class' => $this->form_css_prefix . '-error-summary',
        );

        echo $form->errorSummary($model, null, null, $flash_html_options);

        return $form;
    }



    /**
     * Renders all available topics as indexed by selection,
     * returning the HTML to render.
     *
     * @return string HTML
     */
    public function renderTopicSelection()
    {
        $params = Yii::app()->params['adbcTopics'];

        if (is_null($this->module))
        {
            return "";
        }

        $selection = $this->findNameById($this->module->id, $params);

        if (is_null($selection))
        {
            return "";
        }


        $html = "";
        foreach ($selection as $heading => $topics)
        {
            $html .= $this->renderTopicsBlock($heading, $topics);
        }

        return CHtml::tag('div', array('class'=>'accordion'), $html);
    }
    


    /**
     * Returns HTML containing topics in a SMOD.
     * 
     * @param string $heading Contents of a leading <h1> tag.
     * @param array $topics Associative array of topics with child keys "name" and "description"
     * @return string
     */
    function renderTopicsBlock($heading, $topics = array())
    {
        $h1 = CHtml::tag('h1', array('class'=>'topics-heading'), $heading);

        $lis = "";
        foreach ($topics as $name=>$metadata)
        {
            $desc = isset($metadata['description']) ? $metadata['description'] : "";
            $class = 'topic-name' . (isset($metadata['class']) ? (" ".$metadata['class']) : '');


            // TODO: Document convention
            $controller_id = strtolower(str_replace(' ', '', $heading));
            $action_id     = strtolower(str_replace(' ', '', $name));
            $url = $this->createUrl($controller_id . '/' . $action_id);

            $p = CHtml::tag('p', array('class'=>'topic-description'), $desc);
            $a = CHtml::link($name, $url, array('class'=>$class));

            $lis .= CHtml::tag('li', array(), $a.$p);
        }

        $ul = CHtml::tag('ul', array('class'=>'topics-listing'), $lis);

        return $h1.CHtml::tag('div', array('class'=>'topic-block'), $ul);
    }


    /**
     * We are in a topic if we are in a module with a currently executing action
     */
    public function isInTopic()
    {
        return !is_null($this->module) && !is_null($this->action) && $this->id !== "default";
    }

    /**
     * Returns navigation menu for topics near the current topic.
     */

    public function getRelativeTopicNavigation()
    {
        if (is_null($this->action))
        {
            return "";
        }

        $mid = $this->module->id;
        $cid = $this->id;
        $aid = $this->action->id;

        $cmods = Yii::app()->params['adbcTopics'];

        $smods  = $this->findNameById($mid, $cmods);

        if (is_null($smods))
        {
            return "";
        }

        $topics = $this->findNameById($cid, $smods);

        if (is_null($topics))
        {
            return "";
        }

        $names = array_keys($topics);
        $ids   = array_map(function($n){ return Controller::nameToId($n); }, $names);

        $index = array_search($aid, $ids);

        $prev_aid = null;
        $next_aid = null;
        $links    = "";

        if ($index > 0)
        {
            $prev_aid  = $ids[$index - 1];
            $prev_name = $names[$index - 1];
            $links .= CHtml::link("&laquo; $prev_name", '/'.$mid.'/'.$cid.'/'.$prev_aid);
        }

        $links .= CHtml::link('[Index]', '/'.$mid);

        if ($index < (count($ids) - 1))
        {
            $next_aid  = $ids[$index + 1];
            $next_name = $names[$index + 1];
            $links .= CHtml::link("$next_name &raquo;", '/'.$mid.'/'.$cid.'/'.$next_aid);
        }

        return CHtml::tag('nav', array('class'=>'topic-relative-nav'), $links);
    }

    /**
     * Searches an array for a value keyed by a string that, when
     * converted to an ADbC identifier, matches the $id argument.
     */
    public function findNameById($id, $array)
    {
        foreach ($array as $k=>$v)
        {
            if (Controller::nameToId($k) === $id)
            {
                return $v;
            }
        }

        return null;
    }


    /**
     * @return array List of CMOD names
     */
    public function getCmodNames()
    {
        return array_keys(Yii::app()->params['adbcTopics']);
    }

    /**
     * @param $name string A human-readable string containing only single spaces (no newlines, tabs, etc)
     * @return string An identifier string used for CMOD, SMOD and topic IDs.
     */
    public static function nameToId($name)
    {
        return strtolower(str_replace(" ", "", $name));
    }


    /**
     * Closes rendering of a form
     *
     * @return void
     */
    public function endFormRender()
    {
        $this->endWidget();
    }



    /**
     * Returns if the current action displays the home page.
     *
     * @return boolean
     */
    public function isHomePage()
    {
        $default_controller = Yii::app()->defaultController;

        $a = $this->id === $default_controller;
        $b = is_null($this->action);
        if (!$b)
        {
            $b = $this->action->id === $this->defaultAction;
        }

        return $a && $b;
    }



    /**
     * Registers client scripts needed for all actions
     *
     * @return boolean Whether or not the action can continue
     */
    public function beforeAction($action)
    {
        parent::beforeAction($action);

        $scripts = Yii::app()->clientScript;

        $scripts->registerScriptFile('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js');
        $scripts->registerScriptFile('//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js');

        $scripts->registerScriptFile('/js/adbc.js', CClientScript::POS_HEAD);
        $scripts->registerScriptFile('/js/worker.sql.js', CClientScript::POS_HEAD);

        $scripts->registerCssFile('//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css'); 

        $scripts->registerScript(
            'ui-common',
            "$('.accordion').accordion({
                heightStyle: 'content',
                    collapsible: true,
                    active: false
            });
    
            ", 
            CClientScript::POS_READY
        );

        if ($this->isInTopic())
        {
            $this->layout = '//layouts/column2';
        }

        return true;
    }



    /**
     * Returns an HTML SQL editor that modifies a client-side copy
     * of a SQLite3 database delivered from the server.
     *
     * @param $db_name string Name of the SQLite3 database. If null, will be set to the current route.
     * @param $default_code string Preformatted code to place inside the textarea of the editor
     * @return string HTML for an editor
     */
    public function getSqlEditor($db_name, $default_code = '')
    {
        if (is_null($db_name))
        {
            $db_name = $this->getRoute();
        }

        $output   = CHtml::tag('output', array(), '');
        $textarea = CHtml::tag('textarea', array(), $default_code);
        $lis      = CHtml::tag('li', array('class'=>'sql-editor-execute icon-flash'), "");
        $buttons  = CHtml::tag('ul', array('class'=>'sql-editor-buttons'), $lis);
        $toolbar  = CHtml::tag('div', array('class'=>'sql-editor-toolbar'), $buttons);

        return CHtml::tag(
            'div',
            array(
                'class' => 'sql-editor',
                'data-base-name' => $db_name
            ),
            $toolbar.$textarea.$output
        );
    }
}
