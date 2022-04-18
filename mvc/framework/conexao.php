<?php 
    $host = "localhost"; //host (servidor)
    $usuario = "root"; // uusuario do servidor
    $senha = ""; // senha
    $bd= "bd_upaxbairrosxruas"; // nome do banco de dados

    $mysqli = new mysqli($host, $usuario, $senha, $bd); //conexão

    if($mysqli->connect_errno){
        echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error; // Codigo do erro e descrição do erro.
    }

?>