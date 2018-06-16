<?php

// todas as letras maiusculas

$nome= "jose ernesto";

$nome= strtoupper($nome);

echo $nome; 

//todas as letras minusculas

$nome= strtolower($nome);

echo "<br>";

echo $nome;

//as primeiras letras de cada palavra maiuscula

echo "<br>";

echo ucwords($nome);

//apenas a primeira letra maiuscula

echo "<br>";

echo ucfirst($nome);

?>