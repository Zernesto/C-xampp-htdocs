<?php

$nome= "jose";

function teste(){

	global $nome;
	echo $nome;

}

function teste2(){

	$nome = "<br>joao";
	echo $nome. "<br> agora teste 2";

}

teste();
teste2();

?>