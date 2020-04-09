<?php
include_once("../conexao.php");
session_start();
?>


<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width,  initial-scale=1.0"/>
	<link rel="shortcut icon" href="../img/favicon.ico">
	<link rel="icon" type="image/gif" href="../img/animated_favicon1.gif">
	<title>Consulta</title>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="../style.css">

</head>
<body >



	<section class="aw-layout-content  js-content">
		<div  style="background: url(../img/vv1.jpg) no-repeat  ;" class="page-header bg-success">
	<div  class="container-fluid">
		<h1 style="margin-left:250px " class=" text-white">
			Uso Interno - Consultar
			
		</h1><br><br>
		
	</div><br><br>
	
</div>
			<p style="margin-left:15px" >Informar Corretamente  o codigo do produto conforme formulario abaixo. Duvidas consultar Juan. </p>
			<p style="margin-left:15px" >Para Consultar Todos os Produtos Digitar "<strong class="text-danger">Todos</strong>"  </p>
		</div>

		<nav class="navbar navbar-light bg-light">
		  <button><a class="navbar-brand text-danger" href="cadastra.php"> Cadastrar um Produto</a>
		  	</button>
		
		  <button><a class="navbar-brand text-danger" href="imprimir.php">Imprimir uma Consultas</a>
		  	</button>
		
		 <button> <a class="navbar-brand text-danger" href="../index.php">Sair</a></button>
		</nav>
		
		  
		</nav>

		<br>




	<form method="POST"  class="form-vertical  js-form-loading">
		
	






		<div  class="form-group">
				<label for="input-produto-nome">Código:</label>
				<input id="input-produto-nome"  type="text" name="codigo" maxlength="13" placeholder="Ex: 7891234567890" required="" class="form-control"/>
					

	
		</div>

			<br>
		<div class="form-group">
			<input id="input-produto-nome"  type="submit" name="enviar" value="Consultar" class="form-control"/>
		</div>
			<div  class="form-group">
			<input id="input-produto-nome" type="reset"  value="Redefinir" class="form-control"/>
		</div>
		</div>
		

	</form>

			<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">Código</th>
		      <th scope="col">Nome</th>
		      <th scope="col">Funcionario</th>
		      <th scope="col">Data</th>
		      <th scope="col">Quantidade</th>
		      <th scope="col">Valor Total</th>
		    </tr>
		  </thead>
			<?php 

				if (isset($_POST['enviar'])) {
					
					$codigo=$_POST['codigo'];
					$sql = "SELECT * FROM cadastro_prod WHERE CodigoBarras = '$codigo' or Geral = '$codigo' or NomeFuncionario = '$codigo' ";
			   		 $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
			   		 while($dado =mysqli_fetch_array($resultado)) {
			   		 	$codigo=$dado['CodigoBarras'];
				   		$nome_produto=$dado['NomeProduto'];
						$funcionario=$dado['NomeFuncionario'];
						$qtd=$dado['Quantidade'];
						$data=$dado['Data'];
						$total=$dado['ValorTotal'];

			   		 	
			   		  ?>
	
		  <tbody>
		    <tr>
		      <th scope="row"><?php echo $codigo; ?></th>
		      <td><?php echo $nome_produto; ?></td>
		      <td><?php echo $funcionario; ?></td>
		      <td><?php echo $data; ?></td>
		       <td><?php echo $qtd; ?></td>
		       <td><?php echo $total; ?></td>
		    </tr>
		    
		  </tbody>
		    <?php } 
			     mysqli_close($conn);
			 	}
			     ?>
		</table>

	 
	 	
	
</div>


	</section>
		<div id="resultado"></div>
    <div id="camera"></div>

    <script src="js/quagga.min.js"></script>

    <script>

        Quagga.init(
        {
            inputStream: {
                name: "Live",
                type: "LiveStream",
                target: document.querySelector('#camera')    // Or '#yourElement' (optional)
            },
            decoder: {
                readers: ["code_128_reader"]
            }
        }, function (err) {
            if (err) {
                console.log(err);
                return
            }
            console.log("Initialization finished. Ready to start");
            Quagga.start();
        });

        Quagga.onDetected(function (data) {
            console.log(data.codeResult.code);
            document.querySelector('#resultado').innerText = data.codeResult.code;
        });

    </script>

	
		<footer  class="aw-layout-footer bg-success  js-content">
		<div align="center" class="container-fluid">
			<span  class=" text-white aw-footer-disclaimer">&copy; Juan Carlos Nunes.</span>
		</div>
	</footer>
</div>


</body>
</html>
