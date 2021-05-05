<?php
include 'conexao.php'; /* Abrir conexão com o banco de dados. */

$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES
('$nroproduto','$nomeproduto','$categoria','$quantidade','$fornecedor')"; /* Incluir as mesma variaveis com conforme no banco de dados. */

$inserir = mysqli_query($conexao, $sql); /* Pega as variaveis e inserir no banco de dados. */

?>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="style/personalizado.css">

<div class="container person-container-tamanho person-form-formulario">
        <center>
            <h4>Produto adicionado com sucesso !</h4> 
        </center>

    <div class="person-form-formulario">
        <center>
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar um novo item</a>
        </center>
    </div>
    
</div>
