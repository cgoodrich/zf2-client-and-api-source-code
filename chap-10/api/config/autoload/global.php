<?php

return array(
    'db' => array(
        'driver' => 'Pdo',
        'username' => 'api',
        'password' => 'password',
        'dsn' => 'mysql:dbname=zf2appdevelopment;host=www.beaconstagezero.com',
        'driver_options' => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' =>
                'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
);
