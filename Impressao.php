
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
        <?php
        include_once('conexao.php');

        $data1=$_POST['data1'];
        $data2=$_POST['data2'];
        $nome_funcionario=$_POST['nome_funcionario'];

        if ($nome_funcionario=="todos" or $nome_funcionario=="Todos" or $nome_funcionario=="TODOS" ) {
           $sql_total = "SELECT  SUM(`ValorTotal`) AS total  FROM uso_interno WHERE  Data between '$data1' and '$data2 '";
        }
        else{

        $sql_total = "SELECT  SUM(`ValorTotal`) AS total  FROM uso_interno WHERE  Data between '$data1' and '$data2 ' and NomeFuncionario LIKE  '%$nome_funcionario%'";
      }
        $resultado_total = mysqli_query($conn,$sql_total) or die("Erro ao retornar dados");

        while($dado_total =mysqli_fetch_array($resultado_total)) {
          $total=number_format( $dado_total['total'], 2, ',', '');
          

          echo "<td style=' font-size: 20px; color: red;'>Total utilizado por <strong>".$nome_funcionario."</strong>:</td>
          <td style='font-size: 20px; color: red;'><strong> R$".$total."</strong></td>";

        }
        ?>
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
      //aqui tem uma condição( se o botão enviar estiver vazio ele faz isso logo abaixo no if se nao ele vai fazer o do else que ira trazer um SELECT * FROM, com todos os registros)
          if (isset($_POST['enviar'])) {



            if ($nome_funcionario=="todos" or $nome_funcionario=="Todos" or $nome_funcionario=="TODOS" ){
           $sql = "SELECT * FROM uso_interno WHERE  Data between '$data1' and '$data2'  ";
        }
        else{
            $sql = "SELECT * FROM uso_interno WHERE  Data between '$data1' and '$data2 ' and NomeFuncionario LIKE  '%$nome_funcionario%' ";
            }
            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

            while($dado =mysqli_fetch_array($resultado)) {
              $codigo=$dado['CodigoBarras'];
              $nome_produto=$dado['NomeProduto'];
              $funcionario=$dado['NomeFuncionario'];
              $qtd=$dado['Quantidade'];
              $data=date('d/m/Y', strtotime($dado['Data']));
              $valor_total=number_format( $dado['ValorTotal'], 2, ',', '');



              ?>

              <tbody >
                <tr>
                  <th scope="row"><?php echo $codigo; ?></th>
                  <td><?php echo $nome_produto; ?></td>
                  <td><?php echo $funcionario; ?></td>
                  <td><?php echo $data; ?></td>
                  <td><?php echo $qtd; ?></td>
                  <td><?php echo $valor_total; ?></td>

                  <?php 



                  ?>

                </tbody>
                <?php 

              } 
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