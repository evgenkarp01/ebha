<?php

//Функции для работы с БД
function getQuery($query){
  $res = mysql_query($query) or die(mysql_error());
  $row = mysql_fetch_row($res);
  $var = $row[0];
  return $var;
}
 
function setQuery($query){
  $res = mysql_query($query) or die(mysql_error());
  return $res;
}
 
//Соединяемся с базой
@mysql_connect('localhost', 'root', '13051987') or die("Не могу соединиться с MySQL.");
@mysql_select_db('laval_chat') or die("Не могу подключиться к базе.");
@mysql_query('SET NAMES utf8;');
 
if(isset($_POST['delete-from-chat'])){
	setQuery("TRUNCATE TABLE `chat`;");
}