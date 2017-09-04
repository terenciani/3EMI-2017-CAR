<?php
		$USUARIO='root';
		$SENHA='';
		
		$NOME_BANCO = 'bd_cars';
		$ENDERECO_BANCO = 'localhost';

		$conexao = mysql_connect($ENDERECO_BANCO, $USUARIO, $SENHA);

		if(!$conexao){
			echo "Não foi possível conectar ao servidor";
			exit;
		}

		$banco = mysql_select_db($NOME_BANCO, $conexao) or die ("Não foi possível conectar ao banco de dados");
?>

