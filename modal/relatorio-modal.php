<div class="row table-responsive" id="relatorio" style="; background-color: #FFFFFF;">
<?php 
include('./conexao/conexao.php'); 
include('./tabela/index.php'); 

?>
    <div class="header-relatorio">
        <h4>Relatório</h4>
		<button type="button" id="close" class="btn fechar" style=""><i class="fas fa-times"></i></button>
		<button type="button" id="printer" class="btn btn-default" style="float: right; width: 100px;"><i class="fas fa-print"></i></button>
        <div style="clear: both; "></div>
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
                        <table class="table table-condensed table-bordered">
                            <thead>
                                <tr >
                                    <th class="text-center" >Nome Projeto</th>
                                    <th class="text-center">Zoneamento</th>
                                    <th class="text-center">Indice Cadastral</th>
                                    <th class="text-center" >Área da Edificação</th>
                                    <th class="text-center" >Área do lote (REAL)</th>                                
                                    <th class="text-center" >Área do lote (CP)</th>
                               </tr>
                            </thead>
                            <tbody>
                                <tr>
                            <!-- Nome Projeto -->
                                    
                                        <td class="text-center"><?php echo $nome_proj  ?></td>
                                        <td class="text-center"><?php echo $zoneamento ?></td>
                                        <td class="text-center"><?php echo $iptu ?></td>
                            <!-- Area edificação -->
                                        <td class="text-center"><?php echo $area_edificacao ?> m²</td>
                                        <td class="text-center"><?php echo $area_lote_real ?> m²</td>     
                                        <td class="text-center"><?php echo $area_cp ?> m²</t>
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
                        <table class="table table-condensed table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="5" style="background-color: #f0f0f0;">ITENS REPROVADOS</th>  
                                                               
                                </tr>
                                <tr>
                                    <th class="text-center">Descrição</th>
                                    <th colspan="" class="text-center">Medida do projeto</th>  
                                    <th colspan="" class="text-center">
                                        Permitido conforme:<br>
                                       <i style="font-size: 10px; font-weight: initial">(lei nº 079/2009)</i>
                                    </th>                          
                                    <th colspan="" class="text-center">Status</th>                          
                                    <th colspan="" class="text-center">Observação</th>                          
                                    
                                </tr>
                                
                            </thead>
                            <tbody>
                                <!-- Comparação das cotas laterais -->
                                <?php 
                                if($afast_latDir <= $afast_lateral_minimo) { ?>
                                    <tr >
                                        <td class="text-center">Afastamento lateral direita</td>
                                        <td class="text-center"><?php echo $afast_latDir ?> m</td>
                                        <td class="text-center"><?php echo $afast_lateral_minimo ?> m</td>
                                        <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                        <td style="width:50%" class="text-left">Reprovado. De acordo com a lei 079/2009, afastamento lateral é de no minímo <strong><?php echo $afast_lateral_minimo ?> m</strong> e de acordo com o projeto é de: <?php echo $afast_latDir?> m.
                                        <br><i>(Favor considerar a cota lateral apartir da edificação até a projeção do cadastro da prefeitura (CP))</i></td>
                                    </tr>
                                <?php }else if($afast_latDir <= $afast_lateral_minimo) { ?>
                                    <tr>
                                        <td class="text-center">Afastamento lateral direita</td>
                                            <td class="text-center"><?php echo $afast_latDir ?> m</td>
                                            <td class="text-center"><?php echo $afast_lateral_minimo ?> m</td>
                                            <td class="text-center"><i class="fas fa-check fa-lg" style="color: green; margin-top: 5%;"></></td>
                                            <td style="width:50%" class="text-left">Aprovado.  <i>(Favor considerar a cota lateral apartir da edificação até a projeção do cadastro da prefeitura (CP))</i></td>
                                        
                                        </tr>
                                <?php } ?>
                                
                                <!-- Comparação das cotas laterais -->
                                <?php 
                                if($afast_latEsq <= $afast_lateral_minimo) { ?>
                                    <tr >
                                        <td class="text-center">Afastamento lateral esquerda</td>
                                        <td class="text-center"><?php echo $afast_latEsq ?> m</td>
                                        <td class="text-center"><?php echo $afast_lateral_minimo ?> m</td>
                                        <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                        <td style="width:50%" class="text-left">Reprovado. De acordo com a lei 079/2009, afastamento lateral é de no minímo <strong><?php echo $afast_lateral_minimo ?> m</strong> e de acordo com o projeto é de: <?php echo $afast_latEsq?> m.
                                        <i>(Favor considerar a cota lateral apartir da edificação até a projeção do cadastro da prefeitura (CP))</i></td>
                                    </tr>
                                <?php }else { ?>
                                    <tr>
                                    <td class="text-center">Afastamento lateral esquerda</td>
                                        <td class="text-center"><?php echo $afast_latEsq ?> m</td>
                                        <td class="text-center"><?php echo $afast_lateral_minimo ?> m</td>
                                        <td class="text-center"><i class="fas fa-check fa-lg" style="color: green; margin-top: 5%;"></></td>
                                        <td style="width:50%" class="text-left">Aprovado. <i>(Favor considerar a cota lateral apartir da edificação até a projeção do cadastro da prefeitura (CP))</i></td>
                                    
                                    </tr>
                                <?php } ?>
                                    <!-- Afastamento frontal -->
                                <?php 
                                if($afast_frente <= $afast_frontal_minimo) { ?>
                                    <tr >
                                        <td class="text-center">Afastamento frontal</td>
                                        <td class="text-center"><?php echo $afast_frente ?> m</td>
                                        <td class="text-center"><?php echo $afast_frontal_minimo ?> m</td>
                                        <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                        <td style="width:50%" class="text-left">Reprovado. De acordo com a lei 079/2009, afastamento frontal é de no minímo <strong><?php echo $afast_frontal_minimo ?> m</strong> e de acordo com o projeto é de: <?php echo $afast_frente?> m
                                        <i>(Favor considerar a cota frontal apartir da edificação até a projeção do cadastro da prefeitura (CP))</i></td>
                                    </tr>
                                <?php }else { ?>
                                    <tr>
                                    <td class="text-center">Afastamento frontal</td>
                                        <td class="text-center"><?php echo $afast_frente ?> m</td>
                                        <td class="text-center"><?php echo $afast_frontal_minimo ?> m</td>
                                        <td class="text-center"><i class="fas fa-check fa-lg" style="color: green; margin-top: 5%;"></></td>
                                        <td style="width:50%" class="text-left">Aprovado. <i>(Favor considerar a cota frontal apartir da edificação até a projeção do cadastro da prefeitura (CP))</i></td>
                                    
                                    </tr>
                                <?php } ?>
                                <!-- Afastamento fundos -->
                                <?php 
                                if($afast_fundos <= $afast_fundo_minimo) { ?>
                                    <tr >
                                        <td class="text-center">Afastamento fundos</td>
                                        <td class="text-center"><?php echo $afast_fundos ?> m</td>
                                        <td class="text-center"><?php echo $afast_fundo_minimo ?> m</td>
                                        <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                        <td style="width:50%" class="text-left">Reprovado. De acordo com a lei 079/2009, afastamento de fundos é de no minímo <strong><?php echo $afast_fundo_minimo ?> m</strong> e de acordo com o projeto é de: <?php echo $afast_fundos?> m
                                        <i>(Favor considerar a cota dos fundos apartir da edificação até a projeção do cadastro da prefeitura (CP))</i></td>
                                    </tr>
                                <?php }else { ?>
                                    <tr>
                                        <td colspan="" class="text-center">Afastamento fundos</td>
                                        <td class="text-center"><?php echo $afast_fundos ?> m</td>
                                        <td class="text-center"><?php echo $afast_fundo_minimo ?> m</td>
                                        <td class="text-center"><i class="fas fa-check fa-lg" style="color: green; margin-top: 5%;"></></td>
                                        <td style="width:50%" class="text-left">Aprovado. <i>(Favor considerar a cota dos fundos apartir da edificação até a projeção do cadastro da prefeitura (CP))</i></td>
                                    
                                    </tr>
                                <?php } ?>

                                <!-- tx ocupação  -->
                                <?php
                                
                                if($area_edificacao >= $area_permitida) { ?>
                                    <tr >
                                        <td class="text-center">Taxa de Ocupação</td>
                                        <td class="text-center"><?php echo $area_edificacao ?> m²</td>
                                        <td class="text-center"><?php echo $area_permitida ?> m²</td>
                                        <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                        <td style="width:50%" class="text-left">De acordo com a lei 079/2009, a taxa de ocupação é de no minímo <strong><?php echo $area_permitida ?> m²</strong> e de acordo com o projeto é de: <?php echo $area_edificacao?> m². 
                                        <i>(A taxa de ocupação é a projeção da edificação com relação ao lote. Caso a edificação possua dois pavimentos
                                        e a projeção do segundo pavimento seja maior em relação ao primeiro pavimento, favor considerar o perimetro do segundo pavimento.)</i></td>
                                    </tr>
                                <?php }else{ ?>
                                    <tr>
                                        <td colspan="" class="text-center">Taxa de Ocupação</td>
                                        <td class="text-center"><?php echo $area_edificacao ?> m²</td>
                                        <td class="text-center"><?php echo $area_permitida ?> m²</td>
                                        <td class="text-center"><i class="fas fa-check fa-lg" style="color: green; margin-top: 5%;"></></td>
                                        <td style="width:50%" class="text-left">Aprovado. 
                                        <i>(A taxa de ocupação é a projeção da edificação com relação ao lote. Caso a edificação possua dois pavimentos
                                        e a projeção do segundo pavimento seja maior em relação ao primeiro pavimento, favor considerar o perimetro do segundo pavimento.)</i> </td>
                                    
                                    </tr>
                                <?php } ?>

                                <!-- ca de Aproveitamento  -->
                                <?php
                                if($area_edificacao >= $ca_permitido) { ?>
                                    <tr >
                                        <td class="text-center">Coeficiente Aproveitamento</td>
                                        <td class="text-center"><?php echo $area_edificacao ?> m²</td>
                                        <td class="text-center"><?php echo $ca_permitido ?> m²</td>
                                        <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                        <td style="width:50%" class="text-left">De acordo com a lei 079/2009, afastamento de fundos é de no minímo <strong><?php echo $ca_permitido ?> cm</strong> e de acordo com o projeto é de: <?php echo $area_edificacao?> m².
                                        <i>(O coeficiente de aproveitamento é a área máxima que poderá ser construída, nesse caso á área máxima é <?php echo $ca_permitido?> m²)</i> </td>
                                    </tr>
                                <?php }else if($area_edificacao <= $ca_permitido) { ?>
                                    <tr>
                                        <td colspan="" class="text-center">Coeficiente Aproveitamento</td>
                                        <td class="text-center"><?php echo $area_edificacao ?> m²</td>
                                        <td class="text-center"><?php echo $ca_permitido ?> m²</td>
                                        <td class="text-center"><i class="fas fa-check fa-lg" style="color: green; margin-top: 5%;"></></td>
                                        <td style="width:50%" class="text-left">Aprovado <i>(O coeficiente de aproveitamento é a área máxima que poderá ser construída, nesse caso á área máxima é <?php echo $ca_permitido?> m²)</i> </td>
                                    
                                    </tr>
                                <?php } ?>

                                <!-- Altura máxima na dívisa  -->
                                <?php
                                if($alt_maxima >= $altura_maxima) { ?>
                                    <tr >
                                        <td class="text-center">Altura na dívisa</td>
                                        <td class="text-center"><?php echo $alt_maxima ?> m</td>
                                        <td class="text-center"><?php echo $altura_maxima ?> m</td>
                                        <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                        <td style="width:50%" class="text-left">De acordo com a lei 079/2009, a altura máxima na dívisa é de <?php echo $altura_maxima ?>m.</td>
                                    </tr>
                                <?php }else if($alt_maxima <= $altura_maxima) { ?>
                                    <tr>
                                        <td colspan="" class="text-center">Altura na dívisa</td>
                                        <td class="text-center"><?php echo $alt_maxima ?> m</td>
                                        <td class="text-center"><?php echo $altura_maxima ?> m</td>
                                        <td class="text-center"><i class="fas fa-check fa-lg" style="color: green; margin-top: 5%;"></></td>
                                        <td style="width:50%" class="text-left">Aprovado</td>
                                    
                                    </tr>
                                <?php } ?>
                                <!-- Área Permeável  -->
                                <?php
                                // if($taxa_projeto <= $tx_permeavel) { <!-- ? -->
                                if($taxa_projeto <= $tx_permeavel) { ?>
                                    <tr >
                                        <td class="text-center">Área Permeável</td>
                                        <td class="text-center"><?php echo $taxa_projeto ?> m²</td>
                                        <td class="text-center"><?php echo $tx_permeavel ?> m²</td>
                                        <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                        <td style="width:50%" class="text-left">Reprovado. De acordo com a lei 079/2009, a área mínima de permeabilidade é  de: <?php echo $tx_permeavel ?>m².</td>
                                    </tr>
                                <?php }else if($taxa_projeto >= $tx_permeavel) { ?>
                                    <tr>
                                        <td colspan="" class="text-center">Área Permeável</td>
                                        <td class="text-center"><?php echo $taxa_projeto ?> m²</td>
                                        <td class="text-center"><?php echo $tx_permeavel ?> m²</td>
                                        <td class="text-center"><i class="fas fa-check fa-lg" style="color: green; margin-top: 5%;"></></td>
                                        <td style="width:50%" class="text-left">Aprovado</td>
                                    
                                    </tr>
                                <?php } ?>
                                 <!-- Vagas de Garagem  -->
                                 <?php
                                if($vagas_projeto < $_num_vagas) { ?>
                                    <tr >
                                        <td class="text-center">Vagas de Estacionamento</td>
                                        <td class="text-center"><?php echo $vagas_projeto ?> vagas</td>
                                        <td class="text-center"><?php echo $_num_vagas = 1 ?> vagas</td>
                                        <td class="text-center"><i class="fas fa-times-circle fa-lg" style="color: #e00; margin-top: 5%;"></></td>
                                        <td style="width:50%" class="text-left">Reprovado. De acordo com a lei 079/2009, o numero mínimo de vagas é de <?php echo $_num_vagas ?> vaga. <i>(Obs: Lembrando que
                                        a medida mínima de uma vaga e outra é de 5.00 m, que é destinado para manobra de veículos.</i></td>
                                    </tr>
                                <?php }else if($vagas_projeto >= $_num_vagas) {?>
                                    <tr >
                                        <td class="text-center">Vagas de Estacionamento</td>
                                        <td class="text-center"><?php echo $vagas_projeto ?> vagas</td>
                                        <td class="text-center"><?php echo $_num_vagas = 1 ?> vagas</td>
                                        <td class="text-center"><i class="fas fa-check fa-lg" style="color: green; margin-top: 5%;"></></td>
                                        <td style="width:50%" class="text-left">Aprovado. <i>(Obs: Lembrando que
                                        a medida mínima de uma vaga e outra é de 5.00 m, que é destinado para manobra de veículos.</i></td>
                                    </tr>
                                
                                
                                <?php } ?>
                                                           
                                
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        
        </table>

        
    </div>
    <style>

    </style>
    
   
                    
                        
                   
                   
           
    
                   