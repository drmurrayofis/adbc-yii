<?php

/**
 * Provides information about ADBC as a project, and as a service.
 */
class InfoController extends Controller
{
    public $layout = '//layouts/article';

	/**
     * Present static "About Us" content
	 */
	public function actionIndex()
	{
		$this->render('about');
	}



	/**
	 * Present project documentation
	 */
	public function actionDocs()
	{
		$this->render('project_docs');
	}



    /**
     * Presents an evaluation form under one of two scenarios.
     * If called when POST data is submitted for the form,
     * then that data will be saved in an XML file.
     *
     * @param string $scenario Controls validation scenario. May be 'student' or 'instructor'.
     * @return void
     */
    public function processEvaluationForm($scenario)
    {
        $questions = file(Yii::getPathOfAlias('webroot')."/files/{$scenario}_questions");

		$model = new EvaluationForm($questions, $scenario);

		if(isset($_POST['EvaluationForm'], $_POST['SurveyQuestion']))
		{
			$model->attributes = $_POST['EvaluationForm'];

            for ($i = 0; $i < count($model->survey_questions); ++$i)
            {
                if (isset($_POST['SurveyQuestion'][$i]))
                {
			        $model->survey_questions[$i]->attributes = $_POST['SurveyQuestion'][$i];
                }
                else
                {
			        $model->survey_questions[$i]->answer = null;
                }
            }

			if ($model->validate())
			{
                $xml = $model->getXml();
                $filename = $model->generateFileName();

                file_put_contents($filename, $xml, LOCK_EX);
			}
		}

		$this->render('evaluation', array('model'=>$model));
    }
    


    /**
     * Presents a student evaluation form.
     */
    public function actionStudentEval()
    {
        $this->processEvaluationForm('student');
    }



    /**
     * Presents an instructor evaluation form.
     */
    public function actionInstructorEval()
    {
        $this->processEvaluationForm('instructor');
    }
    
    

    /**
     * Initializes the controller
     */
    public function init()
    {
        // Define navigation for this part of the site.
        parent::init();

        $this->submenu = array(
            array(
                'label' => 'Manual',
                'url' => '/files/adbc.doc',
            ),
            array(
                'label' => 'Project Documentation',
                'url' => '/info/docs',
            ),
            array(
                'label' => 'About Us',
                'url' => '/info/index',
            ),
            array(
                'label' => 'Student Evaluation',
                'url' => '/info/studentEval',
            ),
            array(
                'label' => 'Instructor Evaluation',
                'url' => '/info/instructorEval',
            ),
        );


        CHtml::$requiredCss = "required-label";
    }
}
