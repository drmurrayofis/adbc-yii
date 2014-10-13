<?php
/* @var $this BasicqueriesController */

$this->breadcrumbs=array(
	'Basicqueries'=>array('/sql/basicqueries'),
	'Groupby',
);
?>

<h2>Grouping by function</h2>
<p>The <code>GROUP BY</code> clause is used to group results by one or more attributes (columns). It is commonly used with aggregate functions. Columns referenced in the <code>SELECT</code> clause of the SQL statement, except for aggregate functions, must be included in the <code>GROUP BY</code> clause.</p>

<?php echo $this->getSqlEditor(null,"SELECT * FROM TEST_SCORES; -- What is the source data?"); ?>
<?php echo $this->getSqlEditor(null, "-- What is the sum of all points earned by each student?
SELECT StudentID, SUM(score) FROM TEST_SCORES GROUP BY StudentID;"); ?>
<?php echo $this->getSqlEditor(null, "-- What is the average score earned by each student?
SELECT StudentID, AVG(score) FROM TEST_SCORES GROUP BY StudentID;"); ?>
