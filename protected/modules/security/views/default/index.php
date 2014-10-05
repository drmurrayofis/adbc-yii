<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);


echo $this->renderTopicSelection(array(
    'Access Control' => array(
        array(
            'name'=>'Introduction',
            'description'=>'',
        ),
        array(
            'name'=>'Grant',
            'description'=>'Observe how the GRANT command is used to give user privileges to database objects.',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Revoke',
            'description'=>'Observe how the REVOKE command is used to take away user privileges to database objects.',
            'class'=>'topic-not-started',
        ),
    ),



    'Security Matrix' => array(
        array(
            'name'=>'Introduction',
            'description'=>'',
        ),
        array(
            'name'=>'Sample Matrix',
            'description'=>'Observe and study a sample security matrix to answer quiz questions.',
            'class'=>'topic-not-started',
        ),
    ),



    'Row Level Security' => array(
        array(
            'name'=>'Introduction',
            'description'=>'',
        ),
        array(
            'name'=>'Interactive Scenario',
            'description'=>'Explore Row Level Security and view the SQL code required to create it on the database.',
            'class'=>'topic-not-started',
        ),
    ),



    'SQL Injection' => array(
        array(
            'name'=>'Introduction',
            'description'=>'',
        ),
        array(
            'name'=>'Example scenario I',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Example scenario II',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Parameterized Queries',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Quiz',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
    ),



    'Database Inference' => array(
        array(
            'name'=>'Introduction',
            'description'=>'',
        ),
        array(
            'name'=>'Example scenario I',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Example scenario II',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Example scenario III',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
    ),



    'Database Auditing' => array(
        array(
            'name'=>'Introduction',
            'description'=>'',
        ),
        array(
            'name'=>'Audit Login',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Audit DML',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Audit DDL',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Audit Command',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Audit Default Pwd',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
    ),
));
