<?php 
    include (__DIR__."/../model/upa.php");

    $upa = new Upa();
    $upa->setNome($_POST['nome']) ;
    $upa->setDescricao($_POST['descricao']);
    
    $upa->cadastrar();
      

?>
    
