<?php
require_once '../scripts/app_config.php';
require_once '../scripts/database_connection.php';
mysql_connect("127.0.0.1", "root", "","cp1251")or
die("Ошибка соединения: " . mysql_error());
mysql_select_db("bd_jbk_2014");
//$select_query = "select id, name from t_product";
$result = mysql_query("SELECT id, name FROM T_Product");

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    printf("ID: %s  NAME: %s", $row[0], $row[1]);
}

mysql_free_result($result);
?>