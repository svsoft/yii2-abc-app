<?php

/**
 * File has config for all applications (console, web) and all environments
 */

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
    ],
    'params' => [
        'adminEmail' => 'admin@example.com',
    ],
    'modules' => [
        'backup' => [
            'class'         => 'svsoft\yii\backup\BackupModule',
            'backupsFolder' => dirname(__DIR__) . '/backups', // <project-root>/backups
            // Directories that will be added to backup
            'directories'   => [
                'uploads' => dirname(__DIR__) . '/web/upload',
            ],
        ],
    ],
];

return $config;
