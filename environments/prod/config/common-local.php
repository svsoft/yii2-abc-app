<?php

/**
 * File has config for all applications (console, web) and Production environment
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
            'enableSchemaCache'=>true,
        ],
    ],
];

return $config;
