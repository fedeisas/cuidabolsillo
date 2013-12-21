<?php

return array(
    'connections' => array(
        'mysql' => array(
            'driver'    => 'mysql',
            'host'      => $_SERVER['DB_HOST'],
            'database'  => $_SERVER['DB_NAME'],
            'username'  => $_SERVER['DB_USER'],
            'password'  => $_SERVER['DB_PASS']
        )
    )
);
