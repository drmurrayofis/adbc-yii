<?php

class ConcurrencyController extends Controller
{
	public function actionDatabaseconcurrencywithdeadlock()
	{
		$this->render('databaseconcurrencywithdeadlock');
	}

	public function actionDatabaseconcurrencywithoutrecordlocking()
	{
		$this->render('databaseconcurrencywithoutrecordlocking');
	}

	public function actionDatabaseconcurrencywithrecordlocking()
	{
		$this->render('databaseconcurrencywithrecordlocking');
	}

	public function actionDatabaseconcurrencywithseriallocking()
	{
		$this->render('databaseconcurrencywithseriallocking');
	}

	public function actionDeadlock()
	{
		$this->render('deadlock');
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionIntroduction()
	{
		$this->render('introduction');
	}

	public function actionLockingwithcommit()
	{
		$this->render('lockingwithcommit');
	}

	public function actionLockingwithcontinue()
	{
		$this->render('lockingwithcontinue');
	}

	public function actionLockingwithouterrorcode()
	{
		$this->render('lockingwithouterrorcode');
	}

	public function actionLockingwithrollback()
	{
		$this->render('lockingwithrollback');
	}

	public function actionLostupdate()
	{
		$this->render('lostupdate');
	}

	public function actionRecordlocking()
	{
		$this->render('recordlocking');
	}

	public function actionSeriallocking()
	{
		$this->render('seriallocking');
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