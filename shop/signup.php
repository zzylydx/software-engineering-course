
<!DOCTYPE HTML>
<html>
<head>
<title>Sign up</title>
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
<!--sign in start here-->
<div class="signin">
	<div class="container">
		<div class="signin-main">
			<h1>登录</h1>
			<h2>信息</h2>
			<form action="zhuce.php" method="post">
				<input type="text" placeholder="用户名" name="username" required>
				<input type="text" class="no-margin" placeholder="昵称" name="name" required>
				<input type="password" placeholder="密码" id="mima1" name="password" required=""/>
				<input type="password" class="no-margin" id="mima2" placeholder="确认密码" required=""/>
				<span class="checkbox1">
				 <label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>我同意以上使用和隐私的条款。</label>
			   </span>
				<input type="submit" value="提交" onclick="alert('注册成功')" id="tijiaozc">
			</form>
		</div>
	</div>
</div>
<!--sign in end here-->
<!--footer strat here-->
<?php 
	include('footer.php');
?>
<!--footer end here-->
</body>
</html>
