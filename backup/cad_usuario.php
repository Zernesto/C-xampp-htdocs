  <!doctype html>
  <html lang="pt-br">
  <head>
  	<meta charset="utf-8">
  	<?php
  		session_start();
  	?>	


  	<title>Crud - Cadastrar</title>
  </head>
  <body>
    <a href="index.php">Cadastrar</a><br>
    <a href="listar.php">Listar</a><br>
  	<h1>Cadastrar Usuario</h1>
  	<?php
  		if (isset($_SESSION['msg'])){
  			echo $_SESSION['msg'];
  			unset($_SESSION['msg']);
  		}
  	?>
  	<form method="post" action="processa.php";
  	<table border="0" >
  		<tr>
  			<td>Nome:</td>
  			<td><input type="text" name="NomePessoa"  placeholder="digite o seu Nome" required  /></td><br><br>
  		</tr>	
  		<tr>
  			<td>Email:</td>
  			<td><input type="text" name="Email" placeholder="digite o seu Email" required  /></td><br><br>
  		</tr>
  		<tr>
  			<td><input type="submit" value="Cadastrar"></td>	
  		</tr>
  		
  	</form>
  </body>
  </html>
