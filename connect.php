<?php

/* Подключаем БД к сайту */
	
$Host = "127.0.0.1";
$User = "root";
$Password = "";
$DBName = "client_form";
//$Link = mysql_connect ($Host, $User);
//mysql_select_db ($DBName, $Link);
if(@!mysql_connect($Host, $User)) exit(mysql_error());
if (@!mysql_select_db($DBName)) exit(mysql_error());
?>
