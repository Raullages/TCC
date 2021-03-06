<?php
// include ('../conexao/conexao.php');
// $resultado = $conexao->query("SELECT * FROM projeto");
    
// while($row = $resultado->fetch_array()){
// 				$layer_lote = $row['layer']."<br>";
// 				$length_lote = $row['length']."<br>";
// 				$area_lote = $row['area']."<br>";
				
// 				$areaCorreta = (int) $area_lote;
// 				$areaLote = $areaCorreta/10000;

// 				$areaCorrigida = number_format($areaLote, 2);

$resultado = $conexao->query("SELECT * FROM dadosrelatorios d, projeto p WHERE p.layer = 'Loteamento' or p.layer = 'CadastroCP' or p.layer = 'Edificacao' ");
$row = mysqli_num_rows($resultado);
    
    if ($row > 0){
            while($row = mysqli_fetch_array($resultado))
            {
                $nome_proj = $row['nomeRelatorio'];
                $layer = $row['layer'];
                $length = $row['length'];
                $area = $row['area'];
                $iptu = $row['iptu'];
                $zoneamento = $row['zoneamento'];
                $afast_latEsq = $row['afastamento_lateral_esq'];
                $afast_latDir = $row['afastamento_lateral_dir'];
                $afast_fundos = $row['afastamento_fundos'];
                $afast_frente = $row['afastamento_frontal'];
                $alt_maxima = $row['altura_maxima'];



?>


    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">

    <div class="tabela-cadastro col-xs-12 table-responsive">
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <th class="text-center" style="background-color: #fafafa;">DADOS DO LOTE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <table class="table table-bordered table-condensed">
                            <thead>
                                <tr>
                                    <th  style="background-color: #297ab7; color: #fff">Nome Projeto:</th>
                                    <th  style="background-color: #297ab7; color: #fff">Zoneamento:</th>
                                    <th  style="background-color: #297ab7; color: #fff">Indice Cadastral</th>
                                    <th  style="background-color: #297ab7; color: #fff">Área do lote (CP)</th>
                                    <th style="background-color: #297ab7; color: #fff" >Área do lote (REAL)</th>                                
                               </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td ><?php echo $nome_proj ?></td>
                                    <td ><?php echo $zoneamento ?></td>
                                    <td ><?php echo $zoneamento ?></td>
                                    <td><?php echo $zoneamento ?></td>     
                                    <td><?php echo $zoneamento ?></td>
                                    
                                    <!-- <td colspan="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora laboriosam tenetur esse dolorem. Asperiores recusandae voluptates ipsa assumenda illum. Ad, vero laborum. Earum veniam quam quo et doloribus. Ipsa, asperiores!</td> -->
                                </tr>
                                
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
                    
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <th colspan="9" class="text-center"  style="background-color: #fafafa;">ESPECIFICIDADES DO PROJETO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <table class="table table-bordered table-condensed">
                            <thead >
                                <tr>
                                    <th colspan="4" style="background-color: #297ab7; color: #fff">AFASTAMENTOS</th>                            
                                </tr>
                                <tr>
                                    <th>Descrição</th>
                                    <th>Projeto</th>
                                    <th>Permitido</th>
                                    <th>Status</th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                <tr >
                                    <td>Afastamento lateral 01</td>
                                    <td>220cm</td>
                                    <td>150cm</td>
                                    <td class="text-center sucesso">
                                        <i class="fas fa-check-circle fa-lg" style="color: green; margin-top: 5%;"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    
                    <td>
                        <table class="table table-bordered table-condensed">
                            <thead>
                                <tr>
                                    <th colspan="4" style="background-color: #297ab7; color: #fff">ALTURA MÁXIMA</th>  
                                                               
                                </tr>
                                <tr>
                                    <th>Descrição</th>
                                    <th colspan="">Projeto</th>  
                                    <th colspan="">Permitido</th>                          
                                    <th colspan="">Status</th>                          
                                    
                                </tr>
                                
                            </thead>
                            <tbody>
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
                                
                            </tbody>
                        
                        </table>
                    </td>
                    
                   
                </tr>
            </tbody>
            <tbody>
            <td>
                <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th colspan="4" style="background-color: #297ab7; color: #fff">ÁREA PERMEÁVEL</th>
                    </tr>
                    <tr>
                        <th>Descrição</th>
                        <th colspan="">Projeto</th>  
                        <th colspan="">Permitido</th>                          
                        <th colspan="">Status</th>                          
                        
                    </tr>
                </thead>
                <tbody>
                    <tr >
                        <td>Altura máxima projeto</td>
                        <td></td>
                        <td>1150cm</td>
                        <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                    </tr>
                
                </tbody>
                </table>
            
            </td>
            </tbody>
        </table>
    </div>
            <?php } ?>
    
                   