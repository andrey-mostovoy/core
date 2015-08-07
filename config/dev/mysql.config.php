<?php
/**
 * Конфигурация коннектов к базам данных mysql.
 * внутреннее_название => данные для коннекта
 * @author Andrey Mostovoy <stalk.4.me@gmail.com>
 */
return array(
    'hny' => array(
        'host'      => '{{ core_app_name }}-dev-db',
        'login'     => 'root',
        'password'  => 'sqlpassword',
    ),
);
