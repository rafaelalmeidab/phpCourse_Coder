<div class="titulo">Desafio Includes</div>

<?php

    include("class/pessoa.php");
    include("class/usuario.php");

    $usuario = new Usuario("Rafael", 27, "rafaelalmeidab", "rafaelalmeidab@hotmail.com");
    echo $usuario->apresentarPessoa();
?>
