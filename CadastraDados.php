  <!doctype html>
  <html lang="pt-br">
  <head>
  	<meta charset="utf-8">
  	<title>Crud - Cadastrar</title>
  </head>
  <body>
  	<form method="post" action="valida_dados.php? acao=enviar";
  	<table border="0" >
  		<tr>
  			<td>Nome Completo:</td>
  			<td><input type="text" name="NomePessoa" /></td>
  		</tr>
  		<tr>
  			<td>Cidade:</td>
  			<td><input type="text" name="CidadePessoa" /></td>
  		</tr>
  		<tr>
  			<td>Endereço:</td>
  			<td><input type="text" name="EndPessoa" /></td>
  		</tr>
  		<tr>
  			<td>Número:</td>
  			<td><input type="number" name="NumPessoa" /></td>
  		</tr>
  		<tr>
  			<td>E-Mail:</td>
  			<td><input type="email" name="EmailPessoa" /></td>
  		</tr>
  		<tr>
  			<td>Sexo:</td>
  			<td>
  				Masculino: <input type="radio" value="Masc" name="SexoPessoa" />
  				Feminino : <input type="radio" value="Femi" name="SexoPessoa" />
  			</td>
  		</tr>
  	</body>
  	</html>
