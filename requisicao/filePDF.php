<?php

	include('../conexao/conexao.php');
	// $session_start();

	echo $_SESSION['nome_usuario'];
	// $path = 'C:/xampp/htdocs/tcc/documentos/'.$_SESSION['nome_usuario'];

	// $conexao->query("INSERT INTO documentos (id, nome, path) 
	// VALUES ('".$_SESSION['id']."', '".$_SESSION['nome_usuario']."', '$path')");


	// $result = $conexao->query("SELECT * FROM documentos");
    // $linha = mysqli_num_rows($result);
        
    //     if ($linha > 0){
    //             while($linha = mysqli_fetch_array($result))
    //             {
	// 					$id = $linha['id'];
	// 					$nome = $linha['nome'];
	// 					$path = $linha['path'];
	// 				?>
	<!-- // 					<table class="table table-bordered table-condensed">
	// 						<thead>
	// 							<tr>
	// 								<th>id</th>
	// 								<th>nome</th>
	// 								<th>caminho</th>
	// 							</tr>
	// 						</thead>
	// 						<tbody>
	// 							<tr>
	// 								<td><?php echo $id ?></td>
	// 								<td><?php echo $nome ?></td>
	// 								<td><?php echo $path ?></td>
	// 							</tr>
	// 						</tbody>
	// 					</table> -->

    //             <?php 
	// 		 	} 
    //         }

 ?>