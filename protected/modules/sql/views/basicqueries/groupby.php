<?php
/* @var $this BasicqueriesController */

$this->breadcrumbs=array(
	'Basicqueries'=>array('/sql/basicqueries'),
	'Groupby',
);
?>

<h2>Grouping by function</h2>
<p>The <code>GROUP BY</code> clause is used to group results by one or more attributes (columns). It is commonly used with aggregate functions. Columns referenced in the <code>SELECT</code> clause of the SQL statement, except for aggregate functions, must be included in the <code>GROUP BY</code> clause.</p>

<?php
$db = "testscores";
echo Yii::app()->liveSql->renderEditor($db, "SELECT * FROM TEST_SCORES; -- What is the source data?");
echo Yii::app()->liveSql->renderEditor($db, "-- What is the sum of all points earned by each student?
SELECT StudentID, SUM(score) FROM TEST_SCORES GROUP BY StudentID;");
echo Yii::app()->liveSql->renderEditor($db, "-- What is the average score earned by each student?
SELECT StudentID, AVG(score) FROM TEST_SCORES GROUP BY StudentID;"); ?>
