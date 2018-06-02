<div  class="col-md-2 col-xs-12 bg-menu" >
    <div class="menu collapse navbar-collapse"  id="navbar-1">
        <ul class="nav nav-pills nav-stacked">
            <li class="nav-item active"><a href="index.php" class="nav-link">Ínicio</a></li>
            <li class="nav-item"><a href="#" id="hover" class="nav-link">Regras <span class="caret"></span></a>
                <ul class="dropdown">
                    <li><a href="">Documentacao</a></li>
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

<div class="col-md-10 col-md-offset-2" style="position:fixed">
    <header class="row header">
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
    </header>
    <hr>
        
    <div class="col-md-12" >
        <div> 
            <button type="button" id="cadastrar-projeto" class="btn btn-primary" value="Novo Projeto"><i class="fa fa-plus"> </i> Novo Projeto</button>
            <button type="button" id="print" class="btn btn-success" ><i class="fa fa-check"> </i> Ver Relatório</button>
           
        </div>
            
    </div>

			
</div>
	