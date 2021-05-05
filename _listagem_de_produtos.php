<!DOCTYPE html>
<html lang="pt_BR">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Listagem de Produtos</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style/personalizado.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>

<div class="container-fluid">
    <br/>
   <h3><i class="fas fa-list-ul"></i>&nbsp;Lista de Produtos</h3>
    <br/>

<table class="table table-sm table-responsive-sm table-striped table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nro Produto</th>
      <th scope="col">Nome Produto</th>
      <th scope="col">Unidade</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
        <?php
            include 'conexao.php';

            $sql = "SELECT * FROM `estoque`";
            $busca = mysqli_query($conexao,$sql);
            while($array = mysqli_fetch_array($busca)) {

                $id_estoque = $array['id_estoque'];
                $nroproduto = $array['nroproduto'];
                $nomeproduto = $array['nomeproduto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];

        ?>
    <tr>
      <td><?php echo $nroproduto ?></td>
      <td><?php echo $nomeproduto ?></td>
      <td><?php echo $categoria ?></td>
      <td><?php echo $quantidade ?></td>
      <td><?php echo $fornecedor ?></td>

      <td>
      <a class="btn btn-sm btn-secondary" role="button" href="_editar_produto.php?id=<?php echo $id_estoque ?>"><i class="far fa-edit"></i>&nbsp;Editar</a>
      <a class="btn btn-sm btn-danger" role="button" href="_deletar_produto.php?id=<?php echo $id_estoque ?>"><i class="far fa-trash-alt"></i>&nbsp;Delete</a>
      </td>
      
    <?php } ?>

    </tr>
</table>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</htm>