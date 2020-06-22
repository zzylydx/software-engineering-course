<?php
	//session缓存
	session_start();
	//连接数据库
	include ('mysql.php');
	//获取用户信息
	include ('getadmin.php');

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>联系我们</title>
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
<!--contact start here-->
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-top">
				<h1>联系我们</h1>
				<p>用心极致，只为更好的服务！</p>
			</div>
			<div class="col-md-6 contact-left">
				<h2>信息</h2>
				
			    <ul>
			    	<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"> </span>浙江工商大学</li>
			    	<li><span class="glyphicon glyphicon-phone" aria-hidden="true"> </span>159 5050 5050</li>			    	
			    	<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"> </span><a href="mailto:info@example.com">@example.com</a></li>
			    </ul>
			</div>
			<div class="col-md-6 contact-right">
				<h3>反馈</h3>
			<form>
				<input type="text" placeholder="姓名" required="">
				<input type="text" placeholder="邮箱" required="">
				<textarea placeholder="内容" required=""></textarea>
				<input type="submit" value="发送">
			</form>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--contact end here-->
<!--map start here-->


<!--footer strat here-->
<?php 
	include('footer.php');
?>
<!--footer end here-->
</body>
</html>