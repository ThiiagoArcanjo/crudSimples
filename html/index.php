<?php 
    include_once(__DIR__."/model/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Simples</title>
</head>
    <body>
        <div class="prinpal" align="center">
            <h2>Crud Simples Com PHP</h2>
            <div class="formulario">
                <form action="controle/controleUpa.php" method="post" name="form">
                    <table class="table-cadastro">
                        <tr>
                            <td>Nome da UPA:</td>
                            <td><input type="text" name="nome"></td>
                        </tr>
                        <tr>
                            <td>Descrição:</td>
                            <td><input type="text" name="descricao"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="Cadastrar"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>