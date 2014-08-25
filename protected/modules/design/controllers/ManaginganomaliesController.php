<?php

class ManaginganomaliesController extends Controller
{
	public function actionAnomaliesquiz()
	{
		$this->render('anomaliesquiz');
	}

	public function actionBasicsofnormalization()
	{
		$this->render('basicsofnormalization');
	}

	public function actionDenormalization()
	{
		$this->render('denormalization');
	}

	public function actionDenormalizationquiz()
	{
		$this->render('denormalizationquiz');
	}

	public function actionDependenciesquiz()
	{
		$this->render('dependenciesquiz');
	}

	public function actionFunctionaldependencies()
	{
		$this->render('functionaldependencies');
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionIntroduction()
	{
		$this->render('introduction');
	}

	public function actionNormalizingautotheftsuspects()
	{
		$this->render('normalizingautotheftsuspects');
	}

	public function actionNormalizingcustomers()
	{
		$this->render('normalizingcustomers');
	}

	public function actionNormalizingdoctorprescriptions()
	{
		$this->render('normalizingdoctorprescriptions');
	}

	public function actionNormalizingemployees()
	{
		$this->render('normalizingemployees');
	}

	public function actionNormalizingproperties()
	{
		$this->render('normalizingproperties');
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