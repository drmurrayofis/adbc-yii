<?php

class BasicqueriesController extends Controller
{
	public function actionDistinct()
	{
		$this->render('distinct');
	}

	public function actionFunction()
	{
		$this->render('function');
	}

	public function actionGroupby()
	{
		$this->render('groupby');
	}

	public function actionHaving()
	{
		$this->render('having');
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionOrderby()
	{
		$this->render('orderby');
	}

	public function actionProjection()
	{
		$this->render('projection');
	}

	public function actionRestriction()
	{
		$this->render('restriction');
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