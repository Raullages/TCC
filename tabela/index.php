
<?php
// require('../conexao/conexao.php');

// $resultado = $conexao->query("SELECT * FROM projeto WHERE layer = 'Loteamento'");
    
// while($row = $resultado->fetch_array()){
// 				$layer_lote = $row['layer']."<br>";
// 				$length_lote = $row['length']."<br>";
// 				$area_lote = $row['area']."<br>";
				
// 				$areaCorreta = (int) $area_lote;
// 				$areaLote = $areaCorreta/10000;

// 				$areaCorrigida = number_format($areaLote, 2);
// }
?>

<table class="table table-bordered table-condensed" style="margin-top: 40px;">
    <thead>
        <tr>
            <th class="text-center" style="background-color: #f9f9f9; ">Projetos Cadastrados</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <table class="table table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th class="text-center">Projeto</th>
                            <th class="text-center">Última Ánalise</th>
                            <th colspan="2" class="text-center">Download Relatório</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"></td>
                            <td class="text-center">15:30</td>
                            <td class="text-center"><input type="button" id="tabela" class="btn btn-warning" style="height:25px; padding: 2px 15px; border-radius: 2px;" value="Download"></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>

				