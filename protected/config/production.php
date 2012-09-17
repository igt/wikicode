<?php

// Это главный конфигурационный файл веб-прилоежния
// CWebApplication свойства должны быть определены здесь
return array(
	'basePath'=>dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
	'name'=>'WikiCode',
    'defaultController' => 'main',
    'language'=>'ru',
    'theme'=>'classic',

	// предзагрузка 'log' компонента
	'preload'=>array('log'),

	// автозагрузка моделей и компонентов
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	// GUI генератор - используется для отладки
	'modules'=>array(
		// временно подключаем Gii (для процесса разработки) 
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'t50x7jpg',
		 	// привязываем к IP, чтобы обезопасить
			'ipFilters'=>array('127.0.0.1','141.101.237.252','::1'),
		),
        'admin'=>array(
            'mediaSource'=>'default'
        ),
	),

	// компоненты приложения
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// настройка внешнего вида ссылок
		/*		
		'urlManager'=>array(
			'urlFormat'=>'path',
            'showScriptName'=>false,
            'urlSuffix' => '/',
            'useStrictParsing' => false,
            'rules'=>array(
                '' => 'main/index',
                '<action:(random|byrating|abyss)>' => 'main/<action>',
                'rss' => 'rss/index',
                'search' => 'search/index',

                'news/show/<newsId:\d+>'=>'news/show/<newsId:\d+>/',
                'news/<action>/<newsId>/token/<token>'=>'news/vote/<action:\w+>/<newsId:\d+>/<token:\w+>',

                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ),
		),
		*/
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// конфигурация для подключения к базе данных MySql
		/*		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=su_comnews',
			'emulatePrepare' => true,
			'username' => 'the_comnews',
			'password' => 'UHFE6HvEmCCw',
			'charset' => 'utf8',
            'tablePrefix'=>'cn_',
            'enableParamLogging'=>true,
			'enableProfiling'=>true,
			'schemaCachingDuration'=>3600
		),
		*/
        // тип кеша, который нужно использовать
		'cache'=>array(
			'class'=>'system.caching.CFileCache',
		),
		// контроллер и дейсвие для отображения ошибок
		'errorHandler'=>array(
			// use 'news/error' action to display errors
            'errorAction'=>'main/error',
        ),
        // настройка логирования
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),
    // параметры приложения, которые могут быть доступны
    // использовать так: Yii::app()->params['paramName']
    'params'=>array(
        // почта для отправки уведомлений и сообщений из контактной формы
		'adminEmail'=>'webmaster@example.com',
	),
);