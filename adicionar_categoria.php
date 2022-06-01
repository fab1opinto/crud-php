<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--CSS-->
    <style type="text/css">
        .container {
            margin-top: 40px;
            width: 500px;
        }
        .botao {
            text-align: right;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div style="text-align: right">
            <a href="index.php" role="button" class="btn btn-primary">Voltar</a>
        </div>
        <h4>Cadastro de Categoria</h4>
        <form action="_inserir_categoria.php" method="POST">
            <label>Categoria</label>
            <div class="form-group">
                <input type="text" name="categoria" class="form-control" placeholder="Digite o nome da categoria">
            </div>
            <div class="botao">
            <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>

