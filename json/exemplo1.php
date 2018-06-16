<?php  

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'joao',
	'idade'=>20
));

array_push($pessoas, array(
	'nome'=>'jose',
	'idade'=>25
));

echo json_encode($pessoas);

?>