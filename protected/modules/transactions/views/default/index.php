<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);


echo $this->renderTopicSelection(array(
    'Concurrency' => array(
        array(
            'name'=>'Introduction',
            'description'=>'',
        ),
        array(
            'name'=>'Lost Update',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Deadlock',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Record Locking',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Serial Locking',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Locking without Error Code',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Locking with Commit',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Locking with Continue',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Locking with Rollback',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Database concurrency without record locking',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Database concurrency with record locking',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Database concurrency with deadlock',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Database concurrency with serial locking',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
    ),

    'Recovery' => array(
        array(
            'name'=>'Introduction',
            'description'=>'',
        ),
        array(
            'name'=>'Logical and Physical Updates',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Quiz',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
    ),
));
