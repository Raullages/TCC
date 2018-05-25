
<div class="col-md-10 col-xs-12 bg-principal">
	<form method="GET"  id="form">
		<div class="header-relatorio">
        	<h4>CADASTRO PROJETOS</h4>
			<button type="button" id="close" class="btn fechar" style=""><i class="fas fa-times"></i></button>
    	</div>
		<div class="container-fluid info-zoneamento">
			<h4>Informacoes</h4>
			<hr>
			<div class="col-md-5">
				<span>Nome Projeto:</span>
				<input type="text" name="nome" class="form-control" required>
			</div>

			<div class="col-md-4">
				<span>IPTU:</span>
				<input type="text" class="form-control" id="iptu" name="iptu" required>
			</div>
			
			<div class=" col-md-3">
				<span>Zoneamento</span>
				<select name="zoneamento" id="" class="form-control" required>
					<option value="zur1">ZUR 1</option>
					<option value="zur2">ZUR 2</option>
					<option value="zur3">ZUR 3</option>
				</select>
			</div>	 
		</div>
		
		<div class="container-fluid dados-projeto">
			<h4>Informacoes do Projeto</h4>
			<hr>
			<div class="col-md-2" style="">
				<span>Possui Afastamento laterais e de fundos <i style="color: red">*</i></span>
				<select name="conf-afastamento" id="conf-afast" class="form-control" required>
					<option value="sim">Sim</option>
					<option value="nao">Não</option>
					
				</select>
			</div>
			<div class="col-md-2">
				<span>Menor cota lateral direita <i style="color: red">*</i> (cm)</span>
				<input type="text" class="form-control"  name="afastamento_lateral_dir" required>
			</div>
			<div class="col-md-2">
				<span>Menor cota lateral esquerda <i style="color: red">*</i> (cm)</span>
				<input type="text" class="form-control" id="cotas" name="afastamento_lateral_esq" required>
			</div>
			<div class="col-md-2">
				<span>Menor cota fundos <i style="color: red">*</i> (cm)</span>
				<input type="text" class="form-control"  name="afastamento_fundos" required>
			</div>
			<div class="col-md-2">
				<span>Menor cota frontal <i style="color: red">*</i> (cm)</span>
				<input type="text" class="form-control" name="afastamento_frontal" required>
			</div>
			<div class="col-md-2" style="margin-top: 40px;">
				<span>Altura máxima <i style="color: red">*</i> (cm)</span>
				<input type="text" class="form-control" name="altura-maxima" required>
		
			</div>
		
		</div>
		
		<hr>
		<div >
			<h4>Anexar arquivo CSV extraido do AutoCad</h4>
			<div class="col-md-4 col-md-offset-4" style="margin-top: 30px;">
			<input type="file" class="form-control" id="abrir-csv">
			<input type="submit" class="btn btn-success" id="gerar-relatorio" value="Gerar Relatório" style="width: 100%; margin-top: 20px; height:40px; border: 0;">
			</div>
		</div>
		</form>
		
	</div>