<?php
	if(isset($_SESSION['id'])){
		$sql99 = "SELECT * from admin WHERE id='{$_SESSION['id']}'";
		$mysqli_result99 = $mysqli->query($sql99);
		$name = $mysqli_result99->fetch_array(MYSQLI_ASSOC);
	}
?>