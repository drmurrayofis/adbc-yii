<?php
/* @var $this RecoveryController */

$this->breadcrumbs=array(
	'Recovery'=>array('/transactions/recovery'),
	'Introduction',
);
?>

<h2>Database Recovery</h2>

<p>In the event of a system failure, the database must be restored to a usable state as soon as possible. The act of restoring the database is known as <strong>database recovery</strong>.</p>

<p>There are two techniques for recovering data:
<strong>Reprocessing</strong> takes all activities completed since the last database backup, and re-prepares those activities. The <strong>Rollback/Rollforward</strong> method uses a database log which stores a record of the data changes in chronological order to restore the data. When a failure occurs in the database, either rollback or rollforward is applied.</p>

<ul>
<li><strong>Rollback</strong> will undo the erroneous changes made to the database and reprocess valid transactions.</li>
<li><strong>Rollforward</strong> restores the database using saved data and valid transactions since the last save.</li>
</ul>

<h2>Least Recently Used</h2>

<p>Occasionally, system memory fills up and data needs to be removed from memory before processing can continue. The <strong>Least Recently Used</strong> method is one way the database system can decide what can be removed from memory to free up space for other transactions.</p>

<p>Essentially, the Least Recently Used method works by taking the data that has not been used recently by the database out of RAM and storing it to disk. Once the least recently used data has been stored to disk, new data is written to the newly freed place in RAM.</p>

