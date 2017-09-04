<?php 
	require_once 'includes/conexao.php';

	$cnome = $_POST['cnome'];
	$csobrenome = $_POST['csobrenome'];
	$clogin = $_POST['clogin'];
	$csenha = $_POST['csenha'];
	$cdata = $_POST['cdata'];

	$sql ="SELECT * FROM tb_usuario WHERE login='$clogin'";
	$resultadoQuery = mysql_query($sql);

	$resultadoFinal = mysql_fetch_assoc($resultadoQuery);

	if(empty($resultadoFinal)){
		
		$sql = "INSERT INTO tb_usuario (nome, sobrenome, login, senha, data_nascimento) values ('$cnome', '$csobrenome', '$clogin', '$csenha', '$cdata')";
		
		$resultadoQuery = mysql_query($sql);
		if(mysql_errno()){
			echo mysql_errno() . ": " . mysql_error() . "\n";
			header('Location: index.php?erroc=true&msg=Erro ao realizar o cadastro!');
		}else{
			header('Location: index.php?erroc=false&msg=Cadastro Realizado com sucesso!');
		}
	}else{
		header('Location: index.php?erroc=true&msg=Login já existente!');
	}
?>