<?php
	//连接数据库
	include ('mysql.php');
	//判断表单传入
	if($_POST){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$name = $_POST['name'];

		$sql = "INSERT INTO admin (`username`,`password`,`name`) VALUES ('{$username}','{$password}','{$name}')";
		$mysqli_result = $mysqli->query($sql);

		if($mysqli_result==true){
			echo "<script type='text/javascript' charset='utf-8' async defer>alert('注册成功');</script>";
			header("Location:login.php");
		}
		else{
			echo "<script type='text/javascript' charset='utf-8' async defer>alert('注册失败');</script>";
			header("Location:login.html");
			exit;
		}
	}
?>