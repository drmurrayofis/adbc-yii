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
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Function',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Group By',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Having',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Distinct',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Order By',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
    ),

    'Advanced Queries' => array(
        array(
            'name'=>'Multiplication',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Join',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Outer Join',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Union',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Intersection',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Difference',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Regular Views',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Materialized Views',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
    ),

    'Misconceptions' => array(
        array(
            'name'=>'JOIN',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'AND',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Exclusion',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
    ),



    'Pseudocode' => array(
        array(
            'name'=>'Introduction',
            'description'=>'',
        ),
    ),


    'Basic Query Pseudocode' => array(
        array(
            'name'=>'Projection',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Restriction',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Function',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Group By',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Having',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Distinct',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Order By',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
    ),


    'Advanced Query Pseudocode' => array(
        array(
            'name'=>'Multiplication',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Join',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Outer Join',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Union',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Intersection',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Difference',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Join',
            'description'=>'',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Minus',
            'description'=>'',
            'class'=>'topic-not-started',
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
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Cursors',
            'description'=>'Embed SQL into a program that will allow it to '.
                           'individually cycle through the rows of a results '.
                           'table in Oracle.',
            'class'=>'topic-not-started',
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
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Triggers',
            'description'=>'Learn about triggers.',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Trigger and Error',
            'description'=>'Observe that when a trigger fails, '.
                           'the event that generated the trigger '.
                           'will also fail.',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Trigger with Wait',
            'description'=>'Observe that when a trigger attempts to '.
                           'update locked data, it waits until it is released.',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Stored Functions',
            'description'=>'Create stored functions that return '.
                           'values for use in a given situation',
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Rights',
            'description'=>'Learn of Creator\'s and Invoker\'s rights.',
            'class'=>'topic-not-started',
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
            'class'=>'topic-not-started',
        ),
        array(
            'name'=>'Delete',
            'description'=>'Observe how data maintains refererential integrity during a DELETE',
            'class'=>'topic-not-started',
        ),
    ),
));
