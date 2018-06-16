  	<?php
  		session_start();
      include_once("conexao.php");
  	?>	


  	<title>Crud - Cadastrar</title>
  </head>
  <body>
  	<h1>Listar Usuario</h1>
  	<?php
  		if (isset($_SESSION['msg'])){
  			echo $_SESSION['msg'];
  			unset($_SESSION['msg']);
  		}

      //receber o numero da pagina  
      $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);

      $pagina= (!empty($pagina_atual)) ? $pagina_atual : 1; 

      //setar a quantidade de itens da pagina
      $qnt_result_pg = 3;   

      //calcular o inicio vizualizaçao
      $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

      $result_usuarios="SELECT * FROM usuarios LIMIT $inicio, $qnt_result_pg";
      $resultado_usuarios = mysqli_query($conn, $result_usuarios );
      while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
        echo "ID: " . $row_usuario['id'] . "<br>";
        echo "Nome: " . $row_usuario['nome'] . "<br>";
        echo "Email: " . $row_usuario['email'] . "<br><hr>";
        //botao editar para cada id
        echo "<a href='edit_usuario.php?id=" . $row_usuario['id'] . "'>EDITAR</a><br><hr>";
      }

      //paginação - somar a quantidade de usuarios
      $result_pg = "SELECT COUNT(id) AS num_result FROM usuarios";
      $resultado_pg = mysqli_query($conn, $result_pg);
      $row_pg =  mysqli_fetch_assoc($resultado_pg);
      //echo $row_pg['num_result'];
      //quantidade de paginas
      $quantidade_pg= ceil($row_pg['num_result'] / $qnt_result_pg);

      //limitar os link antes depois
      $max_links = 2;
      echo "<a href= 'listar.php?pagina=1'>Primeira</a>";

      for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) { 
          if ($pag_ant >=1) {
          echo "<a href= 'listar.php?pagina=$pag_ant'>$pag_ant</a>";
          }

      }

      echo "$pagina";

      for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
          if ($pag_dep <= $quantidade_pg) {
          echo "<a href= 'listar.php?pagina=$pag_dep'>$pag_dep</a>";
        }
      }

      echo "<a href= 'listar.php?pagina=$quantidade_pg'>Ultima</a>";
  	?>
