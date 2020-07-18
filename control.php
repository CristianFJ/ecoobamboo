<?php
	print($_POST['usuario']."<br");
	print($_POST['contraseña']."<br");

	session_start();
	$_SESSION['user'] = $_POST['usuario'];
	$_SESSION['pass'] = $_POST['contraseña'];

	header("Location:index.php")
?>