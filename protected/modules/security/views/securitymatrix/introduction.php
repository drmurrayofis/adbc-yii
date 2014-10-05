<?php
/* @var $this SecuritymatrixController */

$this->breadcrumbs=array(
	'Securitymatrix'=>array('/security/securitymatrix'),
	'Introduction',
);
?>

<h2>Security matrices</h2>

<p>Most end users access a database through an application program rather than directly logging into the database system. To visually manage the access of each of these applications, a <strong>security (or CRUD) matrix</strong> is conducted that identifies the possible operations or authorizations needed database objects, such as tables, and input/output sources, such as forms and reports.</p>

<p>Typical operations identified in a security matrix include Read (select), Data modification, Create (insert), Update, and Delete. These various operations are identified in a security matrix by the letters C, R, U, and D, thus the security matrix is more commonly known as a CRUD matrix.</p>

<h2>Components of a Security Matrix</h2>

<p>The top row of the matrix lists database table objects while application programs are listed in the left-most column. The letters C, R, U, and D are placed into the intersecting cell to identify the type of access required by a particular program.</p>

<ul>
<li>C denotes a Create access</li>
<li>R denotes a Read access</li>
<li>U denotes an Update access</li>
<li>D denotes a Data modification access</li>
</ul>

<p>Note that any given cell can contain any combination of these letters or none at all. An empty cell denotes that a program does not have access to adjacent table. Conversely, a cell with all four letters, CRUD, has full access to the adjacent table.</p>
