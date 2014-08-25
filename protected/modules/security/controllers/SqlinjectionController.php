<?php

class SqlinjectionController extends Controller
{
	public function actionExamplescenarioi()
	{
		$this->render('examplescenarioi');
	}

	public function actionExamplescenarioii()
	{
		$this->render('examplescenarioii');
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionInteractivescenarioindex()
	{
		$this->render('interactivescenarioindex');
	}

	public function actionIntroduction()
	{
		$this->render('introduction');
	}

	public function actionParameterizedqueries()
	{
		$this->render('parameterizedqueries');
	}

	public function actionQuiz()
	{
		$this->render('quiz');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}