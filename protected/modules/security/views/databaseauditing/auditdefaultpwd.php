<?php
/* @var $this DatabaseauditingController */

$this->breadcrumbs=array(
	'Databaseauditing'=>array('/security/databaseauditing'),
	'Auditdefaultpwd',
);

$q = $this->beginWidget('Quiz');

$q->question('What is boogie?', 3);
$q->answer('Bagels', 'Sometimes bats fly into caves.');
$q->answer('Nine Inch Nails', 'Angst is good for your complexion');
$q->answer('BBC', '');
$q->answer('Mt. Fuji', 'Please hug a child');

$this->endWidget();
