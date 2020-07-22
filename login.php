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
	
	<title > Uso Interno - Cadastro</title>
	<link rel="shortcut icon" href="../img/favicon.ico">
	<link rel="icon" type="image/gif" href="img/animated_favicon1.gif">
	 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">

		* {

			
		}
		body{
			margin: 2px;
			color: white;
			height: 100%;
			font-family: Times, Times New Roman, serif;
			background:#006b00;

		}
		header{
			
			
			
			
		}
		.menu{
			
			background:#d9e4d3;


		}
		a{
			color: black;

		}
		
		.post{
			float: right;
			padding: 30px;
			border: 1px solid black;
			
			
		}
	

		.central{
			
				margin: 5px;
			padding: 20px;
			background: url(../img/fundo.jpg);
			
		}
	
		
		.exquerda{
			float: left;
			
			 display: block;

		}
		footer{
			
			margin: 5px;
			margin-bottom: 1px;
			margin-top: 200px;
			text-align: center;
			clear: both;

		}
		.face{
			width: 100%;
			height: 100%;
			margin-left: 100%;
			margin-right: 100%;
		}


	</style>

</head>
<body id="login" >
	<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/7.15.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/7.15.1/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>


	<section class="aw-layout-content  js-content">
	


<div  class=" col-sm page-header bg-success"><br>
	<div  class="container-fluid">
		<h1 id="titulo"  class=" text-white">
			Mercado Verde Vale - Login
			
		</h1>
</div><br><br>
	
</div><br>

	
</div>
<!--<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
			
			<div style="float: left;" class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="pt_BR" data-type="vertical" data-theme="dark" data-vanity="juan-carlo-nunes"><a class="LI-simple-link" href='https://br.linkedin.com/in/juan-carlo-nunes?trk=profile-badge'>Juan Carlos Nunes</a></div>
	-->
 <div id="container">
	<form method="POST" action="login.php" class="form-vertical  js-form-loading">
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
				   		 		header("Location: opcao.php");
				   		 	}
				   		 	else
				   		 	{
				   		 		echo "<p style='color:red;'>Usuario ou Senha Incorreto</p>";
				   		 	}
			   			
			}

		 ?>
</div>


	</section>
	
	<footer >
			<div align="center" class="container-fluid">
				<span  class=" text-white aw-footer-disclaimer">&copy; Juan Carlos Nunes.</span>
			</div>
		</footer>
	</div>
</body>
	<!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
