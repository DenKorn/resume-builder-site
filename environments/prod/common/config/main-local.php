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
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'topscrumboard@gmail.com',
                'password' => '', // TODO после обновлиения закинуть сюда
                'port' => '587',
                'encryption' => 'tls',
            ],
        ],
    ],
];
