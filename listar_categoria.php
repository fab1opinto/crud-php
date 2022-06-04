<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produtos</title>
    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="listar_produtos.css">
    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/8e60cd9016.js" crossorigin="anonymous"></script>
    <!--FontAwesome - CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
      .container {
        margin-top: 40px;
        width: 500px;
      }

      .container h3 {
        margin-bottom: 20px;
      }
    </style>
</head>

<body>
    
<div class="container">

<div style="text-align: right">
<a href="index.php" role="button" class="btn btn-primary">Voltar</a>
</div>

<h3>Lista de Produtos</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome Categoria</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  
    
        <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `categoria`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id_categoria = $array['id_categoria'];
                $categoria = $array['categoria'];
                   
        ?>
    <tr>
        
     <td><?php echo $categoria ?></td>
     
     <td><a class="btn btn-warning" style="color: #fff;" href="editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
     <a class="btn btn-danger" style="color: #fff;" href="deletar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
     </td>

     <?php } ?>

    </tr>
  
</table>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>