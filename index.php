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
	<title>Análise de Projetos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="icon" href="" type="imagem/jpg"> -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
	<!-- <link rel="stylesheet" href="css/smartphones.css"> -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
</head>
<body>

<!-- background preto quando 'Cadastrar projeto' for acionado  -->
<div class="bg-body"></div>
<!-- tela de loading  -->
<div class="container-fluid carregando"><img src="img/loading-bar.gif" alt="carregando..."></div>

<!-- Menu Lateral fixo  -->
<div class="row-fluid" style="">
	<?php require('header/header.php') ?>

<!-- Modal de cadastro de projetos  -->
	<?php require('modal/modal.php')?>
	<?php require('modal/relatorio-modal.php') ?>

	

</div>

<!-- Scripts javascript  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/efeitos.js"></script>
<script type="text/javascript" src="js/jquery.mask.min.js"></script>
<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
</body>
</html>
