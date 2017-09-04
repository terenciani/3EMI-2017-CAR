<?php
	require_once 'includes/conexao.php';
	$login = $_GET['login'];
	$senha = $_GET['senha'];

	$sql = "SELECT * FROM tb_usuario WHERE login='$login' AND senha='$senha'";
	
	$resultadoQuery = mysql_query($sql);
	
	$resultadoFinal = mysql_fetch_assoc($resultadoQuery);
	
	
	if(empty($resultadoFinal)){
		header("Location: index.php");
	}else{
		header("Location: inicio.php");
	}	
?>