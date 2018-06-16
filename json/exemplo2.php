<?php 

$json = '[{"nome":"joao","idade":20},{"nome":"jose","idade":25}]';

$data = json_decode($json, true);

var_dump($data);

?>