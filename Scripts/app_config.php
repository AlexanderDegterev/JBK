<?php
/**
 * Created by JetBrains PhpStorm.
 * User: AdminA
 * Date: 12.05.14
 * Time: 11:19
 * To change this template use File | Settings | File Templates.
 */
//Установка режима отладки
define("DEBUG_MODE",true);

// Корневой каталог сайта
define("SITE_ROOT", "/Templ/");

define("DATABASE_HOST","127.0.0.1");
define("DATABASE_USERNAME","root");
define("DATABASE_PASSWORD","");
define("DATABASE_NAME","bd_jbk_2014");
define("DATABASE_SET","cp1251");

// Функция которая выводит информ. только в отладочном режиме
if ($debug_mode) {
    error_reporting(E_ALL);
} else {
    // Выключение выдачи отчетов об ошибках
    error_reporting(0);
}

function debug_print($message) {
    if (DEBUG_MODE) {
        echo $message;
    }
}

function handle_error($user_error_message, $system_error_message) {
    header("Location: " . SITE_ROOT . "scripts/show_error.php?error_message={$user_error_message}&system_error_message={$system_error_message}");
    //header("Location: " . SITE_ROOT . "scripts/show_error.php?" . "error_message={$user_error_message}" . "system_error_message={$system_error_message}");
    exit();
}
?>
