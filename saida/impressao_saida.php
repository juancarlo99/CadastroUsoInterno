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

        <h1>Relação Saida de Mercadorias Para o Rosete </h1>
        <?php
          $data1=date('d/m/Y',strtotime($_POST['data1']));
          $data2=date('d/m/Y',strtotime($_POST['data2']));

         echo"<h2>Tabela Rerente a tada de  $data1 até $data2 </h2>"

          ?>
        <hr>
        <table class="table table-striped" style="border:2px solid black; margin: 10px 2px 10px 2px">
      
            
            <thead>
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Código</th>
                    <th scope="col">Nome Produto</th>
                    <th scope="col">Funcionario</th>
                    <th scope="col">Quantidade</th>
                  
                </tr>
            </thead>
                <?php 
                    include_once("../conexao.php");
              $data1=$_POST['data1'];
          $data2=$_POST['data2'];

                    if (isset($_POST['enviar'])) 
                    {
                      
                    
                    
                      $sql = "SELECT * FROM SaidaMercadorias WHERE Data between '$data1' and '$data2'";



                       $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

                       while($dado =mysqli_fetch_array($resultado)) {
                          $codigo=$dado['Codigo'];
                          $nome_produto=$dado['NomeProduto'];
                          $funcionario=$dado['NomeFuncionario'];
                          $qtd=$dado['Quantidade'];
                          $data=date('d/m/Y',strtotime($dado['Data']));
         
                          
                        ?>

       <tbody>
          <tr style="borde:solid 1px black">
              <td><?php echo $data; ?></td>
              <th scope="row"><?php echo $codigo; ?></th>
              <td><?php echo $nome_produto; ?></td>
              <td><?php echo $funcionario; ?></td>
              <td><?php echo $qtd; ?></td> 
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