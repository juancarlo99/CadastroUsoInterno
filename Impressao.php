
<!DOCTYPE html>
<html lang="pt-br">
<head>  
    <meta charset="utf-8">
    <title>Impressão Dados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Impressão Dados">
    <meta name="author" content="Juan Carlos Nunes">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="icon" type="image/gif" href="img/animated_favicon1.gif">
    <script type="text/javascript">
      setTimeout("window.close()", 1000);
       window.print();

        //window.close(); Só descomente esta linha se tiver o modo kiosk habilitado
    </script>

</head>

<body>


    
    <div style="width:70%;margin:10% 15% 10% 15%;" align="center">

        <h1>Relação Consumo Mercado Verde Vale</h1>
        <h2>Tabela</h2>
        <hr>
        <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Código</th>
          <th scope="col">Nome</th>
          <th scope="col">Funcionario</th>
          <th scope="col">Data</th>
          <th scope="col">Quantidade</th>
           <th scope="col">Valor Unitario</th>
          <th scope="col">Valor Total</th>
        </tr>
      </thead>
      <?php 
      include_once("conexao.php");
        if (isset($_POST['enviar'])) {
          
          $argumento=$_POST['codigo'];
          $sql = "SELECT * FROM cadastro_prod WHERE CodigoBarras = '$argumento' or Geral = '$argumento' or NomeFuncionario = '$argumento' ";
             $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
             while($dado =mysqli_fetch_array($resultado)) {
              $codigo=$dado['CodigoBarras'];
              $nome_produto=$dado['NomeProduto'];
            $funcionario=$dado['NomeFuncionario'];
            $qtd=$dado['Quantidade'];
            $data=$dado['Data'];
             $unid=$dado['ValorProduto'];
            $total=$dado['ValorTotal'];

              
              ?>
  
      <tbody>
        <tr>
          <th scope="row"><?php echo $codigo; ?></th>
          <td><?php echo $nome_produto; ?></td>
          <td><?php echo $funcionario; ?></td>
          <td><?php echo $data; ?></td>
           <td><?php echo $qtd; ?></td>
            <td><?php echo $unid; ?></td>
           <td><?php echo $total; ?></td>
        </tr>
        
      </tbody>
        <?php } 
           mysqli_close($conn);
        }
           ?>
    </table>
            <br>
       

        <hr>
        <h6 align="center" >Emitido em <?php echo date('d/m/Y') . ' às ' . date('H') . 'h' . date('i') . 'm' . date('s') . 's'; ?></h6>

    </div>

</body>
</html>