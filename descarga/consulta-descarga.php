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
			Consultar
			
		</h1><br><br>
		
	</div><br><br>
	
</div>
			
		</div>

		<nav class="navbar navbar-light bg-light">
		  <button><a class="navbar-brand text-danger" href="descarga.php">Registrar uma descarga</a>
		  	</button>
		
		 <button> <a class="navbar-brand text-danger" href="../index.php">Sair</a></button>
		</nav>
		
		  
		</nav>

		<br>

	<form method="POST"  class="form-vertical  js-form-loading">
		
	<div class="form-group">
				<label for="input-produto-nome">Nome da Empresa:</label>
				<input id="input-produto-nome"  type="text" name="empresa"  prequired="" class="form-control"/>
		</div>
		<div class="form-group">
				<label for="input-produto-nome">De:</label>
				<input id="input-produto-nome"  type="date" name="data"  prequired="" class="form-control"/>
		</div>
<div class="form-group">
				<label for="input-produto-nome">Até:</label>
				<input id="input-produto-nome"  type="date" name="data2"  prequired="" class="form-control"/>
		</div>

			<br>
		<div class="form-group">
			<input id="input-produto-nome" type="submit" name="enviar" value="Consultar" class="form-control"/>
		</div>
			<div  class="form-group">
			<input id="input-produto-nome" type="reset" value="Redefinir" class="form-control"/>
		</div>
		</div>
		

	</form>

			<table class="table table-striped">
		  <thead>
		    <tr>
		    <th scope="col">Nome Empresa</th>
		      <th scope="col">Quantidade de Palett</th>
		      <th scope="col">valor Cobrado</th>
		      <th scope="col">Data</th>
		      
		      <th scope="col">Valor Total</th>
		      
		    </tr>
		  </thead>
			<?php 

				if (isset($_POST['enviar'])) {
					
					$data=$_POST['data'];
					$data2=$_POST['data2'];
					$empresa=$_POST['empresa'];
					$sql = "SELECT * FROM Descarga WHERE NomeEmpresa = '$empresa' or Data between '$data' and '$data2'
					";



			   		 $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
			   		 while($dado =mysqli_fetch_array($resultado)) {
			   		 	$Nome=$dado['NomeEmpresa'];
				   		$qtd=$dado['QuantidadePalett'];
						$valorpalett=$dado['ValorPalett'];
						$data=$dado['Data'];
						$Valorto=$dado['ValorTotal'];
						

			   		 	
			   		  ?>
	
		  <tbody>
		    <tr>
		    	<td><?php echo $Nome; ?></td>
		      <th scope="row"><?php echo $qtd; ?></th>
		      <td><?php echo $valorpalett; ?></td>
		      <td><?php echo $data; ?></td>
		      
		       <td><?php echo $Valorto; ?></td>
		       
		    </tr>
		    
		  </tbody>
		    <?php } 
			     mysqli_close($conn);
			 	}
			     ?>
		</table>

	 
	 	
	
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
