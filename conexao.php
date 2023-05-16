
<?php

    $servidor = 'localhost';
    $bancodedados = 'cadastro-usuarios';
    $usuario = 'root'; 
    $senha = ''; 

    $conexao=mysqli_connect($servidor, $bancodedados, $usuario, $senha);
    if(!$conexao){
        die("Houve um erro ao conectar ao banco de dados!".mysqli_connect_error());
    }

?>

