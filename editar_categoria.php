<?php

include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <!--CSS-->
    <link rel="stylesheet" href="estilo.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
<div class="container" id="tamanho-container">
    <h4>Formulário de Edição</h4>
    <form method="POST" action="_atualizar_categoria.php">
        <?php

        $sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
        $buscar = mysqli_query($conexao, $sql);
        while($array = mysqli_fetch_array($buscar)) {
                $id_categoria = $array['id_categoria'];
                $categoria = $array['categoria'];
        
        ?>
      
        <div class="form-group">
            <label>Nome Categoria</label>
            <input type="text" class="form-control" name="categoria" id="" value="<?php echo $categoria?>">
            <input type="text" class="form-control" name="id" id="" value="<?php echo $id_categoria?>" style="display: none">
        </div>

        <div class="cadastro">
            <button type="submit" class="btn btn-success">Atualizar</button>
        </div>
    <?php } ?>
    </form>
</div>
</body>
</html>

