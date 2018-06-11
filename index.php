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
<<<<<<< HEAD
	<!-- <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" crossorigin="anonymous"></script> -->
	<link href="./fontawesome/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">


	<!-- <link rel="stylesheet" href="css/smartphones.css"> -->
	<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script> -->
=======
	<!-- <link rel="stylesheet" href="css/smartphones.css"> -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
>>>>>>> 8ea6609d8cb6c77e3128e4913bf519481d304e53
</head>
<body>

<!-- background preto quando 'Cadastrar projeto' for acionado  -->
<div class="bg-body"></div>
<!-- tela de loading  -->
<div class="container-fluid carregando">
	<img src="img/loading-bar.gif" alt="carregando...">
</div>

<!-- Menu Lateral fixo  -->
<div class="row-fluid" style="">
	<?php require('header/header.php') ?>

	<!-- Modal de cadastro de projetos  -->
	<?php require('modal/modal.php')?>
<<<<<<< HEAD
=======
	<?php require('modal/relatorio-modal.php') ?>
>>>>>>> 8ea6609d8cb6c77e3128e4913bf519481d304e53

	<!-- Modal de exibição do relatorio -->
	<?php require('modal/relatorio-modal.php') ?>
	<!-- tabela selects -->
	

</div>

<!-- Scripts javascript  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"  crossorigin="anonymous"></script>

<script defer src="./fontawesome/fontawesome-free-5.0.13/svg-with-js/js/fontawesome-all.min.js" crossorigin="anonymous"></script>
	

<script type="text/javascript" src="js/efeitos.js"></script>
<script type="text/javascript" src="js/jquery.mask.min.js"></script>
<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
</body>
</html>
