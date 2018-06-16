<?php
$acao =$_GET['acao'];

if ($acao=="enviar")
{
$nome_pessoa = $_POST['NomePessoa'];
$cidade_pessoa = $_POST['CidadePessoa'];
$end_pesssoa = $_POST['EndPessoa'];
$num_pessoa = $_POST['NumPessoa'];
$email_pessoa = $_POST['EmailPessoa'];
$sexo_pessoa = $_POST['SexoPessoa'];
$dia_pessoa = $_POST['DiaPessoa'];
$mes_pessoa = $_POST['MesPessoa'];
$ano_pessoa = $_POST['AnoPessoa'];

echo $nome_pessoa;
echo"<br>".$cidade_pessoa;
echo"<br>".$end_pesssoa;
echo"<br>".$num_pessoa;
echo"<br>".$email_pessoa;
echo"<br>".$sexo_pessoa;
echo"<br>".$dia_pessoa;
echo"<br>".$mes_pessoa;
echo"<br>".$ano_pessoa;
  // code...
}

 ?>
