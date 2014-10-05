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
            'class'=>'topic-not-started',
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
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Phone',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Automobile',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Suppliers',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Medical Referral',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'University',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Car Dealer',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Prescription',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Orders',
            'description'=>'',
            'class'=>'topic-not-started',
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
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'1 to N Unary',
            'description'=>'Design a database table that effciently represents '.
                           'the employees and their managers of a company.',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'1 to 1 Employee',
            'description'=>'Design a database table structure that will manage '.
                           'the assigned parking spaces of employees.',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'1 to 1 Faculty',
            'description'=>'Design a database table that best associates '.
                           'faculty members with their respective departments.',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'N to N Binary',
            'description'=>'Design a database table that best associates '.
                           'the employees of a company with the projects '.
                           'that they are working on.',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'N to N Unary',
            'description'=>'Design a database table that will best represent '.
                           'a company\'s complex project structure.',
            'class'=>'topic-not-started',
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
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Denormalization',
            'description'=>'Learn about the applications of denormalization.',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Functional Dependencies',
            'description'=>'Learn about how data can logically determine other data.',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Normalizing Employees',
            'description'=>'Normalize data on company employees.',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Normalizing Customers',
            'description'=>'Normalize data on customers.',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Normalizing Auto theft suspects',
            'description'=>'Normalize data on auto theft suspects.',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Normalizing Properties',
            'description'=>'Normalize data on auto theft suspects.',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Normalizing Doctor prescriptions',
            'description'=>'Normalize data on doctor prescriptions.',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Dependencies quiz',
            'description'=>'Learn about how data can logically determine other data.',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Denormalization quiz',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Anomalies Quiz',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
    ),
));
