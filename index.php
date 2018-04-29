<?php

include('./conexao/conexao.php');
require_once("validando_sessao.php");
	if(isset($_GET['sair'])){
		session_destroy();
		header("Location: index1.php");
	}



?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Tcc</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="icon" href="" type="imagem/jpg"> -->

	<!-- Bootstrap CSS -->
	<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"> -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/smartphones.css">


	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


</head>
<body>

<div class="container-fluid carregando" >
	<!-- <h4>Carregando...</h4> -->
	<img src="img/loading-bar.gif" alt="carregando...">
</div>

	<header class="header">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1" aria-expanded="false">
		          <span class="sr-only">Menu</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
	      </button>

					<a href="index.php" class="navbar-brand">Análise de Projetos Arquitetônicos</a>

			</div>
			<div class="sair">
				<a href="?sair">
					<span class="glyphicon glyphicon-log-out" aria-hidden="true" title="Sair"></span>
					<texto><?php echo $_SESSION['nome_usuario'] ?></texto>
				</a>

			</div>
		</div>
	</header>


<div class="container-fluid">
	<div class="col-md-2">

		<div  class="col-md-2 col-xs-12 bg-menu" >
			<div class="menu collapse navbar-collapse"  id="navbar-1">
				<ul class="nav nav-pills nav-stacked">
					<li class="nav-item active"><a href="index.php" class="nav-link">Ínicio</a></li>
					<li class="nav-item"><a href="#" id="hover" class="nav-link">Regras <span class="caret"></span></a>
						<ul class="dropdown">
							<li><a href="Documentacao.php">Documentacao</a></li>
							<li><a href="" id="data-extration">Data Extraction</a></li>
						</ul>
					</li>
					<li class="nav-item"><a href="" class="nav-link">Legislação</a></li>
					<li class="nav-item"><a href="" class="nav-link">Agradecimentos</a></li>
				</ul>
			</div>
			<div class="col-md-2 col-xs-12 direitos">
				<p>Todos os direitos reservados á Raul Lages e Daniel Pereira</p>
			</div>
		</div>
	</div>

	<div class="col-md-7 col-xs-12 informacoes">
		<div class="col-md-12" style="margin-top: 30px;">
			<a href="#" id="cadastrar-projeto" class="btn btn-primary">Novo Projeto</a>
			<a href="#" class="btn btn-danger">Excluir Projeto</a>
		</div>
		<hr class="col-md-12">

				<div class="col-md-4">
					<div class="panel panel-default">
						
					</div>
				</div>


	</div>
	<!--  Novo Projeto-->
	<div class="col-md-3 col-xs-12">
			<div class="bg-principal">
					<div class="col-md-2 fechar">
						<a href="#" id="fechar-projeto">x</a>
					</div>
				<div class="form-group col-xs-12 col-md-12">
						<h4>Novo Projeto</h4>
						<input type="file" id="abrir-csv" class="btn btn-default col-xs-12"   data-toggle="tooltip" data-placement="top" title="Anexar o arquivo .csv do data extraction">
						<input type="submit" value="Enviar" id="enviar" class="btn btn-success col-xs-12">
				</div>
		</div>
	</div>


</div>
<!-- fim da div  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/efeitos.js"></script>
<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
</body>
</html>
