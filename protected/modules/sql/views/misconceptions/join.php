<?php
/* @var $this MisconceptionsController */

$this->breadcrumbs=array(
	'Misconceptions'=>array('/sql/misconceptions'),
	'Join',
);

echo $this->getSqlEditor( "SELECT * FROM CUSTOMER, ORDER WHERE ORDER.pid = 'p02';");

?>

<p>This SQL statement is incorrect because it does not contain a <code>JOIN</code> clause. Instead, it results in a multiplication.  Multiplication combines every row from one table with every row from a second table.</p>

<?php


