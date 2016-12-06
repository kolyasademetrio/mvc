<?php

// FRONT CONTROLLER

// 1. Общие настройки
ini_set('dispaly_errors', 1);
error_reporting(E_ALL);

// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once ROOT . '/components/Router.php';
require_once ROOT . '/components/Db.php';

// 3. Установка соединения с базой данных



// 4. Вызов Router
$router = new Router();
$router->run();