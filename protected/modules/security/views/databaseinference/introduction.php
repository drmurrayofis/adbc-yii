<?php
/* @var $this DatabaseinferenceController */

$this->breadcrumbs=array(
	'Databaseinference'=>array('/security/databaseinference'),
	'Introduction',
);
?>

<h2>Database Inference</h2>

<p>A subtle vulnerability found within database technologies is inference, or the ability to derive unknown information based on retrieved information. </p>

<p>Inference occurs when users ascertain information they should not know by piecing together data to which they have access.  An example would be when a rival is able to infer confidential information from combination of publicly available data. </p>

<p>Inference often happens...</p>

<ul>
<li>...In cases where the actual intent is for users to generate or view aggregate values when they have not been given access to individual data items.</li>
<li>...When a user is able to ascertain information from data accessible to them at their security level even though that specific information is protected at a higher security access level.</li>
</ul>

<p>The problem with inference is that there are no ideal solutions to the problem.  The only recommended solutions include controls related to queries (suppression) or controls related to individual items in a database (concealing). In other words, sensitive data requested in a query are either not provided or answers given are close but not exact preventing the user from obtaining enough information to make inferences.  </p>

<p>The best way to explain database inference is through examples.  This module includes three animations that demonstrate how users might be able to put together (infer) information even though they did not have access rights to that data.</p>
