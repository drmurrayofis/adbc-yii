<?php
/* @var $this ManaginganomaliesController */

$this->breadcrumbs=array(
	'Managinganomalies'=>array('/design/managinganomalies'),
	'Anomaliesquiz',
);

$q = $this->beginWidget('Quiz');

$q->question("What command or commands is necessary to add an Employee with Emp_ID='10055', Name='Becky Barkley', Salary='60000' and Dept='002' and keep both the Employee and Departments table consistent?",1);

$q->answer("INSERT INTO Employees VALUES(100055, 'Becky Barkley', 60000, 002); INSERT INTO Departments VALUES('002', 'HR', 'bldg1');");
$q->feedback("The selection is incorrect because it is not necessary to insert a row into the departments table. It already contains a row with Dept_ID='002'.");
$q->answer("INSERT INTO Employees VALUES(100055, 'Becky Barkley', 60000, 002);");
$q->feedback("Since the tables are not normalized, we only need to perform one INSERT command.");
$q->answer("INSERT INTO Employees VALUES(100055, 'Becky Barkley', 60000);");
$q->feedback("INSERT statements should include all values that will be inserted into the database. This answer does not include the addition of Dept='002' with the other values of data.");



$q->question("What string of commands is necessary to move Mary Black from the Accounting Department to the Human Resources Department while keeping both the Employees and Departments tables consistent?",0);

$q->answer("UPDATE Employees SET Dept_ID='002' WHERE Name='Mary Black';");
$q->feedback("");
$q->answer("UPDATE Employees SET Dept_ID='002' WHERE Name='Mary Black'; UPDATE Departments SET Dept_ID='002', Dept_Name='HR', Location='bldg1';");
$q->feedback("There is no Emp_ID present in the Departments table.");
$q->answer("UPDATE Department SET Dept_ID='002', Dept_Name='HR' WHERE Dept_Name='Acct';");
$q->feedback("This changes the entire Accounting department to the HR department. Only one employee needs to be moved.");




$q->question("What string of commands is necessary to move Mary Black from the Accounting Department to the Human Resources Department while keeping both the Employees and Departments tables consistent?",1);

$q->answer("UPDATE Employees SET Dept_ID='002' WHERE Name='Mary Black';");
$q->feedback("");
$q->answer("UPDATE Departments SET Dept_ID='002', Dept_Name='HR', Location='bldg1' WHERE Emp_ID=(SELECT Emp_ID FROM Employees WHERE Name='Mary Black');");
$q->feedback("");
$q->answer("UPDATE Department SET Dept_ID='002', Dept_Name='HR' WHERE Dept_Name='Acct';");
$q->feedback("This changes the entire Accounting department to the HR department. Only one employee needs to be moved.");




$q->question("What will remove Employee Earl Tilley from the database while keeping both tables consistent?",0);

$q->answer("DELETE FROM Employees WHERE Emp_ID=100022;");
$q->feedback("");
$q->answer("DELETE FROM Employees WHERE Emp_ID=100022; DELETE FROM Departments WHERE Emp_ID=100022;");
$q->feedback("There is no Emp_ID field in the Departments table.");
$q->answer("UPDATE Employees SET Dept_ID=NULL WHERE Dept_ID='002';");
$q->feedback("This removes Earl Tilly from the Accounting department, but he remains in the database.");




$q->question("What will remove Employee Earl Tilley from the database while keeping both tables consistent?",1);

$q->answer("DELETE FROM Employees WHERE Emp_ID=100022;");
$q->feedback("This deletes Earl Tilly, but leaves the Department table inconsistent.");
$q->answer("DELETE FROM Employees WHERE Emp_ID=100022; DELETE FROM Departments WHERE Emp_ID=100022;");
$q->feedback("Both tables have the data correctly deleted with these commands.");
$q->answer("UPDATE Departments SET Dept_ID=NULL WHERE Emp_ID='100022';");
$q->feedback("This removes Earl Tilly from the Accounting department, but he remains in the database.");

$this->endWidget();
