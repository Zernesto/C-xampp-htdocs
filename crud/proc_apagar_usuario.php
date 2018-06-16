<?php 
session_start();
include_once("conexao.php");

//criar a query responsavel por apagar usuario	
$id= filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if (!empty($id)) {
	$result_usuario = "DELETE FROM usuarios WHERE id='$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
		if (mysqli_affected_rows($conn)) {
			$_SESSION['msg'] = "<p style = 'color:green;'>usuario apagado com sucesso</p>";
			header("location: index.php");
		} else {
			$_SESSION['msg'] = "<p style = 'color:red;'>Necessário selecionar um usuário</p>";
			header("location: index.php");
		}
}


?>