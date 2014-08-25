<?php

class AdvancedquerypseudocodeController extends Controller
{
	public function actionDifference()
	{
		$this->render('difference');
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionIntersection()
	{
		$this->render('intersection');
	}

	public function actionJoin()
	{
		$this->render('join');
	}

	public function actionMinus()
	{
		$this->render('minus');
	}

	public function actionMultiplication()
	{
		$this->render('multiplication');
	}

	public function actionOuterjoin()
	{
		$this->render('outerjoin');
	}

	public function actionUnion()
	{
		$this->render('union');
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