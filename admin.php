<?php
	//session缓存
	session_start();
	//连接数据库
	include ('mysql.php');
	//获取用户信息
	include ('getadmin.php');

 ?>
<!DOCTYPE html>
<html style="height: 100%;">
	<head>
		<meta charset="utf-8">
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<script type="text/javascript" src="js/admin.js"></script>
		<title>管理中心</title>		
	</head>
	<body style="height: 100%;overflow: hidden;">		
		<nav class="navbar navbar-default" style="margin-bottom: 0;">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <a class="navbar-brand" href="#">网站管理中心</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav" id="searchnav">
			        <li id="btn1"><a href="adduser.php" target="right_content">用户管理</a></li>
			        <li id="btn2"><a href="addproduct.php" target="right_content">商品管理</a></li>
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			        <li class="dropdown">
			          <a href="index.php" class="dropdown-toggle"role="button">返回前台</a>
			        </li>
			        <li class="dropdown">
			          <a href="logout.php" class="dropdown-toggle"role="button">退出登录</a>
			        </li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
		</nav>
		<div class="container-fluid" style="height: 100%;">
			<div class="row" style="height: 100%;">
			    <div class="col-md-1" style="padding: 0;background-color: #f0f0f0;height: 100%;" id="search">

					<ul class="list-group" id="userinfo">
					  <a href="adduser.php" target="right_content"><li class="list-group-item">增添用户</li></a>
					  <a href="deleteuser.php" target="right_content"><li class="list-group-item">删除用户</li></a>
					</ul>

					<ul class="list-group" id="usermess">
					  <a href="addproduct.php" target="right_content"><li class="list-group-item">增添商品</li></a>
					  <a href="deleteproduct.php" target="right_content"><li class="list-group-item">删除商品</li></a>
					</ul>

			    </div>
			    <div class="col-md-11" style="padding: 0;height: 100%;">
			    	<iframe id="rightIframe" src="adduser.php"  width="100%" height="100%" name="right_content" frameborder="0" scrolling="auto"></iframe>
			    </div>
			</div>
		</div>
	</body>
</html>