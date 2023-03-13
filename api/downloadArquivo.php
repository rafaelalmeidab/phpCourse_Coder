<div class="titulo">Download Arquivo</div>

<?php

    session_start();

    $arquivos = $_SESSION['arquivos'] ?? [];
    $pastaUpload = 'api/dadosUpload/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;

    $tmp = $_FILES['arquivo']['tmp_name'];

    if(move_uploaded_file($tmp, $arquivo)){
        echo "<br>Arquivo enviado com sucesso!";
        $arquivos[] = $nomeArquivo;
        $_SESSION['arquivos'] = $arquivos;
    }
    else{
        echo "<br>Erro ao enviar arquivo.";
    }
?>

<form action='#' method='post' enctype="multipart/form-data">
    <input name='arquivo' type='file'>
    <button>Enviar</button>
</form>

<ul>
    <?php
        foreach($arquivos as $arquivo){
            ?>
            <li>
                <a href="api/dadosUpload/"<?= $arquivo ?>">
                    <?= $arquivo ?>
                </a>
            </li>
            <?php
        }
    ?>

</ul>

<style>
    input, button{
        font-size: 1.2rem;
    }
</style>