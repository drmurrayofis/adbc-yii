<?php
/* @var $this InteractivesqlController */

$this->breadcrumbs=array(
	'Interactivesql'=>array('/sql/interactivesql'),
	'Introduction',
);
?>


<h2>What is SQL?</h2>

<p><strong>SQL</strong> is an acronym that stands for Structured Query Language. SQL is not a programming language, but rather a data sub-language that allows users to interact with a database.</p>

<h2>DML and DDL</h2>

<p>SQL can be used for <strong>data definition</strong> and <strong>data manipulation</strong>. SQL has two languages called <strong>Data Definition Language (DDL)</strong> and <strong>Data Manipulation Language (DML)</strong> used to implement these primary functions. The Data Definition Language (DDL) is used to define the tables and structures of a database using statements such as <code>CREATE, ALTER, and DROP</code>. The Data Manipulation Language (DML) is used to specify, retrieve, and modify data using statements such as <code>SELECT, INSERT, UPDATE, and DELETE</code>.</p>

<h2>Basic SQL Queries</h2>

<p><strong>Projection</strong> refers to the act of selecting data from a table. This can be done with the <code>SELECT</code> statement. <strong>Restriction</strong> can be applied to projections using the WHERE clause, resulting in a selection of only data that meets certain criteria. Functions, such as <code>COUNT</code>, <code>SUM</code>, and <code>AVG</code>, allow a value to be calculated from other values in the table. The <code>GROUP BY</code> clause will group rows by common values. The <code>HAVING</code> clause is used to determine which groups the <code>GROUP BY</code> is to include. The <code>DISTINCT</code> keyword will eliminate duplicate rows in the result table. <code>ORDER BY</code> will reorder the results in by descending or ascending order.</p>

<p>Don't worry if this seems like a lot to take in now, because this is just a high-level look at some example uses of SQL. You will have all the time you need practice each of these concepts.</p>

<h2>Advanced SQL Queries</h2>

<p><strong>Multiplication</strong> displays all possible combinations of two tables. <strong>Joins</strong> create a new table by connecting two other tables according to a relationship between records. <strong>Outer joins</strong> create joint tables while displaying the rows of one table that have no matching values from the other. In other words, outer joins will result in null values.
A union combines two tables that have identical attributes.</p>

<p>An <strong>intersection</strong> will display all rows shared in common by two tables. A <strong>difference</strong> displays all rows that exist in one table but not the other.</p>

<h2>Views</h2>

<p>A view is essentially a virtual table based on the results of a SQL <code>SELECT</code> statement. Most views, however, are not stored as tables but as objects that retain their related SQL statement. A materialized view, on the other hand, is actually stored as a table in the database though it appears the same as a regular view to the end user. By storing as a table, a materialized view speeds up query results because there is no SQL statement to be executed. Conversely, materialized views slow down updates because every change to the database requires the materialized view table to be updated.</p>

<p>View syntax in SQL looks like this:</p>

<pre><code>CREATE VIEW view_name AS 
SELECT column_name(s)
FROM table_name
WHERE condition
</code></pre>

<h2>Misconceptions</h2>

<ol>
<li>Using two tables without an appropriate join clause will result in the multiplication of tables rather than correctly creating a relationship. Multiplication of tables will display all possible combinations of data whereas a joining of tables will only show the specified, logical combinations of data.</li>
<li>Some users do not how to use <code>AND</code> and <code>OR</code> correctly. <code>AND</code> will limit the results displayed. <code>OR</code> will extend the results displayed.</li>
<li>The function-oriented <code>NOT EQUALS</code> is not the same as the variable-oriented <code>NOT IN</code>.</li>
</ol>
