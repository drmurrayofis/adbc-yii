<?php

Yii::setPathOfAlias('webroot', dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..');
Yii::setPathOfAlias('application', dirname(__FILE__).DIRECTORY_SEPARATOR.'..');

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
    'params'=>array(
        // See https://github.com/zyrolasting/adbc-yii/wiki/ADBC-Content-Organization
        'topicSkeletonPath' => Yii::getPathOfAlias('application.topic-skeleton'), 
        'topicSkeletonMap' => array(
            'behavior.js' => Yii::getPathOfAlias('webroot').DIRECTORY_SEPARATOR.'js',
            'style.css' => Yii::getPathOfAlias('webroot').DIRECTORY_SEPARATOR.'css',
            'view.php' => Yii::getPathOfAlias('application.views.site.topics'),
            'config.php' => Yii::getPathOfAlias('application.config.topics'),
        ),
    )
);
