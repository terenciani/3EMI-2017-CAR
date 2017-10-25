<?php require_once 'includes/protege.php';	?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/ico" href="img/favicon.ico" />
	<title>Marcelinho d'Ouro</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
</head>
<body>
	<div class="container">

<?php 
	require_once 'includes/conexao.php';
	
	if (isset($_GET['id'])){
		$id = $_GET['id'];

		$sql = "SELECT * FROM tb_usuario WHERE id_usuario=$id";

		$resultadoQuery = mysql_query($sql);
		$linha = mysql_fetch_array( $resultadoQuery);
		
		//var_dump($linha);

		$codigo 		= $linha['id_usuario'];
		$nome 			= $linha['nome'];
		$sobrenome 		= $linha['sobrenome'];
		$dataNascimento = $linha['data_nascimento'];
		$login 			= $linha['login'];
		$senha 			= $linha['senha'];
	}
?>
<input type="text" name="codigo" value="<?=$codigo?>">
<input type="text" name="codigo" value="<?=$nome?>">
<input type="text" name="codigo" value="<?=$sobrenome?>">
<input type="date" name="codigo" value="<?=$dataNascimento?>">
<input type="text" name="codigo" value="<?=$login?>">
<input type="password" name="codigo" value="<?=$senha?>">