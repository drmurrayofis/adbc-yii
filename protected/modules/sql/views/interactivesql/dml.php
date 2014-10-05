<?php
/* @var $this InteractivesqlController */

$this->breadcrumbs=array(
	'Interactivesql'=>array('/sql/interactivesql'),
	'Dml',
);
?>

<p>The Data Manipulation Language (DML) includes SQL commands to manipulate data contained in a database table.  DML commands include inserting rows of data using <code>INSERT INTO</code> into a table, modifying data already existing in a table using <code>UPDATE</code>, selecting data for retrieval using <code>SELECT</code>, and deleting data using <code>DELETE</code>.</p>

<h2>Inserting new records</h2>

<p>Data is inserted into a table one row at a time using the <code>INSERT INTO</code> command. The format of the <code>INSERT INTO</code> command is as follows:</p>

<pre><code>INSERT INTO TABLE_NAME (attribute1,attribute2,…)
VALUES (valueforattribute1, valueforattribute 2,…)
</code></pre>

<p>In this example, three rows of data are added to the EMPLOYEE table.</p>

<pre><code>INSERT INTO EMPLOYEE(ID,Name,Job)
    VALUES (0151,'Brian','Programmer');
INSERT INTO EMPLOYEE(ID,Name,Job)
    VALUES (3314,'Jane','Graphic Artist');
INSERT INTO EMPLOYEE(ID,Name,Job)
    VALUES (9141,'Thomas','Engineer');
</code></pre>


<h3>EMPLOYEE (Before command)</h3>
<table class="sql-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Job</th>
        </tr>
    </thead>
</table>

<h3>EMPLOYEE (after command)</h3>
<table class="sql-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Job</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>0151</td>
            <td>Brian</td>
            <td>Programmer</td>
        </tr>
        <tr>
            <td>3314</td>
            <td>Jane</td>
            <td>Graphic Artist</td>
        </tr>
        <tr>
            <td>9141</td>
            <td>Thomas</td>
            <td>Engineer</td>
        </tr>
    </tbody>
</table>

<h2>Updating records</h2>

<p>Data is modified with the <code>UPDATE</code> command.</p>

<pre><code>UPDATE TABLE_NAME SET attribute = new_value
    WHERE attribute = old_value
</code></pre>

<p>The <code>WHERE</code> clause is used to update specific rows in a table. Only rows that satisfy the conditions of the WHERE clause are modified.  If no <code>WHERE</code> clause is specified, all found rows are modified. In this example, the job attribute with the value "Engineer" is changed to "Field Engineer" in only one row.</p>

<pre><code>UPDATE EMPLOYEE Set Job = 'Field Engineer' WHERE Job = 'Engineer';</code></pre>

<h3>EMPLOYEE (before command)</h3>
<table class="sql-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Job</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>0151</td>
            <td>Brian</td>
            <td>Programmer</td>
        </tr>
        <tr>
            <td>3314</td>
            <td>Jane</td>
            <td>Graphic Artist</td>
        </tr>
        <tr>
            <td>9141</td>
            <td>Thomas</td>
            <td>Engineer</td>
        </tr>
    </tbody>
</table>

<h3>EMPLOYEE (after command)</h3>
<table class="sql-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Job</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>0151</td>
            <td>Brian</td>
            <td>Programmer</td>
        </tr>
        <tr>
            <td>3314</td>
            <td>Jane</td>
            <td>Graphic Artist</td>
        </tr>
        <tr>
            <td>9141</td>
            <td>Thomas</td>
            <td>Field Engineer</td>
        </tr>
    </tbody>
</table>

<h2>Selecting records</h2>

<p>The <code>SELECT</code> command retrieves attribute values from one or more rows of data.</p>

<pre><code>SELECT attribute1,attribute2,... FROM TABLE_NAME
    WHERE attribute = value
</code></pre>

<p>Only rows that satisfy the conditions of the <code>WHERE</code> clause are retrieved. If no <code>WHERE</code> clause is specified, all rows are returned. In this example, all data for the employee with the ID 9141 is displayed.</p>

<pre><code>SELECT ID, Name, Job FROM EMPLOYEE WHERE ID = 9141;
</code></pre>

<h3>Results Table</h3>
<table class="sql-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Job</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>9141</td>
            <td>Thomas</td>
            <td>Field Engineer</td>
        </tr>
    </tbody>
</table>
<h2>Deleting records</h2>

<p>The <code>DELETE</code> command removes one or more rows of data from a table.</p>

<pre><code>DELETE FROM TABLE_NAME WHERE attribute = value
</code></pre>

<p>Each row that satisfies the <code>WHERE</code> clause will be deleted. If no <code>WHERE</code> clause is specified, all rows are deleted. In this example, without the inclusion of a <code>WHERE</code> clause, all data in the EMPLOYEE table is deleted.</p>

<h3>EMPLOYEE (after command)</h3>
<table class="sql-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Job</th>
        </tr>
    </thead>
</table>

