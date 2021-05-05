<?php

include 'conexao.php';

$id = $_POST['id'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`='$quantidade',`fornecedor`='$fornecedor' WHERE id_estoque = $id";

$atualizar = mysqli_query($conexao, $sql);

?>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="style/personalizado.css">

<div class="container person-container-tamanho person-form-formulario">
        <center>
            <h4>Produto atualizado com sucesso !</h4> 
        </center>

    <div class="person-form-formulario">
        <center>
            <a href="_listagem_de_produtos.php" role="button" class="btn btn-sm btn-warning">Voltar a listagem</a>
        </center>
    </div>
    
</div>