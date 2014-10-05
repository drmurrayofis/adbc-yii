<?php
/* @var $this EmbeddedsqlController */

$this->breadcrumbs=array(
	'Embeddedsql'=>array('/sql/embeddedsql'),
	'Introduction',
);
?>

<p>By embedding SQL into a program written in a langauge like Java or C++, it is possible to access information from that database.In order to communicate with the database, an <strong>Open Database Connectivity (ODBC)</strong> driver must first be incorporated. SQL can be embedded into a program using two different methods - Read and Cursor.</p>

<h2>Read</h2>

<p>The Read method of embedding SQL allows a program to access and display information from a database. Essentially, the database runs a SELECT statement requested by the program, and returns the results of the statement to the program. For example, a program using the Read method of Embedded SQL may ask for a StudentID. The program will then pass along the entered StudentID into a SELECT statement on the database. Finally, the program will use the results of the SELECT statement to display the StudentName.</p>

<h2>Cursor</h2>

<p>The Cursor method is an Oracle proprietary method that allows the rows of a results table to be examined one at a time.</p>
