<?php 
	require_once 'includes/conexao.php';
	
	if (isset($_GET['id'])){
		$id = $_GET['id'];

		$sql = "DELETE FROM tb_usuario WHERE id_usuario=$id";

		$resultadoQuery = mysql_query($sql);

		if($resultadoQuery){
			header("Location: gerencia-usuario.php");
		}else{
			echo "ERRO";
		}

	}

?>