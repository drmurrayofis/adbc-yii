<?php
/* @var $this AdvancedqueriesController */

$this->breadcrumbs=array(
	'Advancedqueries'=>array('/sql/advancedqueries'),
	'Union',
);
?>
<h1>Union</h1>

<p>The <code>UNION</code> operator concatenates the results of two select queries. The result is the same as adding all rows from the first query to all rows from the second query. To perform a union, the number and order of the attributes listed in both select queries must be the same and the matching attributes must be of the same data type. By default, <code>UNION</code> removes duplicate rows. To allow duplicate values, use <code>UNION ALL</code>.</p>

<?php

echo $this->getSqlEditor(
    "-- What are the names and type (species and breed) of all\n".
    "-- the pets including those registered in the PET table and those in the shelter?\n".
    "SELECT name, species, breed FROM PET UNION\n".
    "SELECT name, species, breed FROM SHELTER_ANIMAL;"
);
