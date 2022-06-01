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
    <!--CSS-->
    <style type="text/css">
    #tamanho-container {
        width: 500px;
        margin-top: 40px;
    }

    .form-group label {
        padding: 10px 0;
    }

    .cadastro {
        margin-top: 20px;
        text-align: right;
    }
    </style>
</head>
<body>
    
<div class="container" id="tamanho-container">

<div style="text-align: right">
<a href="index.php" role="button" class="btn btn-primary">Voltar</a>
</div>

    <h4>Formulário de Cadastro</h4>
    <form method="POST" action="_inserir_produto.php">
        <div class="form-group">
            <label>Número do Produto</label>
            <input type="number" class="form-control" name="nroproduto" id="" required placeholder="Insira o número do produto">
        </div>

        <div class="form-group">
            <label>Nome do Produto</label>
            <input type="text" class="form-control" name="nomeproduto" id="" required placeholder="Insira o nome do produto">
        </div>

        <div class="form-group">
            <label>Categoria</label>
            <select class="form-control" name="categoria">
                <option>Periféricos</option>
                <option>Hardware</option>
                <option>Software</option>
                <option>Celulares</option>
            </select>
        </div>

        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" class="form-control" name="quantidade" id="" required placeholder="Insira a quantidade de produto" autocomplete="off">
        </div>

        <div class="form-group">
            <label>Fornecedor</label>
            <select class="form-control" name="fornecedor">
                <option>Fornecedor A</option>
                <option>Fornecedor B</option>
                <option>Fornecedor C</option>
            </select>
        </div>

        <div class="cadastro">
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>

    </form>
    
</div>
</body>
</html>

