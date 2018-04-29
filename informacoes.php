<?php

    include('./conexao/conexao.php');
    $arquivo = $_POST['codigo'];

    SLEEP(3);

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
                  $cadastrando_csv = $conexao->query("INSERT INTO projeto (id, layer, positionX, positionY, positionZ, length, area) VALUES
                  ('','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]')");
                }

            }
        }

      }

      fclose($handle);


  ?>
