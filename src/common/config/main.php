<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'zh-CN',
    'timeZone'=>'Asia/shanghai',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
            'cachePath' => '@common/runtime/cache',
        ],
        /*'formatter' => [
            'class' => 'common\components\Formatter',
        ],*/
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.qq.com',
                'username' => 'shenlei@meilinnet.com',
                'password' => '123456',
                'port' => '465',
                'encryption' => 'ssl',
            ],
        ],
        'i18n' => [
            'translations' => [
                'common*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                    'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'common' => 'app.php',
                        'common/error' => 'error.php',
                    ],
                ],
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                    'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
                'backend*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'sourceLanguage' => 'en-US',
                    'basePath' => '@backend/messages',
                    'fileMap' => [
                        'backend' => 'backend.php',
                        'backend/menu' => 'menu.php',
                        'backend/config' => 'config.php',
                    ],
                ],
                'admin*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'sourceLanguage' => 'en-US',
                    'basePath' => '@admin/messages',
                    'fileMap' => [
                        'admin' => 'admin.php',
                        'admin/menu' => 'menu.php',
                        'admin/config' => 'config.php',
                    ],
                ],
                'rbac*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'sourceLanguage' => 'en-US',
                    'basePath' => '@common/messages',
                    'fileMap' => [
                        'rbac' => 'rbac.php',
                        'rbac-admin' => 'rbac.php',
                    ],
                ],
                'api*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'sourceLanguage' => 'en-US',
                    'basePath' => '@api/messages',
                    'fileMap' => [
                        'api' => 'api.php',
                    ],
                ],
            ],
        ],
        'config' => [
            'class' => 'common\components\Configs',
        ],
        'fs' => [
            'class' => 'creocoder\flysystem\LocalFilesystem',
            'path' => '@data/web',
        ],
    ],
];
