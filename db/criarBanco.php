<div class="titulo">Criando Banco de Dados</div>

<?php

    require_once "conexao.php";

    $conexao = novaConexao(null);
    $sql     = 'CREATE DATABASE IF NOT EXISTS cursoPHP';
    
    $result = $conexao->query($sql);

    if($result){
        echo "Sucesso! Banco de dados criado.\n";
    }
    else{
        echo "Erro: " . $conexao->error;
    }

    $conexao->close();


?>