<?php
include_once("../conexao.php");
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<title>Uso Interno - Cadastro</title>
	<link rel="shortcut icon" href="../img/favicon.ico">
	<link rel="icon" type="image/gif" href="../img/animated_favicon1.gif">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="../style.css">

</head>
<body   >
	
	<section class="aw-layout-content  js-content">
			

			<div  style="background: url(../img/vv1.jpg) no-repeat; " class="page-header bg-success">
	<div  class="container-fluid">
		<h1 style="margin-left:250px;  " class=" text-white">
			Saida Mercadorias- Registro
			
		</h1><br><br>
		
	</div><br><br>

</div>
	<nav class="navbar navbar-light bg-light">
		  <button><a class="navbar-brand text-danger" href="consulta-descarga.php">Fazer Uma Consulta</a>
		  	</button>
		  	
		  <button><a class="navbar-brand text-danger" href="../opcao.php">Voltar Para Inicio</a>
		  	</button>
		  	
		  <button><a class="navbar-brand text-danger" href="../index.php">Sair</a></button>
		
		</nav><br><hr>
				
					<p style="margin-left:15px">
					 Após Clicar em cadastrar os dados do formulario serão iseridos no Banco de dados e estarão disponiveis para consulta 
				</p>
			</div>

	<br><hr>
		
		
			<form method="POST"  class="form-vertical  js-form-loading">

		

				<div class="form-group col-sm-3">
					<label for="input-produto-nome">Nome da Empresa:</label>
					<input id="input-produto-nome" name="nome-empresa" type="text" required="" class="form-control"/>
				</div>
				
				<div class="form-group col-sm-3">
						<label for="input-produto-nome">Quantidade Palett</label>
						<input id="input-produto-nome"  type="text" name="qtd_palett"  placeholder=""  required="" class="form-control"/>
				</div>

				<br>

				<div class="form-group col-sm-3">
					<label for="input-produto-nome">Valor Cobrado por Palett</label>
					<input id="input-produto-nome" name="valor-palett" type="text" required="" placeholder="R$" class="form-control"/>
				</div>

				<br>

				<div class="form-group">
					
					

					<div class="col-sm-3">

						<div class="form-group">
							<label for="input-produto-estoque">Data:</label>
							<input id="input-produto-estoque" type="date" name="data" class="form-control" required="" placeholder="Unidades"/>
						</div>

					</div>

					<br>

					<div class="form-group col-sm-3">

						<input  id="input-produto-nome" type="submit" name="enviar" value="Cadastrar" class="form-control"/>

					</div>

					<div  class="form-group col-sm-3 ">

						<input id="input-produto-nome" type="reset" value="Redefinir" class="form-control"/>
						
					</div>

				</div>
				

			</form>
		
			<?php 
				if (isset($_POST['enviar'])) 
				{
					$nome_empresa=$_POST['nome-empresa'];
					$valor=$_POST['valor-palett'];
					
					
					$qtd_palett=$_POST['qtd_palett'];
					$data=$_POST['data'];
					$total=$qtd_palett * $valor;
					
					
					$resultad_usuario = "INSERT INTO Descarga(	NomeEmpresa, QuantidadePalett, ValorPalett,Data,ValorTotal) values ('$nome_empresa',' $qtd_palett','$valor','$data','$total')";
							$resultado_usuario = mysqli_query ($conn, $resultad_usuario);
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