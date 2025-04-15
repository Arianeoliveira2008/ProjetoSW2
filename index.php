<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    

</head>
<body>

 <div class="container-fluid bg-dark text-white text-center p-5">
    <h1> Projeto SW2 <h1>

    <p>
        Elaborado por Ariane Oliveira.
    </p>
 </div>

<div class="container mt-5">

<div class="row">

        <div class="col-sm-4">

            <h1 class="bg-primary text-white">Administração</h1>
            <p class="text-primary">
                ultilize esta opçao para realizar o cadastro
                 de novos administradores, ou edita-los.
            </p>
                 <p>
                    <a href="administrador.php" class="btn btn-primary">Cadastro</a>
                    <a href="administrador_pesquisa.php" class="btn btn-primary">Pesquisa</a>
                 </p>
        </div>

        <div class="col-sm-4">
            <h1 class="bg-danger text-white">Categorias</h1>
            <p class="text-danger">Ultile esta opçao para cadastrar as categoria
                 dos produtos que serão vendidos on-line.
                </p>

                <p>
                    <a href="categoria.php" class="btn btn-danger">Cadastro</a>
                    <a href="categoria_pesquisa.php" class="btn btn-primary">Pesquisa</a>
                </p>


        </div>

        <div class="col-sm-4">
            <h1 class="bg-success text-white">Fornecedor</h1>
            <p class="text-success">Ultilize esta informação para cadastrar os
                 fornecedores dos produtos que serão vendidos on-line.
                    </p>

                    <p>
                    <a href="fornecedor.php" class="btn btn-success">Cadastro</a>
                    <a href="fornecedor_pesquisa.php" class="btn btn-primary">Pesquisa</a>
                    </p>
        </div>

        </div>

        <div class= "row">

            <div class="col-sm-6">
                <h1 class="bg-warning">produtos</h1>
                <p class="text-warning">
                    Ultilize esta opçao para cadastrar os produtos 
                    que serão vendidos no site.
                </p>

                <p>
                    <a href="produto.php" class="btn btn-warning">Cadastro</a>
                    <a href="produto_pesquisa.php" class="btn btn-primary">Pesquisa</a>
                </p>

            </div>

            <div class="col-sm-6">
                <h1 class="bg-secondary">Vendas</h1>
                <p class="text-secondary">
                    Ultilize esta opço para vizualizar as vendas 
                    realizadas pelos clientes
                </p>

                <div class="col-sm-6">
                <h1 class="bg-primary">Formas pagamentos</h1>
                <p class="text-secondary">
                    Ultilize esta opço para realizar as formas de pagamentos 
                    
                </p>
                <p>
                    <a href="produto.php" class="btn btn-warning">Cadastro</a>
                    <a href="administrador_pesquisa.php" class="btn btn-primary">Pesquisa</a>
                </p>


            
            </div>

            
                
            </div>

    </div>

</body>
</html>