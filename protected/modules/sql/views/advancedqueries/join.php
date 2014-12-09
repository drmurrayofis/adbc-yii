<?php
/* @var $this AdvancedqueriesController */

$this->breadcrumbs=array(
	'Advancedqueries'=>array('/sql/advancedqueries'),
	'Join',
);
?>
<h1>Join</h1>

<p>The SQL <code>JOIN</code> statement is used to combine records from two tables based upon a relationship between an attribute (column) common to both tables. While the attributes do not have to share a common name, they must exist in both tables and they must share a common datatype. The concept of joining tables is fundamental to understanding how relational databases work.</p>

<p>Without additional qualifying terms, a Join statement is implemented as an <code>INNER JOIN</code>. An <code>INNER JOIN</code> returns only those rows where a match is found between common attribute values. An <code>INNER JOIN</code> is usually created between the primary key of one table and the foreign key of another table.</p>

<?php

echo Yii::app()->liveSql->renderEditor("pet",
    "-- What are the IDs of both the pets and their owners?\n".
    "SELECT PET.id, OWNER.id FROM PET, OWNER WHERE PET.owner = OWNER.id;"
);
