<?php


function sql_connect()
{

require_once '../config.php';

$is_connect = mysql_connect(DBSERVER, DBUSER, DBUSER_PASS) or die('Ошибка соединения: ' . mysql_error());

mysql_query("SET NAMES 'utf8';");
mysql_query("SET CHARACTER SET 'utf8';");
mysql_query("SET SESSION collation_connection = 'utf8_general_ci';"); 

mysql_select_db(DBNAME) or die('Не могу выбрать заданную Базу Данных');

};


?>
