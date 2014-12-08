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
        $cmods = CourseMeta::getCmodNames();
        $this->menu = array();

        foreach ($cmods as $name)
        {
            $this->menu[] = array(
                'label'=>$name,
                'url'=>array('/'.CourseMeta::nameToId($name))
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
     * @return boolean True if the current module is listed as a CMOD.
     */
    public function isInCmod()
    {
        return !is_null($this->module) &&
               in_array($this->module->id, CourseMeta::getCmodIds());
    }



    /**
     * @return boolean True if in a CMOD and this controller is listed under it.
     */
    public function isInSmod()
    {
        return $this->isInCmod() &&
               in_array($this->id, CourseMeta::getSmodIds($this->module->id));
    }

    

    /**
     * @return boolean true if the current action is inside a SMOD.
     */
    public function isInTopic()
    {
        return $this->isInSmod() &&
               !is_null($this->action) &&
               in_array($this->action->id,
                        CourseMeta::getTopicIds(
                            $this->module->id,
                            $this->id));
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
     * @return string HTML containing the relevant navigation UI.
     */
    public function renderCourseNavigation()
    {
        if (!$this->isInCmod() || $this->isInTopic())
        {
            throw new Exception("Can only render course navigation on a CMOD's default page.");
        }

        return CourseNavigation::renderCmodNavigation($this->module->id);
    }

    public function renderRelativeNavigation()
    {
        if (!$this->isInTopic())
        {
            throw new Exception("Cannot render course navigation when outside of a topic.");
        }

        return CourseNavigation::renderRelativeNavigation($this->module->id, $this->id, $this->action->id);
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

        LiveSql::registerClientScripts();

        $scripts->registerCssFile('//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css'); 

        if ($this->isInCmod() && !$this->isInTopic())
        {
            // enable jQuery UI accordians on CMOD navigations
            $scripts->registerScript(
                'ui-common',
                "$('.accordion').accordion({
                    heightStyle: 'content',
                        collapsible: true,
                        active: false
                });", 
                CClientScript::POS_READY
            );
        }

        if ($this->isInTopic())
        {
            $this->layout = '//layouts/column2';
        }

        return true;
    }



    /**
     * Returns HTML for an editor in which to practice SQL.
     *
     * @param $code string Placeholder code 
     * @return string HTML for an editor
     */
    public function getSqlEditor($code = '')
    {
        return LiveSql::renderEditor($this->getRoute(), $code);
    }
}
