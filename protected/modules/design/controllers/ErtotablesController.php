<?php

class ErtotablesController extends Controller
{
	public function action1to1employee()
	{
		$this->render('1to1employee');
	}

	public function action1to1faculty()
	{
		$this->render('1to1faculty');
	}

	public function action1tonbinary()
	{
		$this->render('1tonbinary');
	}

	public function action1tonunary()
	{
		$this->render('1tonunary');
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionIntroduction()
	{
		$this->render('introduction');
	}

	public function actionNtonbinary()
	{
		$this->render('ntonbinary');
	}

	public function actionNtonunary()
	{
		$this->render('ntonunary');
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