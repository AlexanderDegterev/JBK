<?PHP
require_once '../scripts/app_config.php';
mysql_connect(DATABASE_HOST,DATABASE_USERNAME,DATABASE_PASSWORD);
//or die("<p>������ ����������� � ��:".mysql_error()."</p>");
//echo "<p> �� ������������ �  MySQL!</p>";
mysql_select_db(DATABASE_NAME)
or die ("<p>������ ��� ������ ��:".mysql_error()."</p>");
mysql_query("SET NAMES 'cp1251'");
//echo "<p> �� ���������� � MySQL � �������������� ��: " . DATABASE_NAME ."</p>";
$result = mysql_query("SHOW TABLES;");
if (!$result) {
    die("<p>������ ��� ������ ������� ������: " . mysql_error() . "</p>");
}
?>