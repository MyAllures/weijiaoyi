<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=fuxing',
            'username' => 'fuxing',
            'password' => '738BytjjyFsC7e8x',
            'charset' => 'utf8',
            'tablePrefix' => ''
        ],
        'db-slave' => [
            'class' => 'yii\db\Connection',
            // 配置主服务器
            'masterConfig' => [
                'username' => 'root',
                'password' => 'root',
                'attributes' => [
                    // use a smaller connection timeout
                    PDO::ATTR_TIMEOUT => 10,
                ],
            ],
            // 配置主服务器组
            'masters' => [
                [
                    'dsn' => 'mysql:host=localhost;dbname=dbname;charset=utf8',
                ],
                
            ],
            // 配置从服务器
            'slaveConfig' => [
                'username' => 'root',
                'password' => '',
                'attributes' => [
                    // use a smaller connection timeout
                    PDO::ATTR_TIMEOUT => 10,
                ],
            ],
            // 配置从服务器组
            'slaves' => [
                [
                    'dsn' => 'mysql:host=localhost;dbname=dbname;charset=utf8',
                ],
            ],
            'tablePrefix' => '',
        ],
        'redis' => [
            'class' => 'common\components\Redis',
            'hostname' => 'localhost',
            'port' => 6379,
            'database' => 0,
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.exmail.qq.com',
                'username' => '459967016@qq.com',
                'password' => '',
                'encryption' => 'tls',
            ],
            'messageConfig' => [
                'charset' => 'UTF-8',
                'from' => ['459967016@qq' => 'ChisWill']
            ],
        ],
    ],
];