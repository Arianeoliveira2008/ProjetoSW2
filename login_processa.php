<?php

    include "conexao.php";

    $sql = "select * from administrador
            where login = :login and senha = :senha";

    $login = $_REQUEST["login"];
    $senha = $_REQUEST["senha"];

    $result = $conexao->prepare($sql);
    $result ->bindValue(":login",$login);
    $result ->bindValue(":senha", md5 ($senha));
    $result->execute();

    if ($linha = $result ->fetch(PDO::FETCH_ASSOC) )
    {
        echo "Login realizado com sucesso !";
    }
    else
    {
        echo "Login e/ou Senha incorretos!";
    }


    ?>