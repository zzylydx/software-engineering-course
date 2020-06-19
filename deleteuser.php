<?php 
	//连接数据库
	include ('mysql.php');
	//获取所有用户信息
	$sql = "SELECT * FROM `admin`";
	$mysqli_result = $mysqli->query($sql);
	while($row = $mysqli_result->fetch_array(MYSQLI_ASSOC)){
		$rows[] = $row;
	}
	if ($_GET) {
		$sql1 = "DELETE FROM `admin` WHERE id='{$_GET['id']}'";
		$mysqli_result1 = $mysqli->query($sql1);
		if($mysqli_result1==true){
			echo "<script type='text/javascript' charset='utf-8' async defer>alert('删除成功');</script>";
			header("Location:deleteuser.php");
		}
		else{
			echo "<script type='text/javascript' charset='utf-8' async defer>alert('删除失败');</script>";
			header("Location:deleteuser.php");
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
	    <table class="table table-bordered table-striped table-hover table-condensed">
	    	<tr>
	    		<th>序号</th>
	    		<th>用户名</th>
	    		<th>昵称</th>
	    		<th>密码</th>
	    		<th>操作</th>
	    	</tr>
	    	 <?php
		        if($rows){
		        	$i = 1;
		        	foreach($rows as $row){
			?>
		        <tr>
		            <th><?php echo $i; ?></th>
		            <td><?php echo $row['username']; ?></td>
		            <td><?php echo $row['name']; ?></td>
		            <td><?php echo $row['password']; ?></td>
		            <td>
		            	<a class="btn btn-primary" href="deleteuser.php?id=<?php echo $row['id']; ?>">删除</a>
		            </td>
		        </tr>
	    	<?php
	    		$i++;
			    }
			}
	    	?>
	    	<tr style="width: 100px;height: 50px;"></tr>
	    </table>	
	</body>
</html>