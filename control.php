<?php
	session_start();
	$_SESSION['user'] = "humano";
	header("Location:index.php");
?>