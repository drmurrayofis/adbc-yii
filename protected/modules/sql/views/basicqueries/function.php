<?php
/* @var $this BasicqueriesController */

$this->breadcrumbs=array(
	'Basicqueries'=>array('/sql/basicqueries'),
	'Function',
);
?>

<h2>Functions</h2>

<p>SQL includes a set of built-in aggregate functions that allow you to compute a single value from values contained in an individual attribute (or column of data). The core aggregate functions are <code>COUNT</code>, <code>SUM</code>, <code>AVG</code>, <code>MAX</code>, and <code>MIN</code>. Aggregate functions ignore <code>NULL</code> values. <code>SUM</code> and <code>AVG</code> act only upon numeric values. <code>MAX</code> and <code>MIN</code> accept alphanumeric and date values as well. <code>COUNT</code> returns the number of rows that meet a specified condition.</p>

<?php echo $this->getSqlEditor(null, "SELECT * FROM TEST_SCORES; -- What is the source data?"); ?>
<?php echo $this->getSqlEditor(null, "SELECT COUNT(score) FROM TEST_SCORES; -- How many tests were taken?"); ?>
<?php echo $this->getSqlEditor(null, "SELECT SUM(score) FROM TEST_SCORES; -- What is the total score of the tests taken?"); ?>
<?php echo $this->getSqlEditor(null, "SELECT AVG(score) FROM TEST_SCORES; -- What is the average sore of the tests taken?"); ?>
<?php echo $this->getSqlEditor(null, "SELECT MIN(score) FROM TEST_SCORES; -- What is the lowest score?"); ?>
<?php echo $this->getSqlEditor(null, "SELECT MAX(score) FROM TEST_SCORES; -- What is the highest score?"); ?>
