<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);
$components = require(__DIR__ . '/components.php');
return [
    'id' => 'app-admin',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'admin\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => $components,
    'params' => $params,
    /*'as access' => [
        'class' => 'admin\components\AccessControl',
        'allowActions' => [
            'account/login', 'account/logout', 'site/error',
        ]
    ],*/
];
