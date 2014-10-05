<?php
/* @var $this ManaginganomaliesController */

$this->breadcrumbs=array(
	'Managinganomalies'=>array('/design/managinganomalies'),
	'Introduction',
);
?>

<h2>Functional Dependencies</h2>

<p>A <strong>functional dependency</strong> occurs when the value of one attribute determines the value of another attribute. For example, when given a StudentID, you can find StudentName. Therefore, a functional dependency exists between StudentID and StudentName.</p>

<p>The attributes used as a starting point are called <strong>determinants</strong>. In the above paragraph, StudentID determines StudentName. Sometimes more than one attribute is used in the determinant creating a <strong>composite determinant</strong>.</p>

<p>By definition, a primary key will determine all other attributes of that table.
To determine functional dependencies, two questions should be asked:</p>

<ul>
<li>Is Y a fact related to X? Or, in the example given, is StudentName related to StudentID?</li>
<li>Does X determine Y? Or, again in this example, does StudentID determine StudentName?</li>
</ul>

<p>Moreover, business rules are often the best way to discover determinants. For example, by following business rules, you would expect an ProductSKU to determine ProductPrice. Finally, functional dependencies only exist when the attributes involved have unique and single identifiers.</p>

<h2>Normalization</h2>

<p><strong>Normalization</strong> is the process of analyzing a relation to ensure that it is well formed. In other words, normalization is the process of breaking down a table into smaller, themed tables.</p>

<p>The major question behind normalization is, "How many tables?" Essentially, normalization is all about deciding how many smaller tables should be formed from a single larger table.</p>

<p>By normalizing the data in a relation, rows can be inserted, deleted, or modified without creating update anomalies. There are varying degrees of normalization called <strong>normal forms</strong>. These normal forms vary from the basic 1st Normal Form to the well formed Boyce-Codd Normal Form (BCNF), and are described in more detail below.</p>

<p>When a relation is in a higher normal form, it retains all of the characteristics of the previous normal forms. In other words, a relation in 2nd normal form is also in 1st normal form, and a relation in 3rd normal form is also in 2nd normal form.</p>

<ul>
<li>1st Normal Form (1NF)
<ul><li>A table that qualifies as a relation is in 1NF</li>
<li>Formatted as a table</li>
<li>No repeating groups</li>
<li>Records are identified by a primary key</li></ul></li>
<li>2nd Normal Form (2NF)
<ul><li>Is in 1NF</li>
<li>All non-key attributes are dependent on all of primary key.</li>
<li>Jas no partial dependencies.</li></ul></li>
<li>3rd Normal Form (3NF)
<ul><li>Is in 2NF</li>
<li>Has no determinants except the primary key.</li>
<li>Has no transitive dependencies (every value in the table is dependent on the primary key and only the primary key).</li></ul></li>
<li>Boyce-Codd Normal Form (BCNF)
<ul><li>Is in 3NF</li>
<li>Every determinant is a candidate key.</li></ul></li>
</ul>

<h2>Denormalization</h2>

<p>Normalization increases the complexity of the data structure, making access times to the database slower. Therefore, normalization may not be the best solution for a database, particularly in the case of small or read-only databases.</p>

<p>For tables that have already been normalized, it may be necessary to <strong>denormalize</strong> or join normalized data together into a single unnormalized table. When deciding between leaving data normalized or denormalizing, realize that the issue at hand is one of balance. Denormalizing reduces complexity is reduced and access times, but makes updates difficult.</p>

<p>The issue at hand is a matter of which is more important for the purpose of the database - quick access times or easy updates.</p>

<h2>Zip code example</h2>

<p>Denormalizing is all about deciding which information belongs in a table. These decisions, however, are not always clear or easy to make. The <strong>zip code example</strong> is a classic example that depicts the difficulty of setting up database tables.</p>

<p>An online retailer, for example, keeps a database with a table that stores customer shipping information. Currently, the table stores the following attributes: FirstName, LastName, CustomerNo, Address, Zip, City, and State. While this table may work well and perform efficiently, it is not really completely normalized because Zip can determine the City and State.</p>

<p>The question begged by this example is if the table should stay in a single denormalized table or would it perform more efficiently by moving Zip, City, and State to a second table.</p>
