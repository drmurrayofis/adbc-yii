<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);


echo $this->renderTopicSelection(array(
    'Interactive SQL' => array(
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
    ),



    'Basic Queries' => array(
        array(
            'name'=>'Projection',
            'description'=>'',
        ),
        array(
            'name'=>'Restriction',
            'description'=>'',
        ),
        array(
            'name'=>'Function',
            'description'=>'',
        ),
        array(
            'name'=>'Group By',
            'description'=>'',
        ),
        array(
            'name'=>'Having',
            'description'=>'',
        ),
        array(
            'name'=>'Distinct',
            'description'=>'',
        ),
        array(
            'name'=>'Order By',
            'description'=>'',
        ),
    ),

    'Advanced Queries' => array(
        array(
            'name'=>'Multiplication',
            'description'=>'',
        ),
        array(
            'name'=>'Join',
            'description'=>'',
        ),
        array(
            'name'=>'Outer Join',
            'description'=>'',
        ),
        array(
            'name'=>'Union',
            'description'=>'',
        ),
        array(
            'name'=>'Intersection',
            'description'=>'',
        ),
        array(
            'name'=>'Difference',
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
    ),

    'Misconceptions' => array(
        array(
            'name'=>'JOIN',
            'description'=>'',
        ),
        array(
            'name'=>'AND',
            'description'=>'',
        ),
        array(
            'name'=>'Exclusion',
            'description'=>'',
        ),
    ),



    'Pseudocode' => array(
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
    ),


    'Basic Query Pseudocode' => array(
        array(
            'name'=>'Projection',
            'description'=>'',
        ),
        array(
            'name'=>'Restriction',
            'description'=>'',
        ),
        array(
            'name'=>'Function',
            'description'=>'',
        ),
        array(
            'name'=>'Group By',
            'description'=>'',
        ),
        array(
            'name'=>'Having',
            'description'=>'',
        ),
        array(
            'name'=>'Distinct',
            'description'=>'',
        ),
        array(
            'name'=>'Order By',
            'description'=>'',
        ),
    ),


    'Advanced Query Pseudocode' => array(
        array(
            'name'=>'Multiplication',
            'description'=>'',
        ),
        array(
            'name'=>'Join',
            'description'=>'',
        ),
        array(
            'name'=>'Outer Join',
            'description'=>'',
        ),
        array(
            'name'=>'Union',
            'description'=>'',
        ),
        array(
            'name'=>'Intersection',
            'description'=>'',
        ),
        array(
            'name'=>'Difference',
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
    ),



    'Embedded SQL' => array(
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
    ),


    'Stored Procedures and Triggers' => array(
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
    ),

    'Referential Integrity' => array(
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
    ),
));
