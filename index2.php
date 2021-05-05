<!DOCTYPE html>
<html lang="pt_BR">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Meu Primeiro Script</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style/personalizado.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>

<div class="container person-form person-container-tamanho">
   
    <h4>Formulário de Cadastro</h4>

    <form action="_inserir_produto.php" method="post" class="person-form-formulario">
        <div class="form-group">
                <label>Nro Produto</label>
                <input type="number" name="nroproduto" class="form-control" placeholder="Inserir o número do produto" autocomplete="off" required>
        </div>
        <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" name="nomeproduto" class="form-control" placeholder="Inserir o nome do produto" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Unidade</label>
                <select class="form-control" name="unidade">

                    <?php

                        include 'conexao.php';

                        $sql = "SELECT * FROM unidade order by nomeunidade ASC";
                        $busca = mysqli_query($conexao,$sql);
                        
                        while ($array = mysqli_fetch_array($busca)) {

                        $codunidade = $array['codunidade'];
                        $nomeunidade = $array['nomeunidade'];
                        ?>

                        <option><?php echo $nomeunidade ?></option>

                    <?php  } ?>

              </select>
        </div>
        <div class="form-group">
                <label>Quantidade</label>
                <input type="number" name="quantidade" class="form-control" placeholder="Inserir o número do produto" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Fornecedor</label>
                <select class="form-control" name="fornecedor" required>
                <option>Fornecedor A</option>
                <option>Fornecedor B</option>
                <option>Fornecedor C</option>
                <option>Fornecedor D</option>
                </select>
        </div>
        <div class="person-btn-footer">
             <a class="btn btn-sm btn-primary" role="button" href="index.php"><i class="fas fa-reply-all"></i>&nbsp;Voltar</a>
            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-pencil-alt"></i>&nbsp;Cadastrar</button>
        </div>
    
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</htm>