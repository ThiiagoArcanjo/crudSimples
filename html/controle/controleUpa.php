<?php 
    include("../framework/conexao.php");
   // include("../modelo/dao/upaDao.php");
    include("../modelo/entidade/upa.php");

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
  
     $sql = "INSERT INTO tb_upa(nome, descricao) 
                VALUES (' $nome','$descricao' )";
            
            if(mysqli_query($conexao, $sql)){
                echo "Upa cadastrada";
            }else{
                echo "Erro".mysqli_connect_error($conexao);
            }
            mysqli_close($conexao);

      

?>
    
