<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

$AVAILABLE_THEMES = ['basic', 'adminLTE'];
$themeName = $AVAILABLE_THEMES[1];

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'user' => [
            'as backend' => 'dektrium\user\filters\BackendFilter',
        ],
    ],
    'components' => [
        'assetManager' => [
            'bundles' => [
                'dmstr\web\AdminLteAsset' => [
//                    'skin' => 'skin-purple', TODO потом изменить
                ],
            ],
        ],
		'view' => [
            'theme' => [
                'basePath' => "@app/themes/{$themeName}",
                'baseUrl' => "@web/themes/{$themeName}",
                'pathMap' => [
                    '@app/views' => "@app/themes/{$themeName}",
					'@app/modules' => "@app/themes/{$themeName}/modules",
					'@app/widgets' => "@app/themes/{$themeName}/widgets",
                ],
            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-backend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'user' => [
            'identityCookie' => [
                'name' => '_identity-common',
                'httpOnly' => true
            ]
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];
