<?php
	//连接数据库
	include ('mysql.php');
	//获取POST传输值
	if($_POST){
		$linkhtml = $_POST['linkhtml'];
		$urlimg = 'images/'.$_FILES["urlimg"]["name"];
		$name = $_POST['name'];
		$price = $_POST['price'];

		if ((($_FILES["urlimg"]["type"] == "image/png")
		|| ($_FILES["urlimg"]["type"] == "image/jpeg")
		|| ($_FILES["urlimg"]["type"] == "image/pjpeg"))
		&& ($_FILES["urlimg"]["size"] < 2000000))
		  {
		  if ($_FILES["urlimg"]["error"] > 0)
		    {
		    echo "Return Code: " . $_FILES["urlimg"]["error"] . "<br />";
		    }
		  else
		    {
		    // echo "Upload: " . $_FILES["urlimg"]["name"] . "<br />";
		    // echo "Type: " . $_FILES["urlimg"]["type"] . "<br />";
		    // echo "Size: " . ($_FILES["urlimg"]["size"] / 1024) . " Kb<br />";
		    // echo "Temp file: " . $_FILES["urlimg"]["tmp_name"] . "<br />";

		    if (file_exists("upload/" . $_FILES["urlimg"]["name"]))
		      {
		      echo $_FILES["urlimg"]["name"] . " already exists. ";
		      }
		    else
		      {
		      move_uploaded_file($_FILES["urlimg"]["tmp_name"],
		      "images/" . $_FILES["urlimg"]["name"]);
		      // echo "Stored in: " . "upload/" . $_FILES["urlimg"]["name"];  1
		      }
		    }
		  }
		else
		  {
		  echo "Invalid file";
		  }
		$sql = "INSERT INTO product (`linkhtml`,`urlimg`,`name`,`price`) VALUES ('{$linkhtml}','{$urlimg}','{$name}','{$price}')";
		$mysqli_result = $mysqli->query($sql);

		if($mysqli_result==true){
			echo "<script type='text/javascript' charset='utf-8' async defer>alert('添加成功');</script>";
			header("Location:addproduct.php");
		}
		else{
			echo "<script type='text/javascript' charset='utf-8' async defer>alert('添加失败');</script>";
			header("Location:addproduct.php");
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
		<form class="form-group" action="addproduct.php" method="post" enctype="multipart/form-data">
		    <table class="table table-bordered table-striped table-hover table-condensed">
		        <tr>
		            <th width="80px">商品名</th>
		            <td>
						<input class="form-control modal-sm" type="text" name="name">
		            </td>
		        </tr>
		       	<tr>
		            <th>图片</th>
		            <td>
						<input class="form-control modal-sm" type="file" name="urlimg">
						<input class="form-control modal-sm" type="file" name="urlimg">
						<input class="form-control modal-sm" type="file" name="urlimg">
						<input class="form-control modal-sm" type="file" name="urlimg">
		            </td>
		        </tr>
		        <tr>
		            <th width="80px">链接网页</th>
		            <td>
						<input class="form-control modal-sm" type="text" name="linkhtml" value="linkphp.php">
		            </td>
		        </tr>
		        <tr>
		            <th>价钱</th>
		            <td>
						<input type="text" class="form-control modal-sm"  name="price" placeholder="输入价钱">
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