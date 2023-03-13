<div class="titulo">Upload Arquivo</div>

<?php
    print_r($_FILES);

    if($_FILES && $_FILES['arquivo']){
        $pastaUpload = 'api/dadosUpload/';
        $nomeArquivo = $_FILES['arquivo']['name'];
        $arquivo = $pastaUpload . $nomeArquivo;
        $tmp = $_FILES['arquivo']['tmp_name'];

        if(move_uploaded_file($tmp, $arquivo)){
            echo "<br>Arquivo enviado com sucesso!";
        }
        else{
            echo "<br>Erro ao enviar arquivo.";
        }
    }
?>

<form action='#' method='post' enctype="multipart/form-data">
    <input name='arquivo' type='file'>
    <button>Enviar</button>
</form>

<style>
    input, button{
        font-size: 1.2rem;
    }
</style>