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
		<button type="button" class="btn btn-cadastro pull-right" data-toggle="modal" data-target="#formLogin">Novo Usuário</button>
		<div class="gerencia-usuario">
			<table class="table table-hover">
				<thead>
					<tr>
						<td>Código</td>
						<td>Nome</td>
						<td>Sobrenome</td>
						<td>Data Nascimento</td>
						<td>Login</td>
						<td> - </td>
					</tr>
				</thead>
				<tbody>
	<?php
		require_once 'includes/conexao.php';
		$sql = "SELECT * FROM tb_usuario";
		$resultadoDaQuery = mysql_query($sql);
		while ($linha = mysql_fetch_array ( $resultadoDaQuery )) {
			//var_dump($linha);
			$codigo 		= $linha['id_usuario'];
			$nome 			= $linha['nome'];
			$sobrenome 		= $linha['sobrenome'];
			$dataNascimento = $linha['data_nascimento'];
			$login 			= $linha['login'];
			$senha 			= $linha['senha'];

	?>
					<tr>
						<td><?=$codigo?></td>
						<td><?=$nome?></td>
						<td><?=$sobrenome?></td>
						<td><?=$dataNascimento?></td>
						<td><?=$login?></td>
						<td> 
							<a href="alterar.php?id=<?=$codigo?>" title="Alterar">
								<span class="glyphicon glyphicon-edit icone-editar" aria-hidden="true"></span>
							</a>
							|
							<a href="excluir.php?id=<?=$codigo?>" title="Excluir">
								<span class="glyphicon glyphicon-trash icone-excluir" aria-hidden="true"></span>
							</a>
							</td>
					</tr>	
					<?php
						}
					?>
				</tbody>
			</table>
		</div>


	</div>
	<!-- Modal -->
	<div id="formLogin" class="modal fade" role="dialog">
		<div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h4 class="modal-title">Cadastro de Usuário</h4>
				</div>
				<div class="modal-body">
					<form action="salvarusuario.php" method="POST">
						<div class="row"> 
							<div class="form-group col-sm-6">
								<label for="cnome">Nome:</label>
								<input type="text" name="cnome" id="cnome" class="form-control" />	
							</div>
							<div class="form-group col-sm-6">
								<label for="csobrenome">Sobrenome:</label>
								<input type="text" name="csobrenome" id="csobrenome" class="form-control" />	
							</div>
						</div>
						<div class="row"> 
							<div class="form-group col-sm-4">
								<label for="cdata">Data Nascimento:</label>
								<input type="date" name="cdata" id="cdata" class="form-control" />	
							</div>
							<div class="form-group col-sm-4">
								<label for="clogin">Login:</label>
								<input type="text" name="clogin" id="clogin" class="form-control" />	
							</div>
							<div class="form-group col-sm-4">
								<label for="csenha">Senha:</label>
								<input type="password" name="csenha" id="csenha" class="form-control" />	
							</div>
						</div>
						<input type="submit" name="enviar" value="Enviar" class="btn btn-block btn-success">
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				</div>
		    </div>

	  	</div>
	</div>



	<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>