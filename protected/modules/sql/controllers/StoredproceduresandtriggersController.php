<?php

class StoredproceduresandtriggersController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionIntroduction()
	{
		$this->render('introduction');
	}

	public function actionProcedures()
	{
		$this->render('procedures');
	}

	public function actionRights()
	{
		$this->render('rights');
	}

	public function actionStoredfunctions()
	{
		$this->render('storedfunctions');
	}

	public function actionTriggeranderror()
	{
		$this->render('triggeranderror');
	}

	public function actionTriggers()
	{
		$this->render('triggers');
	}

	public function actionTriggerwithwait()
	{
		$this->render('triggerwithwait');
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