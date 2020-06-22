<?php
	//session缓存
	session_start();
	//连接数据库
	include ('mysql.php');
	//判断表单传入
	if($_POST){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * from admin WHERE username='{$username}'and password='{$password}'";
		$mysqli_result = $mysqli->query($sql);

		if($row = $mysqli_result->fetch_array()){
			$_SESSION['id'] = $row['id'];
			echo"<script type='text/javascript' charset='utf-8' async defer>alert('登陆成功');</script>";
			header("Location:admin.php");
		}
		else{
			echo"<script type='text/javascript' charset='utf-8' async defer>alert('登录失败');</script>";
			header("Location:nolog.php");
			exit;
		}
	}
?>
