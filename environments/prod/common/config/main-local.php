<?php
$db_host = getenv('DB_SIGNUP_HOST');
$db_name = getenv('DB_SIGNUP_NAME');
$db_user = getenv('DB_SIGNUP_USER');
$db_pass = getenv('DB_SIGNUP_PASS');
return [
    'components' => [
        'db' => [
            'class'       => "yii\db\Connection",
            'dsn'         => "mysql:host={$db_host};dbname={$db_name}",
            'username'    => "{$db_user}",
            'password'    => "{$db_pass}",
            'charset' => 'utf8',
            'tablePrefix' => 'yii_',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
    ],
];
