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

    
    
<div class="row table-responsive" id="relatorio" style="margin-top: 30px; background-color: #FFFFFF;border:1px solid #f8f8f8; padding:;">
    <div class="header-relatorio">
        <h4>Cadastro de Projetos</h4>
		<button type="button" id="close" class="btn btn-default" style="">&times;</button>
    </div>

    <table class="table table-bordered table-condensed" style="margin-top: 40px;">
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

.header-relatorio{
    padding: 10px;
    background-color: #397ab7;
    border: 0px;
}
.header-relatorio{
    color: #fff;
}
.header-relatorio #close{
    position: absolute;
    margin-top:-37px;
    background-color: #397ab7;
    color: #fff;
    margin-left: 95%; 
    border: 1px solid #f0f0f0;
}
/* Relatório */
.tabela-cadastro, th, td{
	font-size: 14px;
	padding: 0px;
	text-transform: capitalize;
}
#relatorio{
	z-index: 999999;
	position: fixed;
	width: 1100px;
	height: 662px;
	background-color: #fff;
	box-shadow: 0px 3px 14px black;
	top: -30px;
	left: 50%;
	margin-left: -550px;
	overflow-y: auto;
    padding: 0px;
    display: none;
}
.footer{
    background-color: #d2d2d2;
    width: 100%;
    color: #fff;
    position: relative;
    bottom: 0px;
    padding: 10px;
}
    </style>
    
   
                    
                        
                   
                   
           
    
                   