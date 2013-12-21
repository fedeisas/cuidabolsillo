<?php

// return array(
//     'default' => 'mysql',
//     'connections' => array(
//         'mysql' => array(
//             'driver'    => 'mysql',
//             'host'      => '127.0.0.1',
//             'database'  => 'cuidabolsillo_testing',
//             'username'  => 'travis',
//             'password'  => ''
//         )
//     )
// );

return array(
    'default' => 'sqlite',
    'connections' => array(
        'sqlite' => array(
            'driver'    => 'sqlite',
            'database'      => ':memory:'
        )
    )
);
