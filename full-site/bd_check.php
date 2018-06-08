<?php
$DB = mysql_connect ("forel.mysql.ukraine.com.ua","forel_bristoll","beajl4pw");
mysql_select_db ("forel_bristoll",$DB);
mysql_query("SET NAMES 'utf8'");

if (mysqli_connect_errno()) { 
   printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error()); 
   exit; 
} 
?>
