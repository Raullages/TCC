<?php 
require('./conexao/conexao.php');

$result = $conexao->query("SELECT * FROM dadosrelatorios WHERE nomeResp = '".$_SESSION['nome_usuario']."'");
$linha = mysqli_num_rows($result);

?>
<div class="col-xs-12" >
    <div class="col-xs-12 cabecalho" >
        <div class="col-md-3" >
            <p>Nome Resp</p>
        </div>
        <div class="col-md-2" >
            <p>IPTU</p>
        </div>
        <div class="col-md-2" >
            <p>Zoneamento</p>
        </div>
        <div class="col-md-2" >
            <p>Uso</p>
        </div>
        <div class="col-md-1" >
            <p>Status</p>
        </div>
        <div class="col-md-1" >
            <p>Visualizar</p>
        </div>
        <div class="col-md-1" >
            <p>Download</p>
        </div>
    </div>
    <?php  if ($linha > 0){
        while($linha = mysqli_fetch_array($result)) {   ?>
            <div class="col-xs-12 corpo-tabela" id="<?php echo $linha['idRelatorio'] ?>">
                <div class="col-md-3" >
                    <p><?php echo $linha['nomeRelatorio']; ?></p>
                </div>
                <div class="col-md-2" >
                    <p><?php echo $linha['iptu']; ?></p>
                </div>
                <div class="col-md-2" >
                    <p><?php echo $linha['zoneamento']; ?></p>
                </div>
                <div class="col-md-2" >
                    <p><?php echo $linha['uso']; ?></p>
                </div>
                <div class="col-md-1" >
                    <p>tesste</p>
                </div>
                <div class="col-md-1" >
                    <p>teset</p>
                </div>
                <div class="col-md-1" >
                    <p>tesets</p>
                </div>
            </div>
            
    <?php } ?>


</div>

    <div id="corpo-info">
        <div class="col-md-4 animated fadeInDown mostrar">
            
        </div>
    </div>
    <?php } ?>
<style type="text/css">
    .cabecalho{
        border: 0.5px solid #eee;
        cursor: default;
        background: #fff;
    }
    .cabecalho div p{
        text-align: center;
        margin: 2px;
    }
    .corpo-tabela{
        border: 0.5px solid #eee;
        cursor: default;
        background-color: #fff;
        padding: 5px;
    }
    .corpo-tabela:hover{
        background-color: #ddd;
    }
    .corpo-tabela div p{
        text-align: left;
        margin: 2px;
    }
    #corpo-info div{
        display: none;
        height: 100%;
        position: fixed;
        border: 1px solid #eee;
        cursor: default;
        background-color: #f9f9f9;
        margin-top: -155px;
        left: 67%;
        box-shadow: 0px 4px 15px black;
    }
</style>