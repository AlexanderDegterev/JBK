<?PHP
require_once '../scripts/app_config.php';
mysql_connect(DATABASE_HOST,DATABASE_USERNAME,DATABASE_PASSWORD);
//or die("<p>Ошибка подключения к БД:".mysql_error()."</p>");
//echo "<p> Вы подключилист к  MySQL!</p>";
mysql_select_db(DATABASE_NAME)
or die ("<p>Ошибка при выборе БД:".mysql_error()."</p>");
mysql_query("SET NAMES 'cp1251'");
//echo "<p> Вы подключкны к MySQL с исполюзованием БД: " . DATABASE_NAME ."</p>";
$result = mysql_query("SHOW TABLES;");
if (!$result) {
    die("<p>Ошибка при выводе перечня таблиц: " . mysql_error() . "</p>");
}
?>