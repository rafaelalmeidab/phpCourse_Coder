<div class="titulo">Includes em Função</div>

<?php
echo '03-10-2021<br><hr>';

echo 'Carregando: includeArquivo<br>';

function carregarArquivo()
{
    include('includeArquivo.php');

    echo $var . '<br>';

    echo soma(2, 5) . '<br>';
}

echo 'Novamente no arquivo includeArquivo<br>';
carregarArquivo();
echo soma(1, 8) . '<br>';
//carregarArquivo();

echo "Variável = '{$var}'";
var_dump($var);
