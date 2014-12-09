<?php
/* @var $this AdvancedqueriesController */

$this->breadcrumbs=array(
	'Advancedqueries'=>array('/sql/advancedqueries'),
	'Outerjoin',
);
?>
<h1>Outer Join</h1>

<p>An <code>OUTER JOIN</code> combines records from two tables based upon a relationship between an attribute (column) common to both tables. However, an <code>OUTER JOIN</code> does not require the two tables to have a matching record. There are three types of outer joins.</p>

<p>A <code>LEFT OUTER JOIN</code> returns all values from the table on the left but only matched values from the table on the right. A null value is returned when no attribute match exists.</p>

<p>A <code>RIGHT OUTER JOIN</code> returns all values from the table on the right of the SQL clause but only matched values from the table on the left. A null value is returned when no attribute match exists.</p>

<p>A <code>FULL OUTER JOIN</code> is the same as applying both a <code>LEFT</code> and <code>RIGHT OUTER JOIN</code>.  A <code>FULL OUTER JOIN</code> returns all rows from both tables even if no matching attribute values exist. A null value is returned when no attribute match exists.</p>

<p>In ADbC, we use3 to practice SQL code. Unfortunately,<a href="https://www.org/omitted.html"3 does not support full outer joins or right outer joins</a>. You can, however, still practice other types of joins below.</p>

<?php

echo Yii::app()->liveSql->renderEditor("pet",
    "-- What are the IDs of the pets and their owners,\n".
    "-- including the IDs of those who do not own a pet?\n".
    "SELECT PET.id, OWNER.id FROM PET LEFT JOIN OWNER ON PET.owner = OWNER.id;"
);
