<?php
/* @var $this SqlinjectionController */

$this->breadcrumbs=array(
	'Sqlinjection'=>array('/security/sqlinjection'),
	'Introduction',
);
?>

<h2>SQL injection</h2>

<p>Database applications typically call for user input for data to add to the database. A <strong>SQL injection</strong> attack occurs if the user modifies a SQL statement through a user input field. Therefore, SQL injection attacks can occur when SQL statements are dynamically created using user input.</p>

<p>The threat occurs when users enter malicious code that &ldquo;tricks&rdquo; the database into executing unintended commands. Some methods of "tricking" the database include these manipulations of the SQL language:</p>

<ul>
<li>Embedding comments using double hyphens <code>--</code></li>
<li>Concatenating SQL statements separated by semicolons</li>
<li>The ability to query metadata from database data dictionaries</li>
</ul>

<p>The key to stopping a SQL injection attack is <strong>input validation</strong>. The scenario in this module, SQL Injection, demonstrates ways SQL statements can be modified with user input, and how <strong>input validation</strong> can be used to prevent SQL injection attacks.</p>
