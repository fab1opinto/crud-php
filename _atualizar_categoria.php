<?php

include 'conexao.php';

$id = $_POST['id'];
//$nroproduto = $_POST['nroproduto'];
$categoria = $_POST['categoria'];


$sql = "UPDATE `categoria` SET `categoria`='$categoria' WHERE id_categoria = $id";

$atualizar = mysqli_query($conexao, $sql);


?>

<!--Bootstrap-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 400px">
<center>
<div style="margin-top: 20px">
<h3>Atualizado com Sucesso</h3>
<br />
<a href="listar_categoria.php" class="btn btn-warning" style="color:#fff">Voltar</a>
</div>
</center>
</div>