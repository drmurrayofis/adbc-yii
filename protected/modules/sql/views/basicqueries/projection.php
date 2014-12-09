<?php
/* @var $this BasicqueriesController */

$this->breadcrumbs=array(
	'Basicqueries'=>array('/sql/basicqueries'),
	'Projection',
);
?>

<h2>Projection</h2>

<p>Projection is a relational algebra operation in SQL that extracts columns (attributes) from a table. It is implemented with the <code>SELECT</code> command which acts upon rows. In other words, the <code>SELECT</code> command retrieves attribute values returning them in rows of data.</p>

<h3>PET Table</h3>

<p>Let's practice some SQL code. ADBC has just delivered a small database to your web browser that containts a table called <code>PET</code>. Below you will find some SQL editors with example <code>SELECT</code> commands. Click "Run" to see the results of the commands. You can also edit the commands to practice some other queries for yourself.</p>


<?php
echo Yii::app()->liveSql->renderEditor("pet", "SELECT * FROM PET; -- What is in the PET table?");
echo Yii::app()->liveSql->renderEditor("pet", "SELECT name, species, breed FROM PET; -- What are the names, species and breeds in the database?");
