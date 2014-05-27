<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',
	// application components
	'components'=>array(
        /*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
        */
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=yiiframework',
			'emulatePrepare' => true,
			'username' => 'yiiframework',
			'password' => '83d518a7973caf76d87ac3f0377eb0d4',
			'charset' => 'utf8',
		),
	),
);
