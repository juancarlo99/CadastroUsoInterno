

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

	<title>Uso Interno - Cadastro</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="icon" type="image/gif" href="img/animated_favicon1.gif">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body   >
	
	<section class="aw-layout-content  js-content">
			

			<div  style="background: url(img/vv1.jpg) no-repeat; " class="page-header bg-success">
	<div  class="container-fluid">
		<h1 style="margin-left:250px;  " class=" text-white">
			Uso Interno - Cadastro
			
		</h1><br><br>
		
	</div><br><br>

</div>
	<nav class="navbar navbar-light bg-light">
		  <button><a class="navbar-brand text-danger" href="consulta.php">Clique aqui para Consultar um Produto</a>
		  	</button>
		  	</nav>
		  <nav class="navbar navbar-light bg-light">
		  <button><a class="navbar-brand text-danger" href="index.php">Sair</a></button>
		
		</nav><br><hr>
				<p style="margin-left:15px" >Informar Corretamente todos os codigos e nomes dos produtos conforme formulario abaixo. Duvidas consultar Juan. </p>
				<p style="margin-left:15px" >Se o produto For um Produto <strong>Quilograma (Kg)</strong> Informar na parte <strong> Nome do Produto</strong>  </p>
				<p style="margin-left:15px">
					 Na Parte do Valor Unitario e Quantidade se For Produto em Kg <strong>( Não precisando colocar o identificador Kg )</strong> , Digitar Com o separador <strong>PONTO ( . ).</strong>
				</p>
					<p style="margin-left:15px">
					 Após Clicar em cadastrar os dados do formulario serão iseridos no Banco de dados e estarão disponiveis para consulta  <strong>clicando no link abaixo.</strong>
				</p>
			</div>

	<br><hr>

		
			<form method="POST"  class="form-vertical  js-form-loading">

		

				<div class="form-group col-sm-3">
					<label for="input-produto-nome">Nome do Produto:</label>
					<input id="input-produto-nome" name="nome-produto" type="text" required="" class="form-control"/>
				</div>
				
				<div class="form-group col-sm-3">
						<label for="input-produto-nome">Código:</label>
						<input id="input-produto-nome"  type="text" name="codigo" maxlength="13" placeholder="Ex: 7891234567890" required="" class="form-control"/>
				</div>

				<br>

				<div class="form-group col-sm-3">
					<label for="input-produto-nome">Nome do Funcionário:</label>
					<input id="input-produto-nome" name="nome-funcionario" type="text" required="" class="form-control"/>
				</div>

				<br>

				<div class="form-group">
					
					<div class="col-sm-3">
						<div class="form-group">
							<label for="input-produto-preco">Preço unitário:</label>
							<input id="input-produto-preco" type="text" name="preco" class="form-control" required="" placeholder="R$"/>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="form-group">
							<label for="input-produto-estoque">Quantidade:</label>
							<input id="input-produto-estoque" type="text" name="qtd" class="form-control" required="" placeholder="Unidades"/>
						</div>
					</div>

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
				if (isset($_POST['enviar'])) {
					$nome_produto=$_POST['nome-produto'];
					$funcionario=$_POST['nome-funcionario'];
					$codigo=$_POST['codigo'];
					$preco=$_POST['preco'];
					$qtd=$_POST['qtd'];
					$data=$_POST['data'];
					$total=$qtd*$preco;
					$resultad_usuario = "INSERT INTO cadastro_prod(	CodigoBarras, NomeProduto, ValorProduto, NomeFuncionario,Data,Quantidade,ValorTotal) values ('$codigo',' $nome_produto', '$preco','$funcionario','$data','$qtd','$total')";
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
