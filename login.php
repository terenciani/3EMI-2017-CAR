<?php
	require_once 'includes/conexao.php';

	session_start();

	$login = $_GET['login'];
	$senha = $_GET['senha'];

	$sql = "SELECT * FROM tb_usuario WHERE login='$login' AND senha='$senha'";
	
	$resultadoQuery = mysql_query($sql);
	if (mysql_num_rows($resultadoQuery) > 0){
		$linhaBanco = mysql_fetch_array($resultadoQuery);
		$_SESSION['darkking']  = $linhaBanco['nome'];
		$_SESSION['login']  = $linhaBanco['login'];
		//var_dump($linhaBanco);
		//var_dump($_SESSION);
		header("Location: inicio.php");
	}
	/*
	if(empty($resultadoFinal)){
		header("Location: index.php");
	}else{

		
	}
	*/	
?>