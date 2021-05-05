<?php

include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Edita produto</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style/personalizado.css">

</head>
<body>

<div class="container person-form person-container-tamanho">
   
    <h4>Formulário de Cadastro</h4>

    <form action="_atualizar_produto.php" method="post" class="person-form-formulario">
        
        <?php

        $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
        $busca = mysqli_query($conexao,$sql);
        while ($array = mysqli_fetch_array($busca)){

            
            $id_estoque = $array['id_estoque'];
            $nroproduto = $array['nroproduto'];
            $nomeproduto = $array['nomeproduto'];
            $categoria = $array['categoria'];
            $quantidade = $array['quantidade'];
            $fornecedor = $array['fornecedor'];

        ?>

        <div class="form-group">
                <label>Nro Produto</label>
                <input type="number" name="nroproduto" class="form-control" value="<?php echo $nroproduto ?>" disabled>
                <input type="text" name="id" class="form-control" value="<?php echo $id ?>" style="display: none">
        </div>
        <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" name="nomeproduto" class="form-control" value="<?php echo $nomeproduto ?>">
        </div>
        <div class="form-group">
            <label>Categoria</label>
                <select class="form-control" name="categoria" value="<?php echo $categoria ?>">
                <option>Periféricos</option>
                <option>Hardware</option>
                <option>Software</option>
                <option>Celulares</option>
                </select>
        </div>
        <div class="form-group">
                <label>Quantidade</label>
                <input type="number" name="quantidade" class="form-control" value="<?php echo $quantidade ?>">
        </div>
        <div class="form-group">
            <label>Fornecedor</label>
                <select class="form-control" name="fornecedor" value="<?php echo $fornecedor ?>">
                <option>Fornecedor A</option>
                <option>Fornecedor B</option>
                <option>Fornecedor C</option>
                <option>Fornecedor D</option>
                </select>
        </div>
        <div class="person-btn-footer">
            <button type="submit" class="btn btn-primary btn-sm">Voltar</button>
            <button type="submit" class="btn btn-sm person-btn-rose">atualizar</button>
        </div>
        <?php } ?>
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</htm>