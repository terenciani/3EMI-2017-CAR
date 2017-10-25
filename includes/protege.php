<?php
	session_start();
		
	if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['usuario']) == true)){
		unset($_SESSION['login']);
		unset($_SESSION['usuario']);
		header('location:index.php');
	}
	$logado = $_SESSION['usuario'];
?>