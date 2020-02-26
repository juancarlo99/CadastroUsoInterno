<?php
include_once("conexao.php");
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	
	<title >Mercado Verde Vale - Login</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="icon" type="image/gif" href="img/animated_favicon1.gif">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body id="login" >


	<section class="aw-layout-content  js-content">


<div  class=" col-sm page-header bg-success"><br>
	<div  class="container-fluid">
		<h1 id="titulo"  class=" text-white">
			Uso Interno - Login
			
		</h1>
</div><br><br>
	
</div><br>

	
</div>
		
 <div id="container">
	<form method="POST" action="index.php" class="form-vertical  js-form-loading">
		<img src="img/vv1.jpg">
		<div class="form-group">
			<label for="input-produto-nome">Nome</label>
			<input id="input-produto-nome" type="text" name="nome" required="" class="form-control"/>
		</div>

		<div class="form-group">
			<label for="input-produto-descricao">Senha</label>
			<input id="input-produto-nome" type="password" name="senha" required="" class="form-control"/>
		</div>
		<div class="form-group">
			<input id="input-produto-nome" type="submit" name="enviar" value="Entrar" class="form-control"/>
		</div>
			<div  class="form-group">
			<input id="input-produto-nome" type="reset" value="Redefinir" class="form-control"/>
		</div>

		

	</form>
	</div>
	<?php 

			if (isset($_POST['enviar'])) {
				
				$senha=$_POST['senha'];
				$nome=$_POST['nome'];
				//echo $nome, $senha;
				$sql = "SELECT * FROM usuariov WHERE Nome = '$nome' && Senha ='$senha'  LIMIT 1" ;
			   		 $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
			   		 $dado =mysqli_fetch_assoc($resultado);
			   			
				   		 	$res_senha=$dado['Senha'];
				   		 	$res_nome=$dado['Nome'];

				   		 	
				   		 	if ( $dado) { 
				   		 		$senha==$res_senha;
				   		 		$nome==$res_nome;
				   		 		header("Location: cadastra.php");
				   		 	}
				   		 	else
				   		 	{
				   		 		echo "<p style='color:red;'>Usuario ou Senha Incorreto</p>";
				   		 	}
			   			
			}

		 ?>
</div>


	</section>
	
	<footer  class="aw-layout-footer bg-success  js-content">
		<div align="center" class="container-fluid">
			<span  class=" text-white aw-footer-disclaimer">&copy; Juan Carlos Nunes.</span>
		</div>
	</footer>
</div>


</body>
</html>