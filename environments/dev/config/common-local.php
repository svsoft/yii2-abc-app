<?php

/**
 * File has config for all applications (console, web) and Development environment
 */

$config =  [
    'components' => [
        'sphinx' => [
            'class' => 'yii\sphinx\Connection',
            'dsn' => 'mysql:host=127.0.0.1;port=9306;',
            'username' => '',
            'password' => '',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=127.0.0.1;dbname=dbname',
            'username' => 'user',
            'password' => 'password',
            'charset' => 'utf8',
            'enableSchemaCache'=>false,
        ],
    ],
];

$config['bootstrap'][] = 'gii';
$config['modules']['gii'] = [
    'class' => 'yii\gii\Module',
    'allowedIPs' => ['*'],
    // uncomment the following to add your IP if you are not connecting from localhost.
    //'allowedIPs' => ['127.0.0.1', '::1'],
];

return $config;
