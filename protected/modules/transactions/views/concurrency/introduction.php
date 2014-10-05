<?php
/* @var $this ConcurrencyController */

$this->breadcrumbs=array(
	'Concurrency'=>array('/transactions/concurrency'),
	'Introduction',
);
?>

<h2>What is database concurrency?</h2>

<p><strong>Database concurrency</strong> deals with the order in which transactions occur on a multi-user database. Much like the order of operations for mathematics, transactions must occur in an ordered fashion to ensure the transaction occurs appropriately and that one user's work does not adversely affect another user's work.</p>

<p>For example, imagine that two customers are trying to buy the same product from an online retailer. If that retailer only has one item of that product in stock, the <strong>database concurrency controls</strong> will decide which customer gets the item added to his cart and which customer will receive an error message. <strong>Database concurrency controls</strong> can include <strong>record locking</strong> or <strong>serial locking.</strong></p>

<h2>Record Locking</h2>

<p>When a database utilizes <strong>record locking</strong>, transactions are not allowed to read, modify, or write to any data set that has been locked. By limiting access to the data, the database can ensure that concurrent transactions do not interfere with each other.</p>

<p>There are two types of record locking:</p>

<ol>
<li><strong>Implicit locks</strong> are issued automatically by the database based on an activity.</li>
<li><strong>Explicit locks</strong> are issued by users requesting exclusive rights to the data.</li>
</ol>

<h2>Deadlock</h2>

<p>Unfortunately, when using resource locks, transactions may indefinitely wait on a resource lock to be released. This indefinite wait is known as a <strong>deadlock</strong> because the data is never released from the lock. Essentially, as a transaction begins to lock resources, it may have to wait for a particular resource to be released by another transaction.</p>

<p>On occasion, two transactions may indefinitely wait on each other to release resources and become <strong>deadlocked</strong>. Today's database technologies will constantly check for deadlocks and will automatically unlock tables when necessary.</p>

<h2>Serial Locking</h2>

<p>Even though transactions on a multi-user database can be processed concurrently, the results of the transactions should be logically organized, just as if the processes had been processed one at a time, or serially.</p>

<p>By logically organizing, or <strong>serially locking</strong>, the transactions, the result of the second transaction is consistent with and logically occurs after the results of the first transaction.</p>


