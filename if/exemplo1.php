<?php  

$qualAsuaIdade = 54;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualAsuaIdade < $idadeCrianca) {
	# code...
	echo "criança";
} else if ($qualAsuaIdade < $idadeMaior ) {
	# code...
	echo "Adolescete";
} elseif ($qualAsuaIdade < $idadeMelhor) {
	# code...
	echo "Adulto";
} else {

	echo "Idoso";
}

echo "<br>";

echo($qualAsuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";

?>