<?php

// FRONT CONTROLLER
// Общие настройки
ini_set('display_errors',0);
error_reporting(E_ALL);
session_start();
// Подключение файлов системы
// Вызов Router
define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Autoload.php');

$router = new Router();
$router->run();

