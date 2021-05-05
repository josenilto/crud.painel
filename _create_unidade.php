<?php
include 'conexao.php'; /* Abrir conexão com o banco de dados. */

$nomeunidade = $_POST['nomeunidade'];

$sql = "INSERT INTO `unidade`(`nomeunidade`) VALUES
('$nomeunidade')"; /* Incluir as mesma variaveis com conforme no banco de dados. */

$inserir = mysqli_query($conexao, $sql); /* Pega as variaveis e inserir no banco de dados. */

?>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="style/personalizado.css">

<div class="container person-container-tamanho person-form-formulario">
        <center>
            <h4>Unidade criada com sucessso!</h4> 
        </center>

    <div class="person-form-formulario">
        <center>
            <a href="_inserir_unidade.php" role="button" class="btn btn-sm btn-primary">Criar uma nova unidade</a>
        </center>
    </div>
    
</div>
