<?php
/* @var $this ReferentialintegrityController */

$this->breadcrumbs=array(
	'Referentialintegrity'=>array('/sql/referentialintegrity'),
	'Introduction',
);
?>

<h2>What is Referential Integrity?</h2>

<p><strong>Referential Integrity</strong> is a property of data that ensures that the relationships between tables remain consistent. These relationships are created in databases through the use of foreign keys. When referential integrity is in place, a record cannot be added to a table if the foreign key does not match up with one of the primary keys from the table it references. In other words, by ensuring that the foreign key references a valid primary key, referential integrity is enforced.</p>

<p>Databases can be configured to automatically check for consistencies between the primary and linked tables on updates or deletes by defining the cascade property. When a statement is set to cascade, the change made in the primary table will be reflected in the table linked by the foreign key.</p>
