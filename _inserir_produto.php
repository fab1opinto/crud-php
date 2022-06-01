<?php

include 'conexao.php';

$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];


//echo $sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto, '$nomeproduto','$categoria', $quantidade,'$fornecedor')";

$sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto, '$nomeproduto','$categoria', $quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao,$sql);

?>

<!--Bootstrap-->
<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
<!--Bootstrap CDN-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
<div class="container" style="width: 500px; margin-top: 20px">

<center>
<h4>Produto adicionado com sucesso!</h4>
<center>

<div style="padding-top: 20px">
<center>
<a href="index.php" role="button" class="btn btn-primary">Cadastrar novo item</a>
</center>

</div>

</div>