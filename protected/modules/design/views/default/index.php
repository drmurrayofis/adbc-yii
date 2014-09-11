<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);

echo $this->renderTopicSelection(array(
    'ER Notations'=>array(
        array(
            'name'=>'Examples',
            'description'=>'Observe several ER diagrams of '.
                           'relationships in varying notations.',
        ),
    ),
    'Scenario to ER'=>array(
        array(
            'name'=>'Introduction',
            'description'=>'',
        ),
        array(
            'name'=>'Employee',
            'description'=>'',
        ),
        array(
            'name'=>'Phone',
            'description'=>'',
        ),
        array(
            'name'=>'Automobile',
            'description'=>'',
        ),
        array(
            'name'=>'Suppliers',
            'description'=>'',
        ),
        array(
            'name'=>'Medical Referral',
            'description'=>'',
        ),
        array(
            'name'=>'University',
            'description'=>'',
        ),
        array(
            'name'=>'Car Dealer',
            'description'=>'',
        ),
        array(
            'name'=>'Prescription',
            'description'=>'',
        ),
        array(
            'name'=>'Orders',
            'description'=>'',
        ),
    ),
    'ER to Tables'=>array(
        array(
            'name'=>'Introduction',
            'description'=>'',
        ),
        array(
            'name'=>'1 to N Binary',
            'description'=>'Design a database table that efficiently represents '.
                           'a company\'s departmental employee structure.',
        ),
        array(
            'name'=>'1 to N Unary',
            'description'=>'Design a database table that effciently represents '.
                           'the employees and their managers of a company.',
        ),
        array(
            'name'=>'1 to 1 Employee',
            'description'=>'Design a database table structure that will manage '.
                           'the assigned parking spaces of employees.',
        ),
        array(
            'name'=>'1 to 1 Faculty',
            'description'=>'Design a database table that best associates '.
                           'faculty members with their respective departments.',
        ),
        array(
            'name'=>'N to N Binary',
            'description'=>'Design a database table that best associates '.
                           'the employees of a company with the projects '.
                           'that they are working on.',
        ),
        array(
            'name'=>'N to N Unary',
            'description'=>'Design a database table that will best represent '.
                           'a company\'s complex project structure.',
        ),
    ),
    'Managing Anomalies'=>array(
        array(
            'name'=>'Introduction',
            'description'=>'',
        ),
        array(
            'name'=>'Basics of Normalization',
            'description'=>'Learn about the basic forms of normalization '.
                           'and the forms associated with normalization',
        ),
        array(
            'name'=>'Denormalization',
            'description'=>'Learn about the applications of denormalization.',
        ),
        array(
            'name'=>'Functional Dependencies',
            'description'=>'Learn about how data can logically determine other data.',
        ),
        array(
            'name'=>'Normalizing Employees',
            'description'=>'Normalize data on company employees.',
        ),
        array(
            'name'=>'Normalizing Customers',
            'description'=>'Normalize data on customers.',
        ),
        array(
            'name'=>'Normalizing Auto theft suspects',
            'description'=>'Normalize data on auto theft suspects.',
        ),
        array(
            'name'=>'Normalizing Properties',
            'description'=>'Normalize data on auto theft suspects.',
        ),
        array(
            'name'=>'Normalizing Doctor prescriptions',
            'description'=>'Normalize data on doctor prescriptions.',
        ),
        array(
            'name'=>'Dependencies quiz',
            'description'=>'Learn about how data can logically determine other data.',
        ),
        array(
            'name'=>'Denormalization quiz',
            'description'=>'',
        ),
        array(
            'name'=>'Anomalies Quiz',
            'description'=>'',
        ),
    ),
));
