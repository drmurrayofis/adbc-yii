<?php
/* @var $this StoredproceduresandtriggersController */

$this->breadcrumbs=array(
	'Storedproceduresandtriggers'=>array('/sql/storedproceduresandtriggers'),
	'Introduction',
);
?>

<p>SQL itself has limitations because it lacks the logic of program code. However, to extend its functionality, this logic of program code has been added through <strong>stored procedures, functions, and triggers.</strong></p>

<p>Regardless of which method of coding is used: stored procedures, functions, or triggers, the code is stored centrally on the server. SQL can be embedded in both triggers and stored procedures.</p>

<ul>
<li>In Oracle, the code can be written in PL/SQL or Java</li>
<li>In SQL Server, the code can be written in TRANSACT-SQL</li>
<li>In MySQL, they are coded in the MySQL stored procedure language</li>
<li>In DB2, they can be coded in the SQL Procedural Language or another standard programming languages</li>
</ul>

<h2>Stored Procedure</h2>

<p>A <strong>stored procedure</strong> is like a mini program that is housed within the database and is compiled when used. Moreover, stored procedures can receive input parameters and they can return results.</p>

<p>Most database systems rely heavily on stored procedures. Typically, users interact with a database by calling stored procedures rather than by executing SQL statements. Databases rely on these stored procedures to provide security and decrease network traffic. Specifically, stored procedures enhance database security because they are stored on the database server.</p>

<h2>Functions</h2>

<p><strong>Functions</strong> are a lot like stored procedures in that they are stored on the server to be called upon later, and return <strong>a value.</strong> Moreover, functions are useful because they can compare and manipulate numeric data centrally on the server.</p>

<p>SQL has many built-in functions like <code>COUNT</code>, <code>SUM</code>, and <code>AVG</code>. In addition to the built-in functions, most database systems also allow users to create user-defined functions and store them for later usage.</p>

<h2>Triggers</h2>

<p><strong>Triggers</strong> are stored programs that are executed, or triggered, by the database whenever a specified event occurs.</p>

<p>Unlike stored procedures or functions, triggers are not called upon by the user, but are triggered by an event. Triggers can be defined with three types: BEFORE, INSTEAD OF, and AFTER.</p>

<p>Not all trigger types are supported by database systems. For example, SQL Server does not support BEFORE triggers while Oracle supports all three types.
Finally, triggers have many practical applications within the database including: providing default values, enforcing data constraints, updating views, and performing referential integrity actions.</p>

<h2>Rights</h2>

<p><strong>Rights</strong> are defined by one of two categories: definer's rights or invoker's rights. <strong>Definer's rights</strong> describe the abilities and privileges given to the creators of stored procedures. Routines or programs, such as stored procedures, are initally created with the rights of the owner, or definer.</p>

<p><strong>Invoker's rights</strong>, on the other hand, describe the abilities and privileges given to the end user calling the stored procedure.</p>

<p>By default, the stored procedures will be executed with definer rights for all externally referenced objects, such as tables and views. However, execution rights can also be set with invoker's rights. When invoker rights are set, external objects are referenced with current user privileges.</p>
