<?php

class ScenariotoerController extends Controller
{
	public function actionAutomobile()
	{
		$this->render('automobile');
	}

	public function actionCardealer()
	{
		$this->render('cardealer');
	}

	public function actionEmployee()
	{
		$this->render('employee');
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionIntroduction()
	{
		$this->render('introduction');
	}

	public function actionMedicalreferral()
	{
		$this->render('medicalreferral');
	}

	public function actionOrders()
	{
		$this->render('orders');
	}

	public function actionPhone()
	{
		$this->render('phone');
	}

	public function actionPrescription()
	{
		$this->render('prescription');
	}

	public function actionSuppliers()
	{
		$this->render('suppliers');
	}

	public function actionUniversity()
	{
		$this->render('university');
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