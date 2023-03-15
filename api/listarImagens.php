<div class="titulo">Listar Imagens</div>

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
        $extensions = array("png", "jpeg", "jpg");

        var_dump($arquivos);

        foreach($arquivos as $arquivo){
            if(in_array(pathinfo('api/dadosUpload/' . $arquivo , PATHINFO_EXTENSION), $extensions)){
            ?>
            <li>
                <!--
                <a href="api/dadosUpload/">
                </a>-->
                <figure>
                    <img src="api/dadosUpload/<?= $arquivo ?>" alt="<?= $arquivo ?>">
                    <figcaption><?= $arquivo ?></figcaption>
                </figure>
            </li>
            <?php
            }
        }
    ?>

</ul>

<style>
    input, button{
        font-size: 1.2rem;
    }
</style>