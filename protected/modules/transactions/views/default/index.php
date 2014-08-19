<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);


echo $this->renderTopicsBlock('Concurrency', array(
    array(
        'name'=>'Introduction',
        'description'=>'',
    ),
    array(
        'name'=>'Lost Update',
        'description'=>'',
    ),
    array(
        'name'=>'Deadlock',
        'description'=>'',
    ),
    array(
        'name'=>'Record Locking',
        'description'=>'',
    ),
    array(
        'name'=>'Serial Locking',
        'description'=>'',
    ),
    array(
        'name'=>'Locking without Error Code',
        'description'=>'',
    ),
    array(
        'name'=>'Locking with Commit',
        'description'=>'',
    ),
    array(
        'name'=>'Locking with Continue',
        'description'=>'',
    ),
    array(
        'name'=>'Locking with Rollback',
        'description'=>'',
    ),
    array(
        'name'=>'Database concurrency without record locking',
        'description'=>'',
    ),
    array(
        'name'=>'Database concurrency with record locking',
        'description'=>'',
    ),
    array(
        'name'=>'Database concurrency with deadlock',
        'description'=>'',
    ),
    array(
        'name'=>'Database concurrency with serial locking',
        'description'=>'',
    ),
));

echo $this->renderTopicsBlock('Recovery', array(
    array(
        'name'=>'Introduction',
        'description'=>'',
    ),
    array(
        'name'=>'Logical and Physical Updates',
        'description'=>'',
    ),
    array(
        'name'=>'Quiz',
        'description'=>'',
    ),
));
