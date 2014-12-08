<?php
/* @var $this AdvancedqueriesController */

$this->breadcrumbs=array(
	'Advancedqueries'=>array('/sql/advancedqueries'),
	'Multiplication',
);
?>
<h1>Multiplication</h1>

<p>Multiplication, as a relational algebra operation, is implemented in SQL as a Cartesian product. Multiplication combines every row from one table with every row from a second table. The result is a single table containing all possible pairs of attributes and rows formed from both tables. A Cartesian product occurs when a join condition is accidentally or mistakenly omitted in an SQL statement.</p>
<?php

echo $this->getSqlEditor(
    "-- What are all possible combinations of pet attributes and owner attributes?\n"
    ."SELECT * FROM PET, OWNER;"
);

echo $this->getSqlEditor(
    "-- What are all possible combinations of pet IDs and owner IDs?\n".
    "SELECT PET.id, OWNER.id FROM PET, OWNER;"
);

echo $this->getSqlEditor(
    "-- What are all possible combinations of pet names,\n".
    "-- pet species, pet breeds and owner names?\n".
    "SELECT PET.name, species, breed, OWNER.name FROM PET, OWNER;"
);
