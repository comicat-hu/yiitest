<?php
/**
 * Main config for WebApplication
 */

return [
    'name' => 'Yii Test Web',
    'import' => [
        'application.models.*',
        'application.components.*',
    ],
    'components' => [
        'urlManager' => [
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => [
                'math/<a:\d+><action:(add|div|mul|sub)><b:\d+>' => 'math/<action>',
                'math/<action:(add|div|mul|sub)>' => 'math/<action>',
                'math/<action:\w+>' => 'math/index',
                // '<controller:\w+>/<id:\d+>' => '<controller>/view',
                // '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                // '<controller:\w+>'=>'<controller>/index',
            ],
        ],
        'errorHandler' => [
            //'errorAction' => 'site/index',
        ],
        'cache' => array(
            'class' => 'CApcCache'
        ),
        'memCache' => [
            'class' => 'CMemCache',
            'useMemcached' => false,
            'keyPrefix' => '',
            // 'hashKey' => false,
            // 'serializer' => false,
            'servers' => [
                [
                    'host' => '10.102.5.220',
                    'port' => 11211,
                    'weight' => 50,
                ],
                [
                    'host' => '10.102.5.222',
                    'port' => 11211,
                    'weight' => 50,
                ],
            ],
        ],
    ],
];
