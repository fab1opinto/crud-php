<?php

include 'conexao.php';

$categoria = $_POST['categoria'];

$sql = "INSERT INTO `categoria`(`categoria`) VALUES ('$categoria')";
$inserir = mysqli_query($conexao, $sql);

?>

<!--Bootstrap-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container" style="width: 400px">
<center>
<div style="margin-top: 20px">
<h3>Adicionado com Sucesso</h3>
<br />
<a href="adicionar_categoria.php" class="btn btn-warning" style="color:#fff">Voltar</a>
</div>
</center>
</div>