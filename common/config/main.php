<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'mailer' => [
                'sender'                => 'no-reply@resume-builder.com',
                'welcomeSubject'        => 'Welcome subject',
                'confirmationSubject'   => 'Confirmation subject',
                'reconfirmationSubject' => 'Email change subject',
                'recoverySubject'       => 'Recovery subject',
            ],
        ],
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
