<?php
/* @var $this BasicqueriesController */

$this->breadcrumbs=array(
	'Basicqueries'=>array('/sql/basicqueries'),
	'Projection',
);
?>


<p>Projection is a relational algebra operation in SQL that extracts columns (attributes) from a table. It is implemented with the SELECT command which acts upon rows. In other words, the SELECT command retrieves attribute values returning them in rows of data.</p>

<h3>PET Table</h3>

<p>Here is a source table you can use to practice projection. Below the table you will find a SQL editor with two example SELECT commands. Click "Run" to see the results of the commands. You can also edit the commands to practice some other queries for yourself.</p>

<table class="sql-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>species</th>
            <th>breed</th>
            <th>gender</th>
            <th>altered</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>0001</td>
            <td>King</td>
            <td>Dog</td>
            <td>BerneseMountain</td>
            <td>Male</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>0002</td>
            <td>Fiona</td>
            <td>Dog</td>
            <td>ItalianGreyhound</td>
            <td>Female</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>0003</td>
            <td>Ginsei</td>
            <td>Cat</td>
            <td>Mixed</td>
            <td>Female</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>0004</td>
            <td>Bo</td>
            <td>Dog</td>
            <td>LabradorMix</td>
            <td>Male</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>0005</td>
            <td>Cory</td>
            <td>Dog</td>
            <td>GermanShepherd</td>
            <td>Male</td>
            <td>No</td>
        </tr>
        <tr>
            <td>0006</td>
            <td>Brandy</td>
            <td>Dog</td>
            <td>Doberman</td>
            <td>Female</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>0007</td>
            <td>Mystic</td>
            <td>Cat</td>
            <td>MaineCoon</td>
            <td>Male</td>
            <td>No</td>
        </tr>
        <tr>
            <td>0008</td>
            <td>Mikey</td>
            <td>Dog</td>
            <td>Maltese</td>
            <td>Female</td>
            <td>No</td>
        </tr>
        <tr>
            <td>0009</td>
            <td>Angel</td>
            <td>Dog</td>
            <td>NGAGreyhound</td>
            <td>Female</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>0010</td>
            <td>Baby</td>
            <td>Rabbit</td>
            <td>FlemishGiant</td>
            <td>Male</td>
            <td>Yes</td>
        </tr>
    </tbody>
</table>

<?php echo $this->getSqlEditor("basicqueries/projection",
"SELECT * FROM PET; -- What pets are in the database?
SELECT name, species, breed FROM PET; -- What are the names, species and breeds in the database?");
