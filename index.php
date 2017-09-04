<?php
	require_once 'includes/conexao.php';
?>
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
			if(isset($_GET['erroc'])){
				$msg=$_GET['msg'];
				if ($_GET['erroc']=='false'){
					echo "<div class='alert alert-success fade in' role='alert'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					$msg</div>";
				}else{
					echo "<div class='alert alert-danger fade in' role='alert'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					$msg</div>";
				}
			}
			
		?>
		<button type="button" class="btn btn-cadastro pull-right" data-toggle="modal" data-target="#formLogin">Cadastre-se</button>

		<div class="login-centro">
			<form method="GET" action="login.php">

				<div class="form-group">
					<label for="login" class="lb-pessoal">Login</label>
					<input type="text" name="login" id="login" placeholder="Digite o seu login" class="form-control" />
				</div>
				<div class="form-group">
					<label for="senha" class="lb-pessoal">Senha</label>
					<input type="password" name="senha" id="senha" placeholder="Digite a sua senha" class="form-control" />
				</div>
				<div class="form-group">

				</div>
				<input type="submit" name="btn-enviar" value="Login" class="btn btn-block btn-success btn-login"/>
			</form>
		</div>
	</div><!--Final do Container-->
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