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
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ],
        ],
    ],
];
