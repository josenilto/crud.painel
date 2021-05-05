<!DOCTYPE html>
<html lang="pt_BR">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Cadastrar unidade</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style/personalizado.css">

</head>
<body>

<div class="container person-form person-container-tamanho">
   
    <h4>Cadastrar unidade</h4>

    <form action="_create_unidade.php" method="post" class="person-form-formulario">

        <div class="form-group">
                <label>Nome unidade</label>
                <input type="text" name="nomeunidade" class="form-control" placeholder="Inserir o nome do produto" autocomplete="off" required>
        </div>
 
        <div class="person-btn-footer">
            <button type="submit" class="btn btn-primary btn-sm">Voltar</button>
            <button type="submit" class="btn btn-sm person-btn-rose">Cadastrar</button>
        </div>
    
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</htm>