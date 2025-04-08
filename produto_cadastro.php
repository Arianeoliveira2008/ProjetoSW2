<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    
    <div class="bg-primary text-white p-3 text-center">
        <h1>Cadastro de Produto</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto mt-3 border border-primary">
                <h3 class="text-center p-3">Confirmação do Cadastro</h3>

                <div>
                    <?php
                    include "conexao.php";

                    $descricao = isset($_REQUEST['descricao']) ? $_REQUEST['descricao'] : '';
                    $preco = isset($_REQUEST['preco']) ? $_REQUEST['preco'] : '';
                    $categoria = isset($_REQUEST['categoria']) ? $_REQUEST['categoria'] : '';
                    $fornecedor = isset($_REQUEST['fornecedor']) ? $_REQUEST['fornecedor'] : '';

                    echo "Descrição: $descricao <br>
                          Preço: $preco <br>
                          Categoria: $categoria <br>
                          Fornecedor: $fornecedor<br>";

                    if (!empty($descricao) && !empty($preco) && !empty($categoria) && !empty($fornecedor)) {
                        $sql = "INSERT INTO produtos (descricao, preco, categoria, fornecedor)
                                VALUES (:descricao, :preco, :categoria, :fornecedor)";

                        $stmt = $conexao->prepare($sql);
                        $stmt->bindValue(":descricao", $descricao);
                        $stmt->bindValue(":preco", $preco);
                        $stmt->bindValue(":categoria", $categoria);
                        $stmt->bindValue(":fornecedor", $fornecedor);

                        if ($stmt->execute()) {
                            echo "<p class='text-success'>Produto cadastrado com sucesso!</p>";
                        } else {
                            echo "<p class='text-danger'>Erro ao cadastrar o produto.</p>";
                        }
                    } else {
                        echo "<p class='text-danger'>Por favor, preencha todos os campos.</p>";
                    }
                    ?>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>


