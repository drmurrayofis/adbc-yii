<?php

class DatabaseauditingController extends Controller
{
	public function actionAuditcommand()
	{
		$this->render('auditcommand');
	}

	public function actionAuditddl()
	{
		$this->render('auditddl');
	}

	public function actionAuditdefaultpwd()
	{
		$this->render('auditdefaultpwd');
	}

	public function actionAuditdml()
	{
		$this->render('auditdml');
	}

	public function actionAuditlogin()
	{
		$this->render('auditlogin');
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionIntroduction()
	{
		$this->render('introduction');
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