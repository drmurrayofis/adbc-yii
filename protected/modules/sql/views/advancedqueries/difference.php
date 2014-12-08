<?php
/* @var $this AdvancedqueriesController */

$this->breadcrumbs=array(
	'Advancedqueries'=>array('/sql/advancedqueries'),
	'Difference',
);
?>
<h1>Difference</h1>
<p>The <code>MINUS</code> operator takes two select queries and returned by the first query that are not contained in the second query. The number and order of the attributes in both queries must be the same and the matching attributes must be of the same data type.</p>

<?php

echo $this->getSqlEditor(
    "-- What are the IDs of the pets registered in the\n".
    "-- PET table that are not from the shelter?\n".
    "SELECT id FROM PET EXCEPT SELECT id FROM SHELTER_ANIMAL;"
);
