<!DOCTYPE HTML>
<html>
<head>
<title>登录</title>
<link rel="stylesheet" type="text/css" href="css/verify.css">
<?php
	include('link.php');
?>
<!-- //end-smoth-scrolling -->
<script src="js/simpleCart.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<!--header strat here-->
<?php
	include('header.php');
?>
<!--header end here-->
<!--log in start here-->
<div class="login">
	<div class="container">
		<div class="login-main">
			  <h1>登录</h1>
		  <div class="col-md-6 login-left">
			<h2>已注册用户</h2>
			<form action="tologin.php" method="post" name="loform">
				<input type="text" placeholder="用户名" name="username" >
				<input type="password" placeholder="密码" name="password" >
				<input type="button" class="btn btn-danger" value="登录" data-toggle="modal" data-target=".bs-example-modal-sm">
				<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" style="margin-top: 10%;">
				  <div class="modal-dialog modal-sm" role="document">
				    <div class="modal-content">
				      <div id="mpanel4">
					</div>
				    </div>
				  </div>
				</div>
			</form>
			<!-- Large modal -->
			<button type="button" class="btn btn-primary" style="margin-top: 20px;" data-toggle="modal" data-target=".bs-example-modal-lg">忘记密码</button>

			<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			  <div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			    	<div class="row">
					  <div class="col-md-2"></div>
					  <div class="col-md-8">
						<form action="zhaohui.php" method="post">
						  <div class="form-group">
						    <label for="exampleInputEmail1">用户名</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" name="username" placeholder="用户名">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">昵称</label>
						    <input type="text" class="form-control" id="exampleInputPassword1" name="name" placeholder="昵称">
						  </div>
						  <button type="submit" class="btn btn-info">找回密码</button>
						</form>
					  </div>
					  <div class="col-md-2"></div>
					</div>
			    </div>
			  </div>
			</div>
		  </div>
		  <div class="col-md-6 login-right">
		  	 <h3>创建新用户</h3>
		  	 <p>每一位网站的工作人员都向您保证，我们必将会为您提供最真诚最幼稚的服务！</p>
		     <a href="signup.php" class="login-btn">注册</a>
		  </div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/verify.js" ></script>
<script type="text/javascript">
		$('#mpanel4').slideVerify({
		type : 2,		//类型
		vOffset : 5,	//误差量，根据需求自行调整
		vSpace : 5,	//间隔
		imgName : ['1.jpg', '2.jpg'],
		imgSize : {
			width: '400px',
			height: '200px',
		},
		blockSize : {
			width: '40px',
			height: '40px',
		},
		barSize : {
			width : '400px',
			height : '40px',
		},
		ready : function() {
		},
		success : function() {
			alert('验证成功！');
			document.all.loform.submit();
			//......后续操作
		},
		error : function() {
//		        	alert('验证失败！');
		}
	});
</script>
<!--log in end here-->
<!--footer strat here-->
<?php 
	include('footer.php');
?>
<!--footer end here-->
</body>
</html>
