<?php
	//session缓存
	session_start();
	$_SESSION['id'] = null;
	header("Location:index.php");

?> 