<?php

  include('../conexao/conexao.php');

  sleep(3);

  $nome_proj = strval($_POST['nome']);
  $iptu = strval($_POST['iptu']);
  $zoneamento = strval($_POST['zoneamento']);
  $afast_latEsq = strval($_POST['afastamento_lateral_esq']);
  $afast_latDir = strval($_POST['afastamento_lateral_dir']);
  $afast_fundos = strval($_POST['afastamento_fundos']);
  $afast_frente = strval($_POST['afastamento_frontal']);
  $alt_maxima = strval($_POST['altura-maxima']);

  $conexao->query("INSERT INTO dadosrelatorios ( nomeRelatorio, iptu, zoneamento, 
  afastamento_lateral_esq, afastamento_lateral_dir, afastamento_fundos, afastamento_frontal, altura_maxima)
  VALUES('$nome_proj','$iptu', '$zoneamento','$afast_latEsq', '$afast_latDir','$afast_fundos', '$afast_frente','$alt_maxima')");

       
  
    ?>
