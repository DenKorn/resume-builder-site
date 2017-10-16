<?php
return [
    'components' => [
        'request' => [
            'cookieValidationKey' => 'WQKXVGp3TxZNkE_CcoEGnLEcbaV9jz1f',
        ],
        'user' => [
            'identityCookie' => [
//                'domain' => '.resume-builder.loc' TODO заполнить, если продакшн будет переведен на хостинг с поддержкой субдоменов
            ]
        ],
        'session' => [
            'cookieParams' => [
//                'domain' => '.resume-builder.loc', TODO заполнить, если продакшн будет переведен на хостинг с поддержкой субдоменов
            ],
        ],
    ]
];
