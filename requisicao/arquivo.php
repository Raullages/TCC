
<?php
    include('../conexao/conexao.php');
    
    sleep(3);

    $arquivo = $_POST['codigo'];
    $row = 1;

        if (($handle = fopen($arquivo, "r")) !== FALSE)
        {
          //Passagem pelas linhas
          while (($data = fgetcsv($handle, ",")) !== FALSE)
          {
            $num = count($data);
            $row++;
            // Passagem pelas colunas
            for ($col = 0; $col < $num; $col++)
            {
              //Printando apenas a coluna 13
              if($col == 1)
              {
                $cadastrando_csv = $conexao->query("INSERT INTO projeto (id, num_count ,layer, positionX, positionY, positionZ, area, length) VALUES
                ('','$data[0]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]')");

              // $conexao->query("UPDATE projeto SET id = '', layer = '$data[2]', positionX = '$data[3]', positionY = '$data[4]', positionZ = '$data[5]', length = '$data[6]', area = '$data[7]'");

              }
            }
          }
        }  
        fclose($handle);
?>