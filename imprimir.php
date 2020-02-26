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
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="icon" type="image/gif" href="img/animated_favicon1.gif">
	<title>Imprimir</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body >

	<section class="aw-layout-content  js-content">


	<div  style="background: url(img/vv1.jpg) no-repeat  ;" class="page-header bg-success">
	<div  class="container-fluid">
		<h1 style="margin-left:250px " class=" text-white">
			Uso Interno - Imprimir Dados
			
		</h1><br><br>
		
	</div><br><br>
	
</div>
			<p style="margin-left:15px" >Informar Corretamente  o <strong class="text-danger">codigo</strong> do produto conforme formulario abaixo. <br>Duvidas consultar <strong class="text-danger">Juan</strong>. </p>
			<p style="margin-left:15px" >Para Consultar Todos os Produtos Digitar "<strong class="text-danger">Todos</strong>" . </p>
			
			<p style="margin-left:15px" >Para Consultar Por nome do Funcionario é so digitar o "<strong class="text-danger">Nome do Funcionario</strong>"  .</p>
			
		</div>

		<nav class="navbar navbar-light bg-light">
		  <button><a class="navbar-brand text-danger" href="cadastra.php">Clique aqui para Cadastrar um Produto</a>
		  	</button>
		</nav>
				<nav class="navbar navbar-light bg-light">
		  <button><a class="navbar-brand text-danger" href="consulta.php">Clique aqui para Consultar um Produto</a>
		  	</button>
		  	</nav>

		 <nav class="navbar navbar-light bg-light">
		 <button> <a class="navbar-brand text-danger" href="index.php">Sair</a></button>
		</nav>
		
		  
		</nav>

		<br>

	<form method="POST" action="Impressao.php" target="_blank"  class="form-vertical  js-form-loading">
		
	
		<div align="center" class="form-group">
				<label  for="input-produto-nome">Dados:</label>
				<input id="input-produto-nome"  type="text" name="codigo" maxlength="13" placeholder="Ex: 7891234567890  " required="" class="form-control"/>
		</div>

			<br>
		<div class="form-group">
			<input id="input-produto-nome" translate ="_blank" type="submit" name="enviar" value="Consultar" class="form-control"/>
		</div>
			<div  class="form-group">
			<input id="input-produto-nome" type="reset" value="Redefinir" class="form-control"/>
		</div>
		</div>
		

	</form>

		
	 
	 	
	
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
