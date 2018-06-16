<?php 

//concatenar palavras
$nome = "jose";
$sobrenome = "ernesto";

echo $nome ." ". $sobrenome;

// se colocar o comando EXIT para o cod
//exit;

echo "<br>";

echo $nome;

//apaga a variavel
unset($nome);

//verificar se a variavel existe
if (isset($nome)){
	echo $nome;
}

?>