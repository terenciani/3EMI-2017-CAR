<?php
	session_start();
		
	if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['nome']) == true)){
		unset($_SESSION['login']);
		unset($_SESSION['nome']);
		header('location:index.php');
	}
	$logado = $_SESSION['nome'];
?>