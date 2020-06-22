<?php
//防止网页打印乱码
header("Content-type:text/html;charset=utf-8");
//连接数据库,实例化对象mysqli
//localhost => 本地站点
//root => 用户名
//‘’ => 密码
//student => 数据库名
$mysqli=new mysqli('localhost','root','','shop');
if(!$mysqli){
	echo '连接错误';
}
//数据库字符集
$mysqli->query("SET NAMES UTF8");
?>