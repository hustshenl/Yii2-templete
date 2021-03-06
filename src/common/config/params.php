<?php
$lookup = require(__DIR__ . '/lookup.php');
return [
    'adminEmail' => 'demo@sindm.com',
    'supportEmail' => 'demo@sindm.com',
    'user.passwordResetTokenExpire' => 3600,

    'upload'=> [
        'maxImageSize'=> 1024,//单位K
        'cover' => 'images/cover/',//门头照保存路径
    ],
    'image' => [
        'default'=>[
            'common' => 'images/default/common.jpg',
            'cover' => 'images/default/cover.jpg',
        ],
    ],

    'lookup' => $lookup,
];
