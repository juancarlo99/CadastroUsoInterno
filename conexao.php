<?php


//Variaveis servidores Locais

//Variaveis servidores Locais
//Variaveis servidores Locais

//Variaveis servidores Locais
$servidor = "Localhost";
$usuario = "root";
$senha = "";
$dbname = "CadastroProduto";

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