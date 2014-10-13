<?php
/* @var $this BasicqueriesController */

$this->breadcrumbs=array(
	'Basicqueries'=>array('/sql/basicqueries'),
	'Orderby',
);
?>

<h2>Sorting results</h2>

<p>The <code>ORDER BY</code> clause is used to sort the results of a specified set of attributes (columns).  By default, <code>ORDER BY</code> sorts results in ascending order.  To sort in descending order, the <code>DESC</code> keyword may be added directly after an attribute name.</p>

<?php
echo $this->getSqlEditor(null, "SELECT * FROM PET; -- What is the source data?");
echo $this->getSqlEditor(null, "-- What are the names, species and breeds of the pets, sorted alphabetically by name?
SELECT name, species, breed FROM PET ORDER BY name;");
echo $this->getSqlEditor(null, "-- What are the names of the pets, sorted in reverse alphabetical order?
SELECT name FROM PET ORDER BY name DESC;");
