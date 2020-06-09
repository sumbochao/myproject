<?php

return [
    'homeURL'    => 'http://127.0.0.1:8888/dev.php.com/myproject/',
    'baseURI'    => '/dev.php.com/myproject/',
    'navigation' => [
        'home'     => [
            'name' => 'Home'
        ],
        'register' => [
            'name'        => 'Register',
            'conditional' => '!isUserLoggedIn'
        ],
        'login'    => [
            'name'        => 'Login',
            'conditional' => '!isUserLoggedIn'
        ],
        'about'    => [
            'name'        => 'About',
            'conditional' => '!isUserLoggedIn'
        ],
        'contact'  => [
            'name'        => 'Contact',
            'conditional' => '!isUserLoggedIn'
        ]
    ],
    'database'   => [
        'host'     => 'localhost',
        'username' => 'root',
        'password' => 'root',
        'database' => 'myproject1'
    ]
];
