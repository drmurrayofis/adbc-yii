<?php
/* @var $this InteractivesqlController */

$this->breadcrumbs=array(
	'Interactivesql'=>array('/sql/interactivesql'),
	'Ddl',
);
?>

<p>The Data Definition Language (DDL) includes several SQL commands to manipulate the table structure of a database.  DDL commands covered in this exercise include creating a table and assigning a primary key, managing foreign keys, altering a table, and deleting a table.</p>

<h2>Creating tables</h2>

<p><code>CREATE TABLE</code> creates a table in a database. For this example, a table called <code>PET</code> is created with columns (or attributes) named Pet<em>ID, Pet</em>Name, Type, Gender.  Once the table and its attributes have been defined, a primary key must be declared for the table to be functional.  A primary key is defined by using a <code>PRIMARY KEY CONSTRAINT</code> as illustrated in the code below.</p>

<pre><code>CREATE TABLE PET(
    Pet_ID     number(6)   NOT NULL,
    Pet_Name   varchar(15) NULL,
    Type       varchar(10) NOT NULL,
    Gender     varchar(1)  NULL,
    CONSTRAINT Pet_PK PRIMARY KEY(Pet_ID)
);
</code></pre>

<h3>Output table</h3>
<table class="sql-table">
    <thead>
        <tr>
            <th>Pet_ID</th>
            <th>Pet_Name</th>
            <th>Type</th>
            <th>Gender</th>
        </tr>
    </thead>
</table>

<h2>Altering tables</h2>

<p><code>ALTER TABLE</code> allows a user to add, remove, or alter the columns of a table.  In this example, a column named "Breed" with a text data type is added to the table.</p>

<pre><code>ALTER TABLE PET(
    ADD Breed varchar(10)
);
</code></pre>

<h3>Output table</h3>
<table class="sql-table">
    <thead>
        <tr>
            <th>Pet_ID</th>
            <th>Pet_Name</th>
            <th>Type</th>
            <th>Gender</th>
            <th>Breed</th>
        </tr>
    </thead>
</table>

<h2>Foreign Key Designation</h2>

<p>A Foreign Key creates a relationship between two tables. The relationship is established through a common column that must exist in both tables.  Related keys may have different names but must be of the same data type.  In this example, the BILLING table contains a Foreign Key that references the Pet_ID in the PET table.</p>

<pre><code>CREATE TABLE BILLING(
    BillingNo number(4)   NOT NULL,
    AmountDue number(8,2) NOT NULL
    PetID_FK  number(6)
);
</code></pre>

<p>Referential integrity may be added after tables have been created.  For example, if the BILLING table was created without a foreign key constraint, referential integrity between the PET table and the BILLING table would not exist.  To enable referential integrity, use the ALTER TABLE command and add a <code>FOREIGN KEY CONSTRAINT</code> as illustrated in the code below.</p>

<pre><code>ALTER TABLE BILLING(
    ADD CONSTRAINT fk_PetBilled
    ADD FOREIGN KEY (PetID_FK)
    REFERENCES PET(Pet_ID)
    CONSTRAINT PetFK FOREIGN KEY(PetID_FK) REFERENCES PET (Pet_ID)
);
</code></pre>

<h3>PET table</h3>
<table class="sql-table">
    <thead>
        <tr>
            <th>Pet_ID</th>
            <th>Pet_Name</th>
            <th>Type</th>
            <th>Gender</th>
            <th>Breed</th>
        </tr>
    </thead>
</table>

<h3>BILLING table</h3>
<table class="sql-table">
    <thead>
        <tr>
            <th>BillingNo</th>
            <th>AmountDue</th>
            <th>PetID_FK</th>
        </tr>
    </thead>
</table>

<h2>Dropping constraints</h2>

<p>Constraints can be removed by using the <code>ALTER TABLE</code> command.  In this example, the foreign key constraint between the BILLING table and the PET table is dropped.</p>

<pre><code>ALTER TABLE BILLING(
    DROP CONSTRAINT PetID_FK
);
</code></pre>

<h2>Dropping tables</h2>

<p>A table can be removed from a database with the DROP TABLE command when it is no longer needed.  In this example, the BILLING table has been dropped, leaving only the PET table.</p>

<pre><code>DROP TABLE BILLING;</code></pre>
