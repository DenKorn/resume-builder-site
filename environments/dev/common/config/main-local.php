<?php

$commonDomain = '.resume-builder.loc';

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=resume_builder_dev',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'useFileTransport' => true,
        ],
        'request' => [
            'cookieValidationKey' => 'WQKXVGp3KxZNkE_CcoEGnLEcbaV9jz1f',
        ],
        // Работает до сих пор не до конца верно, временно закомментил, иначе не получалось логиниться
        // https://stackoverflow.com/questions/43418088/yii2-advanced-share-session-between-frontend-and-mainsite-duplicate-of-fronte
//        'user' => [
//            'identityCookie' => [
//                'domain' => $commonDomain,
//                'path' => '/'
//            ]
//        ],
//        'session' => [
//            'cookieParams' => [
//                'domain' => $commonDomain,
//                'savePath' => __DIR__.'../../sessionTmp'
//            ],
//        ],
    ],
];
