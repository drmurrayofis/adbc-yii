<?php
/* @var $this AdvancedqueriesController */

$this->breadcrumbs=array(
	'Advancedqueries'=>array('/sql/advancedqueries'),
	'Intersection',
);
?>
<h1>Intersect</h1>
<p>The <code>INTERSECT</code> operator takes two select queries and returns only those rows common to both queries. The number and order of the attributes listed in both select queries must be the same and the matching attributes must be of the same data type.</p>


<?php

echo $this->getSqlEditor(null,
    "-- What are the names and type (species and breed) of the shelter animals\n".
    "-- registered in the PET table?\n".
    "SELECT name, species, breed FROM PET INTERSECT\n".
    "SELECT name, species, breed FROM SHELTER_ANIMAL;"
);
