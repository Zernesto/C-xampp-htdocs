<?php

$frase="A repetição é a mãe da retenção.";

$palavra="mãe";

//posiçao da string

$q= strpos($frase, $palavra);

//le a string ate a posicao da variavel $q

$texto= substr($frase, 0, $q);

var_dump($texto);

$texto2= substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);

?>