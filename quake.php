<?php

$arquivo = file("games.log");

$initgame = 0;
$ShutdownGame = 0;
$kill = 0;
$jogador= 0;

//separar o tempo do jogo
foreach ($arquivo as $keyh => $linha) {
  $limpeza = preg_split("/[\d?\d]:[\d\d] /", $linha);

  $param = explode(" ",trim($limpeza[0]),2);

  $tempo = $param[0];
  $comando = $param[1];

  //inicio do jogo
  if (explode(":",$comando)[0] == "InitGame") {
    $initgame++;
    echo "<br>game: ".$initgame;
    echo "<br>Inicio do jogo: " .$tempo;
    // TOTAL DE VEZES QUE MATARAM
    $totalkill = $kill;
    echo "<br>Total de Kills: " . $totalkill;


  }

  //LOG do jogador
  //if (explode(":", $comando)[0] == "ClientUserinfoChanged"){
  //$jogador++;
  //  echo "<br>Jogador entrou na partida: ". $jogador;
  //}

  //kills
  if (explode(":", $comando)[0] == "Kill"){
    $kill++;

  }
  
  //fim do jogo
  if (explode(":",$comando)[0] == "ShutdownGame"){
    $ShutdownGame++;
    echo "<br>Fim do jogo: " .$tempo;

    echo "<br>";}

  }
  //echo "Total de Kills: " . $kill;

  echo "<br>";

  ?>
