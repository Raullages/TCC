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
//  ?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
<link rel="stylesheet" href="../css/estilo.css">

    
    
<div class="row table-responsive" id="relatorio" style="; background-color: #FFFFFF; padding:;">
    <div class="header-relatorio">
        <h4>Relatório</h4>
		<button type="button" id="close" class="btn fechar" style=""><i class="fas fa-times"></i></button>
    </div>

    <table class="table table-bordered table-condensed" style="margin-top: 8px;">
            <thead>
                <tr>
                    <th class="text-center" style="background-color: #d2d2d2; color: #444; ">DADOS DO LOTE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th  >Nome Projeto:</th>
                                    <th  >Zoneamento:</th>
                                    <th  >Indice Cadastral</th>
                                    <th  >Área do lote (CP)</th>
                                    <th  >Área do lote (REAL)</th>                                
                               </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td >RAUL LAGES</td>
                                    <td >ZUR 1</td>
                                    <td >1293891830182903 </td>
                                    <td>275.00</td>     
                                    <td>275.00</td>
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
                    <th colspan="9" class="text-center"  style="background-color: #d2d2d2; color: #444;">ESPECIFICIDADES DO PROJETO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    
                    <td>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th colspan="4" style="background-color: #f9f9f9;">ITENS REPROVADOS</th>  
                                                               
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
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
                                <tr >
                                    <td>Altura máxima projeto</td>
                                    <td></td>
                                    <td>1150cm</td>
                                    <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                </tr>
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
        
        </table>
        <div class="footer">
            <span>Imprimir relatório: </span><input type="button" class="btn btn-success" value="Baixar arquivo">
        </div>
    </div>
    <style>

    </style>
    
   
                    
                        
                   
                   
           
    
                   