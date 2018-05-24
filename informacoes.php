<?php
    $nome_proj = strval($_GET['nome']);
    $iptu = strval($_GET['iptu']);
    $zoneamento = strval($_GET['zoneamento']);
    $afast_latEsq = strval($_GET['afastamento_lateral_esq']);
    $afast_latDir = strval($_GET['afastamento_lateral_dir']);
    $afast_fundos = strval($_GET['afastamento_fundos']);
    $afast_frente = strval($_GET['afastamento_frontal']);
    $alt_maxima = strval($_GET['altura-maxima']);
    

    echo  $nome_proj.'<br>'.
          $iptu.'<br>'.
          $zoneamento.'<br>'.
          $afast_latEsq.'<br>'.
          $afast_latDir.'<br>'.
          $afast_fundos.'<br>'.
          $afast_frente.'<br>'.
          $alt_maxima.'<br>';

  // $json = json_encode($_GET);

  // echo $json;

  //   include('./conexao/conexao.php');
  //   $arquivo = $_POST['codigo'];

  //   SLEEP(3);

  //     $row = 1;

  //     if (($handle = fopen($arquivo, "r")) !== FALSE)
  //     {
  //       //Passagem pelas linhas
  //       while (($data = fgetcsv($handle, ",")) !== FALSE)
  //       {
  //           $num = count($data);
  //           $row++;
  //           // Passagem pelas colunas
  //           for ($col = 0; $col < $num; $col++)
  //           {
  //               //Printando apenas a coluna 13
  //               if($col == 1)
  //               {
  //                 $cadastrando_csv = $conexao->query("INSERT INTO projeto (id, layer, positionX, positionY, positionZ, length, area) VALUES
  //                 ('','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]')");
  //               }

  //           }
  //       }

  //     }

  //     fclose($handle);


  // ?>
