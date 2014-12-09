<?php
/* @var $this BasicqueriesController */

$this->breadcrumbs=array(
	'Basicqueries'=>array('/sql/basicqueries'),
	'Having',
);
?>

<h2>Restriction on grouped results</h2>

<p>The <code>HAVING</code> clause is used with <code>GROUP BY</code> to filter results. Similar to the <code>WHERE</code> clause that is applied to individual rows, the <code>HAVING</code> clause acts on groups or aggregate functions.</p>

<?php
$db = "testscores";
echo Yii::app()->liveSql->renderEditor($db, "SELECT * FROM TEST_SCORES; -- What is the source data?");
echo Yii::app()->liveSql->renderEditor($db, "-- Which tests have been taken exactly 3 times?
SELECT TestID, COUNT(score) FROM TEST_SCORES GROUP BY TestID HAVING COUNT(score)=3;");
echo Yii::app()->liveSql->renderEditor($db, "-- Out of the tests taken with an average score greater than 80, what is the lowest of each test's scores?
SELECT TestID, MIN(score) FROM TEST_SCORES GROUP BY TestID HAVING AVG(score) > 80;");
