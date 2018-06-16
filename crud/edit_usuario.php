  <?php
      session_start();
      include_once ("conexao.php");
      //receber o valor do id
      $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
      $result_usuario ="SELECT * FROM usuarios WHERE id = '$id'";
      $resultado_usuario =mysqli_query ($conn, $result_usuario);
      $row_usuario = mysqli_fetch_assoc($resultado_usuario);
  ?>
  <!doctype html>
  <html lang="pt-br">
  <head>
  	<meta charset="utf-8">
  		
  	<title>Crud - Editar</title>
  </head>
  <body>
    <a href="cad_usuario.php">Cadastrar</a><br>
    <a href="index.php">Listar</a><br>
  	<h1>Editar Usuario</h1>
  	<?php
  		if (isset($_SESSION['msg'])){
  			echo $_SESSION['msg'];
  			unset($_SESSION['msg']);
  		}
  	?>
  	<form method="post" action="proc_edit_usuario.php";
  	<table border="0" >
      <td><input type="hidden" name="id"  value="<?php echo $row_usuario['id']; ?>"></td>
  		<tr>
  			<td>Nome:</td>
  			<td><input type="text" name="NomePessoa"  placeholder="digite o seu Nome" required  value="<?php echo $row_usuario['nome']; ?>"   /></td><br><br>
  		</tr>	
  		<tr>
  			<td>Email:</td>
  			<td><input type="text" name="Email" placeholder="digite o seu Email" required  value="<?php echo $row_usuario['email']; ?>"  /></td><br><br>
  		</tr>
  		<tr>
  			<td><input type="submit" value="Editar"></td>	
  		</tr>
  		
  	</form>
  </body>
  </html>
