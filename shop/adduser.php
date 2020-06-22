<?php
	//session缓存
	session_start();
	//连接数据库
	include ('mysql.php');
	//获取POST传输值111
	if($_POST){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$name = $_POST['name'];

		$sql = "INSERT INTO admin (`username`,`password`,`name`) VALUES ('{$username}','{$password}','{$name}')";
		$mysqli_result = $mysqli->query($sql);

		if($mysqli_result==true){
			echo "<script type='text/javascript' charset='utf-8' async defer>alert('添加成功');</script>";
			header("Location:adduser.php");
		}
		else{
			echo "<script type='text/javascript' charset='utf-8' async defer>alert('添加失败');</script>";
			header("Location:adduser.php");
			exit;
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	</head>
	<body>
		<form class="form-group" action="adduser.php" method="post">
		    <table class="table table-bordered table-striped table-hover table-condensed">
		        <tr>
		            <th width="80px">用户名</th>
		            <td>
						<input class="form-control modal-sm" type="text" name="username">
		            </td>
		        </tr>
		       	<tr>
		            <th>密码</th>
		            <td>
						<input class="form-control modal-sm" type="text" name="password" value="123456">
		            </td>
		        </tr>
		        <tr>
		            <th>昵称</th>
		            <td>
						<input type="text" class="form-control modal-sm"  name="name" placeholder="输入昵称">
		            </td>
		        </tr>
		        <tr>
		            <th></th>
		            <td>
		                <input class="btn btn-success" type="submit" onclick="alert('添加成功');" value="提交">
		            </td>
		        </tr>
		    </table>
		</form>
	</body>
</html>
