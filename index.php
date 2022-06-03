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
        .container{
            margin-top: 100px;
        }

        #divisao {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="container">

        <div class="row">

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Produto</h5>
                        <p class="card-text">Opção para adicionar produtos em nosso estoque</p>
                        <a href="adicionar_produto.php" class="btn btn-primary">Cadastrar Produto</a>
                    </div>
                </div>
            </div>
        
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lista de Produtos</h5>
                        <p class="card-text">Visualizar, Editar e Excluir os Produtos</p>
                        <a href="listar_produtos.php" class="btn btn-primary">Produtos</a>
                    </div>
                </div>
            </div>
        
            <div class="col-sm-6" id="divisao">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Categoria</h5>
                        <p class="card-text">Opção para adicionar categoria de produtos</p>
                        <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar Categoria</a>
                    </div>
                </div>
            </div>
        
            <div class="col-sm-6" id="divisao">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Fornecedores</h5>
                        <p class="card-text">Opção para adicionar fornecedores.</p>
                        <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fornecedores</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>

