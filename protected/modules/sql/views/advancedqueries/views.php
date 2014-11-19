<?php
/* @var $this AdvancedqueriesController */

$this->breadcrumbs=array(
	'Advancedqueries'=>array('/sql/advancedqueries'),
	'Regularviews',
);
?>
<h1>Regular Views</h1>

<p>SQL Views appear to the end user to be a table. It is only a virtual table however, and is stored internally as an SQL Query. It does share many of the same characteristics as a table in that it has rows and columns and you perform certain updates to the database.</p>

<?php
echo $this->getSqlEditor(null, "SELECT * FROM EMPLOYEE; -- What is the source data?");
echo $this->getSqlEditor(null,
    "-- The SELECT query is stored internally for the view.\n".
    "CREATE VIEW MyView AS SELECT name, salary FROM EMPLOYEE WHERE salary >= 70000;"
);
?>

<h1>Materialized Views</h1>

<p>Materialized Views appear to the end user similar to a View. However, a Materialized View is stored as redundant data(snapshots). In other words, internally, it is stored as a table, not as an SQL statement. A Materialized View  speeds up query results because the View SQL statement does not first have to be executed against the stored database table. However, a Materialized Views slows down updates; because now, for every update, both the data table and Materialized Views data store have to be updated.If the Materialized View is not updated in sync with the base Table, the Materialized View may not return up-to-date results.</p>
