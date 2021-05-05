<?php

include 'conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";

$deletar = mysqli_query($conexao,$sql);

?>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="style/personalizado.css">

<div class="container person-container-tamanho person-form-formulario">
        <center>
            <h4>Deletado com sucessso!</h4> 
        </center>

    <div class="person-form-formulario">
        <center>
            <a href="_listagem_de_produtos.php" role="button" class="btn btn-sm btn-primary">volta a listagem</a>
        </center>
    </div>
    
</div>