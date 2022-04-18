<?php 
    $host = "localhost"; //host (servidor)
    $usuario = "root"; // uusuario do servidor
    $senha = ""; // senha
    $bd= "bd_upaxbairrosxruas"; // nome do banco de dados

    $conexao =  mysqli_connect($host, $usuario, $senha, $bd); //conexão

    if($conexao->connect_errno){
        echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error; // Codigo do erro e descrição do erro.
    }

?>