<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=kgnyaakxkd',
            'username' => 'kgnyaakxkd',
            'password' => 'Yd7KjfZk94',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'WQKXVGp3TxZNkE_CcoEGnLEcbaV9jz1f',
        ],
        'user' => [
            'identityCookie' => [
//                'domain' => '.resume-builder.loc' TODO заполнить, если продакшн будет переведен на хостинг с поддержкой субдоменов
            ]
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'cookieParams' => [
//                'domain' => '.resume-builder.loc', TODO заполнить, если продакшн будет переведен на хостинг с поддержкой субдоменов
            ],
        ],
    ],
];
