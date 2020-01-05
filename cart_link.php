<?php
header("Content-Type:text/html;charset=utf-8");

$host = "localhost:3307";
$db_user = "root";
$db_passwd = "";
$db_name = "bookstore1";

$link =mysqli_connect($host, $db_user, $db_passwd, $db_name);
if($link)
{
    mysqli_query($link,'SET NAMES utf8');
}
else
{
echo'無法連線mysql資料庫',mysqli_connect_error();
}
?>