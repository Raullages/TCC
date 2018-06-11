<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Lei 9959</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/Logo1.png" type="imagem/jpg">

	<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"> -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/documentacao.css">
	<link rel="stylesheet" href="css/smartphones.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


</head>
<body>


	<header class="header">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
		           			<span class="sr-only">Menu</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
	            </button>

					<a href="index.php" class="navbar-brand">Análise de Projetos Arquitetônicos</a>
			</div>
		</div>
	</header>


<div class="container-fluid">
	<div class="col-md-2 ">

		<div  class="col-md-2 col-xs-12 bg-menu" >
			<div class="menu collapse navbar-collapse"  id="navbar-1">
				<ul class="nav nav-pills nav-stacked">
					<li class="nav-item"><a href="index.php" class="nav-link">Ínicio</a></li>
					<li class="nav-item active"><a href="#" id="hover" class="nav-link">Informação <span class="caret"></span></a>
						<ul class="dropdown drop">
							<li class="nav-item"><a class="nav-link" href="#documentacao" id="documentacao-1">Documentacao</a></li>

							<li class="nav-item active"><a class="nav-link" href="#data-extration" id="extration">Data Extraction</a></li>
						</ul>
					</li>
					<li class="nav-item"><a href="" class="nav-link">Legislação</a></li>
					<li class="nav-item"><a href="" class="nav-link">Agradecimentos</a></li>
				</ul>
			</div>
		</div>

		<div class="col-md-2 direitos">
			<p>Todos os direitos reservados á Raul Lages e Daniel Pereira</p>
		</div>


	</div>

	<div class="col-md-10" id="documentacao">
		<div class="documentacao">
		<h3>Documentação</h3>
			<div class="col-md-6">
				<p>Para o funcionamento do Sistema de Análise de projeto arquitetônico, de acordo com as leis vigentes do município, será preciso criar, pelo profissional, algumas layers no desenho para referenciar parâmetros que identifique as informações necessárias do projeto. </p>
					<ol>
						<strong>
						<li>O desenho que será analisado, deverá ser exclusivamente a 'Planta Situação', e deverá estar na escala 1:50</li><br>
						<li>Os desenhos cujo as layers são ‘Loteamento’, ‘CadastroCP’ e ‘Edificação’, deverão
						 estar obrigatoriamente em Polyline.</li><br>
						<li>As cotas das layers ‘_cp’ e ‘_real’, não poderá ser editado na tela de propriedades, aba Text, parâmetro Text override.</li>
					</strong>
					</ol>

			<p>Baixe aqui o arquivo que criará automaticamente as layers
				<strong>
					<a class="btn btn-success" href="https://drive.google.com/uc?authuser=0&id=15yO6kJi-b9PB-b7kFnS0XC36EfGVkaAI&export=download">
						Download
					</a>
				</strong>
			</p>

				<p>Passo a Passo de como criar as layers:</p>
					<ol>
						<li>Digite no painel de comandos do AutoCad 'NETLOAD' + 'ENTER'</li>
						<li>Novamente no painel de comandos, Digite 'CRIARLAYERS' + 'ENTER'</li>
						<li>Escolha o arquivo baixado e Enter novamente</li>
					</ol>
			</div>

			<div class="col-md-6">
				<h5>Segue as layers que são criadas automaticamente:</h5>
				<img src="img/layers.png" alt="">
				<!-- <table class="table table-striped">
						<tr>
							<th>Nome Layer</th>
							<th>Cor</th>
							<th>Tipo</th>
						</tr>
						<tr><td>Loteamento</td><td>Yellow</td><td></td></tr>
						<tr><td>CadastroCP</td><td>Red</td><td>Tracejado</td></tr>
						<tr><td>Edificação</td><td>Green</td><td></td></tr>
						<tr><td>Cota_lateral_cp_1</td><td>Red</td> <td></td></tr>
						<tr><td>Cota_lateral_cp_2</td><td>Red</td><td></td></tr>
						<tr><td>Cota_lateral_cp_3</td><td>Red</td><td></td></tr>
						<tr><td>Cota_lateral_cp_4</td><td>Red</td><td></td></tr>
						<tr><td>Cota_frontal_cp_1</td><td>Red</td><td></td></tr>
						<tr><td>Cota_frontal_cp_2</td><td>Red</td><td></td></tr>
						<tr><td>Cota_fundos_cp_3</td><td>Red</td><td></td></tr>
						<tr><td>Cota_fundos_cp_4</td><td>Red</td><td></td></tr>
						<tr><td>Cota_lateral_real_1</td><td>Red</td><td></td> </tr>
						<tr><td>Cota_lateral_real_2</td><td>Red</td><td></td></tr>
						<tr><td>Cota_lateral_real_3</td><td>Red</td><td></td></tr>
						<tr><td>Cota_lateral_real_4</td><td>Red</td><td></td></tr>
						<tr><td>Cota_frontal_real_1</td><td>Red</td><td></td></tr>
						<tr><td>Cota_frontal_real_2</td><td>Red</td><td></td></tr>
						<tr><td>Cota_fundos_real_3</td><td>Red</td><td></td></tr>
						<tr><td>Cota_fundos_real_4</td><td>Red</td><td></td></tr>

						</table> -->

			</div>
		</div>

	<hr class="container-fluid" id="data-extration">

	<div class="data-extractor" >
		<h3>Usando o Data Extraction</h3>
			<div class="col-md-6 imagem-data">
				<img src="img/data.jpg" alt="data-extraction">
				<p>Page 1-8: Use o comando 'dataextraction' e depois 'Next', salve o arquivo em um local de fácil acesso no seu computador</p>
			</div>
			<div class="col-md-6 select-obj">
				<img src="img/select-obj.jpg" alt="selecao-de-objetos">
				<p>Page 2-8: Selecione 'Select Objects in the current drawing' e clique no ícone ao lado. Depois de selecionar o desenho clique em 'Next'</p>
			</div>
			<div class="col-md-6 select-obj">
				<img src="img/objetos.jpg" alt="selecao-de-objetos">
				<p>Page 3-8: Em 'Display options' demarque a opção 'Display all objects types' e selecione a segunda opção 'Display non-blocs only', e depois clique em 'Next'</p>
			</div>
			<div class="col-md-6 select-obj">
				<img src="img/propriedade.jpg" alt="selecao-de-objetos">
				<p>Page 4-8: Nesta tela na aba 'Category filter' deixe marcada apenas as opções 'General' - 'Geometry' - 'Misc', e depois clique em 'Next'</p>
			</div>
			<div class="col-md-6 select-obj">
				<img src="img/refine-data.jpg" alt="selecao-de-objetos">
				<p>Page 5-8: Nesta tela desmarque apenas a opção 'Combine identical rows' e depois clique em 'Next'</p>
			</div>
			<div class="col-md-6 select-obj">
				<img src="img/output.jpg" alt="selecao-de-objetos">
				<p>Page 6-8: Selecione a segunda opção e clique no ícone com '...', escolha o local para salvar o arquivo e na opção 'Files of Type', escolha o tipo de arquivo '.csv', clique em 'Next' e depois 'Finish'</p>
			</div>

			<hr class="container-fluid">


	</div>

	</div>
</div>
<!-- fim da div  -->








<!-- Bibliotecas javascript -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/efeitos.js"></script>
<script type="text/javascript" src="animatescroll/animatescroll.js"></script>
 </body>
</html>
