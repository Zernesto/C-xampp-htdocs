<form>
	
<input type="text" name="nome">>
<input type="date" name="nascimento">>
<input type="submit" value="ok">

</form>>

<?php  

if (isset($_GET)) {
	# code...]
	foreach ($_GET as $key => $value) {
		# code...
	

	echo "Nome do campo: " .$key . "<br>";
	echo "Valor do campo: " . $value;
	echo "<hr>";
	}
}

?>