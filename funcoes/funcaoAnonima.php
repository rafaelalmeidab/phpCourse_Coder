<div class="titulo">Funções Anônimas</div>

<?php
echo '01-10-2021<br><hr>';

$soma = function ($a, $b) {
    return $a + $b;
};

$mult = function ($a, $b) {
    return $a * $b;
};

function divi($a, $b)
{
    return $a / $b;
}

echo $soma(1, 2) . '<br>';

function executar($a, $b, $op, $funcao)
{
    $resultado = $funcao($a, $b) ?? "Nada.<br>";
    echo "$a $op $b = $resultado<br>";
}

executar(2, 3, '+', $soma);
executar(2, 3, '*', $mult);
//Não funcionou talvez por conta da versão do PHP
//executar(2, 3, '/', divi);
