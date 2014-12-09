<?php
/* @var $this BasicqueriesController */

$this->breadcrumbs=array(
	'Basicqueries'=>array('/sql/basicqueries'),
	'Distinct',
);
?>

<h2>Limiting projection to unique results</h2>

<p>The <code>DISTINCT</code> qualifier is used to eliminate duplicate values. <code>DISTINCT</code> may only be used <strong>once</strong> in a SQL statement. The <code>DISTINCT</code> keyword must be placed in the <code>SELECT</code> clause before the attribute list.  Duplicate values will be eliminated for all specified attributes.</p>

<?php
$db = "pet";
$ls = Yii::app()->liveSql;

echo $ls->renderEditor($db, "SELECT * FROM PET; -- What is the source data?");
echo $ls->renderEditor($db, "-- What uniquely different species are in the PET table?
SELECT DISTINCT species FROM PET;");
echo $ls->renderEditor($db, "-- What uniquely different combinations of gender
-- and altered status are in the PET table?
SELECT DISTINCT gender, species FROM PET;");
