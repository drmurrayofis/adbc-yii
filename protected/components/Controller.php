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
        $this->menu = array(
            array('label' => 'Database Design', 'url' => array('/design')),
            array('label' => 'SQL', 'url' => array('/sql')),
            array('label' => 'Transactions', 'url' => array('/transactions')),
            array('label' => 'Security', 'url' => array('/security')),
            array('label' => 'Info', 'url' => array('/info')),
        );
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
     * Closes rendering of a form
     *
     * @return void
     */
    public function endFormRender()
    {
        $this->endWidget();
    }
}
