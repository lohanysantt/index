<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 offset-lg-4 mt-5">
				<div class="card bg-light">
					<div class="card-body">
						<h5 class="card-title">Acesso Restrito</h5>
						<?php
						

						?>
						<form action="verificar.php" method="POST">
							<div class="mb-3">
								<input type="email" name="email" class="form-control" placeholder="E-mail">
							</div>
							<div class="mb-3">
								<input type="password" name="senha" placeholder="Senha" class="form-control">
							</div>
							<div class="mb-3">
								<a href="alterar.php">Esqueceu a senha?</a>
							</div>
							<div class="mb-3">
								<button type="submit" class="btn btn-success">Acesso</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<!-- <div class="container">
		<div class="row">
			<div class="col mt-5">
				<?php
					//conexão com banco de dados
					include("config.php");

					//include das páginas
					switch (@$_REQUEST['page']) {
						case 'alterar':
							include('alterar.php');
							break;					
						default:
							print "<h1>Bem vindo ao clube!</h1>";
					}
				?>
			</div>
		</div>
	</div> -->
	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>