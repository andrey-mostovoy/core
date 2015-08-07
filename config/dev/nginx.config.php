<?php
/**
 * Nginx конфиг для дев платформы.
 * @author Andrey Mostovoy <stalk.4.me@gmail.com>
 */
return [
    'listen' => '80',
    'serverNames' => [
        USER . '.{{ core_app_name }}.com',
    ],
    'fastcgi' => 'unix:/var/run/php5-fpm.sock',
];
