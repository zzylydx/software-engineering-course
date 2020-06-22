<?php
	//连接数据库
	include ('mysql.php');
	//判断表单传入
	if($_POST){
		$username = $_POST['username'];
		$name = $_POST['name'];

		$sql = "SELECT * from admin WHERE username='{$username}'and name='{$name}'";
		$mysqli_result = $mysqli->query($sql);

		if($row = $mysqli_result->fetch_array()){
			$password = $row['password'];
			// header('Content-Type:text/html;charset=utf-8');
			echo "您的密码是：".$password;
			echo "<a href='login.php'>点我返回</a>";
			//echo "<script type='text/javascript'>alert('找回成功\n密码是：".$password."');</script>";
			//sleep(5);
			//header("Location:login.php");
		}
		else{
			echo "未找到与此用户名，昵称对应账号";
			echo "<a href='login.php'>点我返回</a>";
			//echo "<script type='text/javascript' charset='utf-8' async defer>alert('找回失败');</script>";
			//sleep(5);
			//header("Location:login.php");
			//exit;
		}
	}
?>