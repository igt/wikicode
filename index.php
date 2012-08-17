<?php


// путь к директории фреймвока [используется Yii Framework v.1.1.10]
$yii = dirname(__FILE__) . '/../framework/yii.php';
//$config = dirname(__FILE__) . '/protected/config/development.php';
$config = dirname(__FILE__) . '/protected/config/production.php';

// используем режим отладки во время разработки
defined('YII_DEBUG') or define('YII_DEBUG', true);

// определяем уровень с которого будет показываться сообщения в логах
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

// подключаем фреймворк
require_once($yii);

// запускаем веб-приложение
Yii::createWebApplication($config)->run();