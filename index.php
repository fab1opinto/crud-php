<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <!--CSS-->
    <link rel="stylesheet" href="/css/estilo.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>
    
<div class="container" id="tamanho-container">
    <h4>Formulário de Cadastro</h4>
    <form method="POST" action="/php/_inserir_produto.php">
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
                <option value="">Periféricos</option>
                <option value="">Hardware</option>
                <option value="">Software</option>
                <option value="">Celulares</option>
            </select>
        </div>

        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" class="form-control" name="quantidade" id="" required placeholder="Insira a quantidade de produto" autocomplete="off">
        </div>

        <div class="form-group">
            <label>Fornecedor</label>
            <select class="form-control" name="fornecedor">
                <option value="">Fornecedor A</option>
                <option value="">Fornecedor B</option>
                <option value="">Fornecedor C</option>
            </select>
        </div>

        <div class="cadastro">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>

    </form>
</div>
</body>
</html>