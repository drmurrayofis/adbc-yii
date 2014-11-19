<?php
/* @var $this DatabaseinferenceController */

$this->breadcrumbs=array(
	'Databaseinference'=>array('/security/databaseinference'),
	'Examplescenarioi',
);
?>

<p>Poorly secured databases allow users to figure out information that he or she should not be able to know.</p>

<p>Inference can happen when users are allowed to access aggregate values, but not individual records. It is possible to use aggregate values to infer individual values. For example, let's say Alice is asked to summarize organizational salary data for female employees.</p>

<?php echo $this->getSqlEditor(null, "SELECT * FROM EMPLOYEE;"); ?>

<p>Alice may know the average salary of all female employees with her current access level.</p>

<?php echo $this->getSqlEditor(null, "SELECT AVG(salary) AS AVG_SALARY FROM EMPLOYEE WHERE GENDER='F';"); ?>

<p>On this page you can freely query for any information contained in the example database, but in a real-world scenario a user would not have the ability to query private information so easily.</p>

<p>Notice that one of the employees is named Goldberg.</p>

<?php echo $this->getSqlEditor(null, "SELECT * FROM EMPLOYEE WHERE lastname='Goldberg'"); ?>

<p>Alice is not able to run the above query, because she would then be able to learn personal information about Goldberg. But Alice wants to know Goldberg's salary. How would she learn what that is?</p>

<p>Alice knows that Goldberg has 11 dependents, so she can query Female employees with 11 dependents with her access level allowing for only aggregate values. Alice can simply assume that no other employees will have 11 dependents, because that makes Goldberg an outlier.</p>

<?php echo $this->getSqlEditor(null,
    "SELECT AVG(salary) AS AVG_SALARY FROM EMPLOYEE\n".
    "WHERE GENDER='F' AND DEPENDENTS=11;"); ?>

<p>In this scenario, Alice learns Goldberg's salary, which is private information. Notice that Alice did not have the access rights to query Goldberg directly, but that did not stop Alice from using database inference.</p>
