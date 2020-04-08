<?php


//Variaveis servidores Locais
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cadastro_verde_vale";


/*//variaveis servidores Webhost
$servidor = "localhost ";
$usuario = "id12623927_usuariojuan";
$senha = "";
$dbname = "id12623927_cadastra";
*/
//cria a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname); 
    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
       //echo "Conexao realizada com sucesso";
    }     
?>