<?php
/**
 * @Author shen@shenl.com
 * @Create Time: 2015/2/12 16:43
 * @Description:
 */


return [
    'cache' => [
        'class' => 'yii\caching\FileCache',
    ],
    'user' => [
        'identityClass' => 'common\models\user\User',
        'loginUrl' => '/account/login',
        'authTimeout' => 30*24*3600,
        //'enableSession' => false,
        //'loginUrl' => '/site/login',
        'enableAutoLogin' => true,
    ],
    'authManager' => [
        'class' => 'yii\rbac\DbManager',
    ],
    'errorHandler' => [
        'errorAction' => 'site/error',
    ],
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
    ],
    'log' => [
        'traceLevel' => YII_DEBUG ? 3 : 0,
        'targets' => [
            [
                'class' => 'yii\log\FileTarget',
                'levels' => ['error', 'warning'],
            ],
        ],
    ],

    'metronic' => [
        'class' => 'hustshenl\metronic\Metronic',
        //'color' => 'default',
        'theme' => 'light',
        'layoutOption' => \hustshenl\metronic\Metronic::LAYOUT_FLUID,
        'headerOption' => 'fixed',
        'headerDropdown' => 'light',
    ],
    'image' => [
        'class' => 'yii\image\ImageDriver',
        'driver' => 'GD',  //GD or Imagick
    ]
];