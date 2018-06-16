<?php 
session_start();
include_once("conexao.php");
$id =filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT );
$nome =filter_input(INPUT_POST, 'NomePessoa', FILTER_SANITIZE_STRING );
$email =filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL );

//echo("Nome: $nome <br>");
//echo("Email: $email <br>");

$result_usuario = "UPDATE usuarios SET nome='$nome', email='$email', modified=NOW() WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style = 'color:green;'>usuario editado com sucesso</p>";
	header("location: index.php");

} else {
	$_SESSION['msg'] = "<p style = 'color:danger;'>usuario nao foi editado com sucesso</p>";
    header("location: index.php?id=$id");	}
	
?>