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
    <div class="bg-primary text-white p-3 text-center">
        <h1>Cadastro Categorias</h1>
    </div>

<div class="container">
    <div class="row">
        <div class="col-sm-8 mx-auto mt-3 border border-primary ">

            <h3 class="text-center p-3">Confirmação da Categorias</h3>

        <div> 
            <?php
                include "conexao.php";
                $nome = $_REQUEST["nome"];

                echo "Nome da Categoria: $nome <br>";

                $sql = "insert into categoria(nome)
                        values (:nome)";

            
                $result = $conexao->prepare("$sql");
                $result ->bindValue("nome", $nome);
                $result ->execute();
                 
                echo "<p> A categoria foi cadastrada com sucesso ! </p>";

            ?>
        </div>

            </div>
        </div>
    </div>
</body>
</html>