<?php

namespace contexto;

?>

<div class="titulo">Básico Namespace</div>

<?php

ini_set('display_errors', 0);

echo '03-10-2021<br><hr>';
echo __NAMESPACE__ . '<br>';

const constante1 = 123;
define('constante2', 1414);
define('contexto\constante2', 34627545);
define(__NAMESPACE__ . '\constante3', 345);
define('outroContexto\constante4', 456);

echo constante1 . '<br>';
echo constante2 . '<br>';
//Diretório Raiz PHP - Usei '\'
echo \constante2 . '<br>';

//Se atentar a caminho relativo e a caminho absoluto
echo \contexto\constante3 . '<br>';
echo constant(__NAMESPACE__ . '\constante3') . '<br>';
//echo constante4 . '<br>';
echo \outroContexto\constante4 . '<br>';

function soma($a, $b)
{
    return $a + $b;
}

echo \contexto\soma(1, 2) . '<br>';
echo soma(1, 2) . '<br>';

//Dá erro se usar assim, porque nao tem a funcao soma no namespace raiz do PHP
//echo \soma(1, 2) . '<br>';

function strpos($str, $text)
{
    echo "Buscando o texto '{$text}' em '{$str}'<br>";
    return 1;
}

echo strpos('Texto genérico para busca', 'busca') . '<br>';
echo \strpos('Texto genérico para busca', 'busca') . '<br>';
