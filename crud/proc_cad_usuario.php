<?php 
session_start();
include_once("conexao.php");

$nome =filter_input(INPUT_POST, 'NomePessoa', FILTER_SANITIZE_STRING );
$email =filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL );

echo("Nome: $nome <br>");
echo("Email: $email <br>");

$result_usuario = "INSERT INTO usuarios(nome, email, created) VALUES('$nome', '$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style = 'color:green;'>usuario cadastrado com sucesso</p>";
	header("location: index.php");

} else
	$_SESSION['msg'] = "<p style = 'color:red;'>usuario nao foi cadastrado com sucesso</p>";

	header("location: cad_usuario.php");	
	
?>