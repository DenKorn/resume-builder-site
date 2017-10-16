<?php

$config = [
    'components' => [
        'request' => [
            'cookieValidationKey' => 'WQKXVGp3KxZNkE_CcoEGnLEcbaV9jz1f',
        ],
        'user' => [
            'identityCookie' => [
                'domain' => '.resume-builder.loc',
            ]
        ],
        'session' => [
            'cookieParams' => [
                'domain' => '.resume-builder.loc',
            ],
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
