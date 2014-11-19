<?php

return array(
    'SQL'=>array(
        'Interactive SQL' => array(
            'Introduction'=>array(
                'description'=>'',
            ),
            'DDL'=>array(
                'description'=>'Use SQL to define databases and tables.',
            ),
            'DML'=>array(
                'description'=>'Use SQL to manipulate data.',
            ),
        ),
        'Basic Queries' => array(
            'Projection'=>array(
                'description'=>'',
            ),
            'Restriction'=>array(
                'description'=>'',
            ),
            'Function'=>array(
                'description'=>'',
            ),
            'Group By'=>array(
                'description'=>'',
            ),
            'Having'=>array(
                'description'=>'',
            ),
            'Distinct'=>array(
                'description'=>'',
            ),
            'Order By'=>array(
                'description'=>'',
           ),
        ),
        'Advanced Queries' => array(
            'Multiplication'=>array(
                'description'=>'',
            ),
            'Join'=>array(
                'description'=>'',
            ),
            'Outer Join'=>array(
                'description'=>'',
            ),
            'Union'=>array(
                'description'=>'',
            ),
            'Intersection'=>array(
                'description'=>'',
            ),
            'Difference'=>array(
                'description'=>'',
            ),
            'Views'=>array(
                'description'=>'',
            ),
        ),
        'Misconceptions' => array(
            'JOIN'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'AND'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Exclusion'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
        ),
        'Pseudocode' => array(
            'Introduction'=>array(
                'description'=>'',
            ),
        ),
        'Basic Query Pseudocode' => array(
            'Projection'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Restriction'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Function'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Group By'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Having'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Distinct'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Order By'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
        ),
        'Advanced Query Pseudocode' => array(
            'Multiplication'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Join'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Outer Join'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Union'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Intersection'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Difference'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Join'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Minus'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
        ),
        'Embedded SQL' => array(
            'Introduction'=>array(
                'description'=>'',
            ),
            'Reading data'=>array(
                'description'=>'Embed SQL into a program that will allow it '.
                               'to access and read information from a database.',
                'class'=>'topic-not-started',
            ),
            'Cursors'=>array(
                'description'=>'Embed SQL into a program that will allow it to '.
                               'individually cycle through the rows of a results '.
                               'table in Oracle.',
                'class'=>'topic-not-started',
            ),
        ),
        'Stored Procedures and Triggers' => array(
            'Introduction'=>array(
                'description'=>'',
            ),
            'Procedures'=>array(
                'description'=>'Create a stored procedure that will return '.
                               'a series of variables for a given situation.',
                'class'=>'topic-not-started',
            ),
            'Triggers'=>array(
                'description'=>'Learn about triggers.',
                'class'=>'topic-not-started',
            ),
            'Trigger and Error'=>array(
                'description'=>'Observe that when a trigger fails, '.
                               'the event that generated the trigger '.
                               'will also fail.',
                'class'=>'topic-not-started',
            ),
            'Trigger with Wait'=>array(
                'description'=>'Observe that when a trigger attempts to '.
                               'update locked data, it waits until it is released.',
                'class'=>'topic-not-started',
            ),
            'Stored Functions'=>array(
                'description'=>'Create stored functions that return '.
                               'values for use in a given situation',
                'class'=>'topic-not-started',
            ),
            'Rights'=>array(
                'description'=>'Learn of Creator\'s and Invoker\'s rights.',
                'class'=>'topic-not-started',
            )
        ),
        'Referential Integrity' => array(
            'Introduction'=>array(
                'description'=>'',
            ),
            'Update'=>array(
                'description'=>'Observe how data maintains refererential integrity during an UPDATE',
                'class'=>'topic-not-started',
            ),
            'Delete'=>array(
                'description'=>'Observe how data maintains refererential integrity during a DELETE',
                'class'=>'topic-not-started',
            ),
        ),
    ),
    'Design'=>array(
        'ER Notations'=>array(
            'Examples'=>array(
                'description'=>'Observe several ER diagrams of '.
                               'relationships in varying notations.',
                'class'=>'topic-not-started',
            ),
        ),
        'Scenario to ER'=>array(
            'Introduction'=>array(
                'description'=>'',
            ),
            'Employee'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Phone'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Automobile'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Suppliers'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Medical Referral'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'University'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Car Dealer'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Prescription'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Orders'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
        ),
        'ER to Tables'=>array(
            'Introduction'=>array(
                'description'=>'',
            ),
            '1 to N Binary'=>array(
                'description'=>'Design a database table that efficiently represents '.
                               'a company\'s departmental employee structure.',
                'class'=>'topic-not-started',
            ),
            '1 to N Unary'=>array(
                'description'=>'Design a database table that effciently represents '.
                               'the employees and their managers of a company.',
                'class'=>'topic-not-started',
            ),
            '1 to 1 Employee'=>array(
                'description'=>'Design a database table structure that will manage '.
                               'the assigned parking spaces of employees.',
                'class'=>'topic-not-started',
            ),
            '1 to 1 Faculty'=>array(
                'description'=>'Design a database table that best associates '.
                               'faculty members with their respective departments.',
                'class'=>'topic-not-started',
            ),
            'N to N Binary'=>array(
                'description'=>'Design a database table that best associates '.
                               'the employees of a company with the projects '.
                               'that they are working on.',
                'class'=>'topic-not-started',
            ),
            'N to N Unary'=>array(
                'description'=>'Design a database table that will best represent '.
                               'a company\'s complex project structure.',
                'class'=>'topic-not-started',
            ),
        ),
        'Managing Anomalies'=>array(
            'Introduction'=>array(
                'description'=>'',
            ),
            'Basics of Normalization'=>array(
                'description'=>'Learn about the basic forms of normalization '.
                               'and the forms associated with normalization',
                'class'=>'topic-not-started',
            ),
            'Denormalization'=>array(
                'description'=>'Learn about the applications of denormalization.',
                'class'=>'topic-not-started',
            ),
            'Functional Dependencies'=>array(
                'description'=>'Learn about how data can logically determine other data.',
                'class'=>'topic-not-started',
            ),
            'Normalizing Employees'=>array(
                'description'=>'Normalize data on company employees.',
                'class'=>'topic-not-started',
            ),
            'Normalizing Customers'=>array(
                'description'=>'Normalize data on customers.',
                'class'=>'topic-not-started',
            ),
            'Normalizing Auto theft suspects'=>array(
                'description'=>'Normalize data on auto theft suspects.',
                'class'=>'topic-not-started',
            ),
            'Normalizing Properties'=>array(
                'description'=>'Normalize data on auto theft suspects.',
                'class'=>'topic-not-started',
            ),
            'Normalizing Doctor prescriptions'=>array(
                'description'=>'Normalize data on doctor prescriptions.',
                'class'=>'topic-not-started',
            ),
            'Dependencies quiz'=>array(
                'description'=>'Learn about how data can logically determine other data.',
                'class'=>'topic-not-started',
            ),
            'Denormalization quiz'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Anomalies Quiz'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
        ),
    ),
    'Transactions'=>array(
        'Concurrency' => array(
            'Introduction'=>array(
                'description'=>'',
            ),
            'Lost Update'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Deadlock'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Record Locking'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Serial Locking'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Locking without Error Code'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Locking with Commit'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Locking with Continue'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Locking with Rollback'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Database concurrency without record locking'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Database concurrency with record locking'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Database concurrency with deadlock'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Database concurrency with serial locking'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
        ),
        'Recovery' => array(
            'Introduction'=>array(
                'description'=>'',
            ),
            'Logical and Physical Updates'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Quiz'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
        ),
    ),
    'Security'=>array(
        'Access Control' => array(
            'Introduction'=>array(
                'description'=>'',
            ),
            'Grant'=>array(
                'description'=>'Observe how the GRANT command is used to give user privileges to database objects.',
                'class'=>'topic-not-started',
            ),
            'Revoke'=>array(
                'description'=>'Observe how the REVOKE command is used to take away user privileges to database objects.',
                'class'=>'topic-not-started',
            ),
        ),
        'Security Matrix' => array(
            'Introduction'=>array(
                'description'=>'',
            ),
            'Sample Matrix'=>array(
                'description'=>'Observe and study a sample security matrix to answer quiz questions.',
                'class'=>'topic-not-started',
            ),
        ),
        'Row Level Security' => array(
            'Introduction'=>array(
                'description'=>'',
            ),
            'Interactive Scenario'=>array(
                'description'=>'Explore Row Level Security and view the SQL code required to create it on the database.',
                'class'=>'topic-not-started',
            ),
        ),
        'SQL Injection' => array(
            'Introduction'=>array(
                'description'=>'',
            ),
            'Example scenario I'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Example scenario II'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Parameterized Queries'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Quiz'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
        ),
        'Database Inference' => array(
            'Introduction'=>array(
                'description'=>'',
            ),
            'Example scenario I'=>array(
                'description'=>'',
            ),
            'Example scenario II'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Example scenario III'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
        ),
        'Database Auditing' => array(
            'Introduction'=>array(
                'description'=>'',
            ),
            'Audit Login'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Audit DML'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Audit DDL'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Audit Command'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
            'Audit Default Pwd'=>array(
                'description'=>'',
                'class'=>'topic-not-started',
            ),
        ),
    ),
);
