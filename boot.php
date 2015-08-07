<?php
use stalk\Config\Config;

include_once 'constants.php';

// Регистрация загрузки классов проекта.
spl_autoload_register(function($className) {
    try {
        include_once (SRC_DIR . str_replace('\\', '/', $className) . FILE_EXT);
    } catch (Exception $Ex) {}
});

// Регистрация автозагрузчиков внешних библиотек.
require CLASS_COMPOSER_AUTOLOADER;


// определение путей конфига
Config::getInstance()->setConfigDir(CONFIG_DIR . APPLICATION_PLATFORM . '/');
