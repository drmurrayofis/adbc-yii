<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);


echo $this->renderTopicsBlock('Interactive SQL', array(
    array(
        'name'=>'Introduction',
        'description'=>'',
    ),
    array(
        'name'=>'DDL',
        'description'=>'Use SQL to define databases and tables.',
    ),
    array(
        'name'=>'DML',
        'description'=>'Use SQL to manipulate data.',
    ),
    array(
        'name'=>'Basic Queries - Projection',
        'description'=>'',
    ),
    array(
        'name'=>'Basic Queries - Restriction',
        'description'=>'',
    ),
    array(
        'name'=>'Basic Queries - Function',
        'description'=>'',
    ),
    array(
        'name'=>'Basic Queries - Group By',
        'description'=>'',
    ),
    array(
        'name'=>'Basic Queries - Having',
        'description'=>'',
    ),
    array(
        'name'=>'Basic Queries - Distinct',
        'description'=>'',
    ),
    array(
        'name'=>'Basic Queries - Order By',
        'description'=>'',
    ),
    array(
        'name'=>'Advanced Queries - Multiplication',
        'description'=>'',
    ),
    array(
        'name'=>'Advanced Queries - Join',
        'description'=>'',
    ),
    array(
        'name'=>'Advanced Queries - Outer Join',
        'description'=>'',
    ),
    array(
        'name'=>'Advanced Queries - Union',
        'description'=>'',
    ),
    array(
        'name'=>'Advanced Queries - Intersection',
        'description'=>'',
    ),
    array(
        'name'=>'Advanced Queries - Difference',
        'description'=>'',
    ),
    array(
        'name'=>'Regular Views',
        'description'=>'',
    ),
    array(
        'name'=>'Materialized Views',
        'description'=>'',
    ),
    array(
        'name'=>'Misconception about JOIN',
        'description'=>'',
    ),
    array(
        'name'=>'Misconception about AND',
        'description'=>'',
    ),
    array(
        'name'=>'Misconception about excluding distinct results',
        'description'=>'',
    ),
));



echo $this->renderTopicsBlock('SQL Pseudocode', array(
    array(
        'name'=>'Introduction',
        'description'=>'',
    ),
    array(
        'name'=>'DDL',
        'description'=>'Use SQL to define databases and tables.',
    ),
    array(
        'name'=>'DML',
        'description'=>'Use SQL to manipulate data.',
    ),
    array(
        'name'=>'Basic Queries - Projection',
        'description'=>'',
    ),
    array(
        'name'=>'Basic Queries - Restriction',
        'description'=>'',
    ),
    array(
        'name'=>'Basic Queries - Function',
        'description'=>'',
    ),
    array(
        'name'=>'Basic Queries - Group By',
        'description'=>'',
    ),
    array(
        'name'=>'Basic Queries - Having',
        'description'=>'',
    ),
    array(
        'name'=>'Basic Queries - Distinct',
        'description'=>'',
    ),
    array(
        'name'=>'Basic Queries - Order By',
        'description'=>'',
    ),
    array(
        'name'=>'Advanced Queries - Multiplication',
        'description'=>'',
    ),
    array(
        'name'=>'Advanced Queries - Join',
        'description'=>'',
    ),
    array(
        'name'=>'Advanced Queries - Outer Join',
        'description'=>'',
    ),
    array(
        'name'=>'Advanced Queries - Union',
        'description'=>'',
    ),
    array(
        'name'=>'Advanced Queries - Intersection',
        'description'=>'',
    ),
    array(
        'name'=>'Advanced Queries - Difference',
        'description'=>'',
    ),
    array(
        'name'=>'Basic Queries - Projection',
        'description'=>'',
    ),
    array(
        'name'=>'Join',
        'description'=>'',
    ),
    array(
        'name'=>'Minus',
        'description'=>'',
    ),
));



echo $this->renderTopicsBlock('Embedded SQL', array(
    array(
        'name'=>'Introduction',
        'description'=>'',
    ),
    array(
        'name'=>'Reading data',
        'description'=>'Embed SQL into a program that will allow it '.
                       'to access and read information from a database.',
    ),
    array(
        'name'=>'Cursors',
        'description'=>'Embed SQL into a program that will allow it to '.
                       'individually cycle through the rows of a results '.
                       'table in Oracle.',
    ),
));


echo $this->renderTopicsBlock('Stored Procedures and Triggers', array(
    array(
        'name'=>'Introduction',
        'description'=>'',
    ),
    array(
        'name'=>'Procedures',
        'description'=>'Create a stored procedure that will return '.
                       'a series of variables for a given situation.',
    ),
    array(
        'name'=>'Triggers',
        'description'=>'Learn about triggers.',
    ),
    array(
        'name'=>'Trigger and Error',
        'description'=>'Observe that when a trigger fails, '.
                       'the event that generated the trigger '.
                       'will also fail.',
    ),
    array(
        'name'=>'Trigger with Wait',
        'description'=>'Observe that when a trigger attempts to '.
                       'update locked data, it waits until it is released.',
    ),
    array(
        'name'=>'Stored Functions',
        'description'=>'Create stored functions that return '.
                       'values for use in a given situation',
    ),
    array(
        'name'=>'Rights',
        'description'=>'Learn of Creator\'s and Invoker\'s rights.',
    )
));

echo $this->renderTopicsBlock('Referential Integrity', array(
    array(
        'name'=>'Introduction',
        'description'=>'',
    ),
    array(
        'name'=>'Update',
        'description'=>'Observe how data maintains refererential integrity during an UPDATE',
    ),
    array(
        'name'=>'Delete',
        'description'=>'Observe how data maintains refererential integrity during a DELETE',
    ),
));
