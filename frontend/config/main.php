<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User', // 前后端用户分离时修改
            'enableAutoLogin' => true,
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
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            'suffix' => '.html',
            'rules' => [ // 规则按顺序匹配，所以子匹配要写前面
                '<controller:\w+>-<action:\w+>-<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>-<action:\w+>' => '<controller>/<action>',
                '<controller:\w+>' => '<controller>/index',

                // 可以指定请求模式
                // 'PUT <controller:[\w-]+>/<id:\d+>'    => '<controller>/update',
                // 'DELETE <controller:[\w-]+>/<id:\d+>' => '<controller>/delete',
            ],
        ],
    ],
    'params' => $params,
];
