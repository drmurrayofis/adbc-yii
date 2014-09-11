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
        ),
        array(
            'name'=>'Revoke',
            'description'=>'Observe how the REVOKE command is used to take away user privileges to database objects.',
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
        ),
        array(
            'name'=>'Example scenario II',
            'description'=>'',
        ),
        array(
            'name'=>'Parameterized Queries',
            'description'=>'',
        ),
        array(
            'name'=>'Quiz',
            'description'=>'',
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
        ),
        array(
            'name'=>'Example scenario II',
            'description'=>'',
        ),
        array(
            'name'=>'Example scenario III',
            'description'=>'',
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
        ),
        array(
            'name'=>'Audit DML',
            'description'=>'',
        ),
        array(
            'name'=>'Audit DDL',
            'description'=>'',
        ),
        array(
            'name'=>'Audit Command',
            'description'=>'',
        ),
        array(
            'name'=>'Audit Default Pwd',
            'description'=>'',
        ),
    ),
));
