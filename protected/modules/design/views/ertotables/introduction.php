<?php
/* @var $this ErtotablesController */

$this->breadcrumbs=array(
	'Ertotables'=>array('/design/ertotables'),
	'Introduction',
);
?>

<p>Mapping an E-R Diagram to tables is a lot like an architect moving from whiteboard drawings to a blueprint. In essence, an <strong>E-R Diagram</strong> shows an idea of how given data relates to each other in terms of entities and relationships. Tables, on the other hand, take the ideas and concepts of data interaction outlined in the E-R Diagram, but make them database ready. Moving an E-R Diagram to a table consists of <strong>identifying primary keys, placing foreign keys, and defining carnality</strong>.</p>

<h2>Rules for Mapping E-R Diagrams to Tables</h2>

<p>When mapping an ERD to a table, the first consideration is to ensure that every entity, or <strong>table</strong>, has a unique, identifiable value called the <strong>primary key</strong>. Ideally, the primary key is short, numeric, does not change, and can never be null. Therefore, <strong>surrogate keys</strong>, or automatically generated numerical values, make perfect candidates for a table's primary key.</p>

<p>Relationships between tables are created through the use of foreign keys. A <strong>foreign key</strong> is the primary key of one table that is placed into another table to create a relationship. The foreign key can not just be placed into any table, however; there are rules that govern its placement based on its type of relationship.</p>

<h2>Foreign Key Rules</h2>

<ul>
<li>1:1 Relationship
<ul><li>Usually does not matter where the foreign key is placed.</li>
<li>Should be placed in the most used entity.</li>
<li>If an entity in the relationship is optional, the foreign key goes with the optional entity.</li></ul></li>
<li>1:N Relationship
<ul><li>The One side is called the parent, the Many side is called the child.</li>
<li>In this relationship, the foreign key always goes in the many side of the relationship.</li></ul></li>
<li>N:M Relationship
<ul><li>In a N:M Relationship, there is no place for the foreign key in either table.</li>
<li>N:M Relationships will always be mapped to two 1:N relationships. To do this, a third table, called an intersection table, is created that represents the relationship itself.</li>
<li>The primary key of the intersection table is a composite key of both primary keys from the related entities.</li></ul></li>
</ul>
