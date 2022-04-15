<?php

include '/php/conexao.php';

$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ('[$nroproduto]','$nomeproduto','$categoria', $quantidade,'$fornecedor')";

echo $inserir = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    
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