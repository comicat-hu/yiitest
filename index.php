<?php
$yii=dirname(__FILE__).'/../../yii/framework/yii.php';
$config = dirname(__FILE__) . '/protected/config/main.php';

defined('YII_DEBUG') or define('YII_DEBUG', true);

require_once $yii;
$app = Yii::createWebApplication($config);

Yii::app()->onBeginRequest = function ($event) {
    // echo 'onBeginRequest<br>';
};

Yii::app()->onEndRequest = function ($event) {
    // echo 'onEndRequest<br>';
};

$app->run();