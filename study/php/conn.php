<?php
//// 连接数据库///

header("Content-Type: text/html; charset=utf-8");
// 创建连接
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "conn";
$db = mysqli_connect($servername,$username,$password,$dbname);
// $db->query("set names utf8");
$db->set_charset("utf8");
// 检测连接
if ($db->connect_error) {
	die("连接失败: " . $db->connect_error);
} 
	
?>