<?php 

$result = $conexao->query("SELECT * FROM documentos WHERE nome = '".$_SESSION['nome_usuario']."'");
$linha = mysqli_num_rows($result);

?>
<div class="col-md-12">
<table class="table table-bordered table-condensed">
    <thead>
        <tr>
            <th class="text-center" style="background-color: #f0f0f0;">Lista de Projetos</th>
        </tr>
    </thead>
    <tbody>
        <tr> 
            <td>
                <table class="table table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Path</th>
                        </tr>
                            <?php  
                            if ($linha > 0){
                                while($linha = mysqli_fetch_array($result))
                                { 		
 
                                $id = $linha['id'];
                                $nome = $linha['nome'];
                                $path = $linha['path'];
                                ?>
                                    <tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $nome ?></td>
                                        <td><a href="" class="btn btn-success"><?php $path ?>Baixar</a></td>
                                    </tr>
                                <?php }} ?>
                    </thead>
                </table>
            </td>
        
        </tr>
        
    </tbody>
</table>

</div>