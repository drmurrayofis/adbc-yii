<?php
/* @var $this BasicqueriesController */

$this->breadcrumbs=array(
	'Basicqueries'=>array('/sql/basicqueries'),
	'Restriction',
);
?>

<h2>Restriction</h2>
<p>Restriction is a relational algebra operation in SQL that returns only those rows of data
that meet specified selection criteria. It is implemented using the <code>WHERE</code> clause
of the <code>SELECT</code> statement.</p>

<?php
echo Yii::app()->liveSql->renderEditor("pet", "SELECT * FROM PET WHERE species='Dog'; -- what pets are dogs?
SELECT * FROM PET WHERE altered='Y'; -- what pets have been altered?");
?>
