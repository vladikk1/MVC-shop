<?php


/**
 * Функция __autoload для автоматического подключения классов
 */
spl_autoload_register (function($class)
{
    $array = array(
        '/models/',
        '/components/',
        '/controllers/',
    );

    foreach ($array as $url) {
        $url = ROOT . $url . $class . '.php';

        if (is_file($url)) {
            include_once $url;
        }
    }

});