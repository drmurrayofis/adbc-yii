<?php
/* @var $this BasicqueriesController */

$this->breadcrumbs=array(
	'Basicqueries'=>array('/sql/basicqueries'),
	'Projection',
);
?>


<p>Projection is a relational algebra operation in SQL that extracts columns (attributes) from a table. It is implemented with the SELECT command which acts upon rows. In other words, the SELECT command retrieves attribute values returning them in rows of data.</p>

<h3>Source Table</h3>

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

<pre><code>SELECT <select id="keycomp-select">
    <option>*</option>
    <option>name, species, breed</option>
    <option>name</option>
    <option>ID, breed</option>
    <option>name, gender, altered</option>
</select> FROM PET;</code></pre>

<h3>Question answered by SQL Statement</h3>
<p data-ordinal="0">Which pets are in the database?</p>
<p data-ordinal="1" class="hidden">What are the names, species, and breeds of the pets in the database?</p>
<p data-ordinal="2" class="hidden">What are the names of the pets in the database?</p>
<p data-ordinal="3" class="hidden">What are the IDs and breeds of the pets in the database?</p>
<p data-ordinal="4" class="hidden">What are the names, genders and altered status of the pets in the database?</p>

<h3>Result table</h3>
<table class="sql-table" data-ordinal="0">
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
<table class="sql-table hidden" data-ordinal="1">
    <thead>
        <tr>
            <th>name</th>
            <th>species</th>
            <th>breed</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>King</td>
            <td>Dog</td>
            <td>BerneseMountain</td>
        </tr>
        <tr>
            <td>Fiona</td>
            <td>Dog</td>
            <td>ItalianGreyhound</td>
        </tr>
        <tr>
            <td>Ginsei</td>
            <td>Cat</td>
            <td>Mixed</td>
        </tr>
        <tr>
            <td>Bo</td>
            <td>Dog</td>
            <td>LabradorMix</td>
        </tr>
        <tr>
            <td>Cory</td>
            <td>Dog</td>
            <td>GermanShepherd</td>
        </tr>
        <tr>
            <td>Brandy</td>
            <td>Dog</td>
            <td>Doberman</td>
        </tr>
        <tr>
            <td>Mystic</td>
            <td>Cat</td>
            <td>MaineCoon</td>
        </tr>
        <tr>
            <td>Mikey</td>
            <td>Dog</td>
            <td>Maltese</td>
        </tr>
        <tr>
            <td>Angel</td>
            <td>Dog</td>
            <td>NGAGreyhound</td>
        </tr>
        <tr>
            <td>Baby</td>
            <td>Rabbit</td>
            <td>FlemishGiant</td>
        </tr>
    </tbody>
</table>
<table class="sql-table hidden" data-ordinal="2">
    <thead>
        <tr>
            <th>name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>King</td>
        </tr>
        <tr>
            <td>Fiona</td>
        </tr>
        <tr>
            <td>Ginsei</td>
        </tr>
        <tr>
            <td>Bo</td>
        </tr>
        <tr>
            <td>Cory</td>
        </tr>
        <tr>
            <td>Brandy</td>
        </tr>
        <tr>
            <td>Mystic</td>
        </tr>
        <tr>
            <td>Mikey</td>
        </tr>
        <tr>
            <td>Angel</td>
        </tr>
        <tr>
            <td>Baby</td>
        </tr>
    </tbody>
</table>
<table class="sql-table hidden" data-ordinal="3">
    <thead>
        <tr>
            <th>ID</th>
            <th>breed</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>0001</td>
            <td>BerneseMountain</td>
        </tr>
        <tr>
            <td>0002</td>
            <td>ItalianGreyhound</td>
        </tr>
        <tr>
            <td>0003</td>
            <td>Mixed</td>
        </tr>
        <tr>
            <td>0004</td>
            <td>LabradorMix</td>
        </tr>
        <tr>
            <td>0005</td>
            <td>GermanShepherd</td>
        </tr>
        <tr>
            <td>0006</td>
            <td>Doberman</td>
        </tr>
        <tr>
            <td>0007</td>
            <td>MaineCoon</td>
        </tr>
        <tr>
            <td>0008</td>
            <td>Maltese</td>
        </tr>
        <tr>
            <td>0009</td>
            <td>NGAGreyhound</td>
        </tr>
        <tr>
            <td>0010</td>
            <td>FlemishGiant</td>
        </tr>
    </tbody>
</table>
<table class="sql-table hidden" data-ordinal="4">
    <thead>
        <tr>
            <th>name</th>
            <th>gender</th>
            <th>altered</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>King</td>
            <td>Male</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>Fiona</td>
            <td>Female</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>Ginsei</td>
            <td>Female</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>Bo</td>
            <td>Male</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>Cory</td>
            <td>Male</td>
            <td>No</td>
        </tr>
        <tr>
            <td>Brandy</td>
            <td>Female</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>Mystic</td>
            <td>Male</td>
            <td>No</td>
        </tr>
        <tr>
            <td>Mikey</td>
            <td>Female</td>
            <td>No</td>
        </tr>
        <tr>
            <td>Angel</td>
            <td>Female</td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>Baby</td>
            <td>Male</td>
            <td>Yes</td>
        </tr>
    </tbody>
</table>

<script type="text/javascript" charset="utf-8">
    $(function()
    {
        compositeKeys(function(keys)
        {
            var ordinal = keys.select;
            $('*[data-ordinal]').addClass("hidden");
            $('[data-ordinal="'+ordinal+'"]').removeClass("hidden");
        });
    });
</script>
