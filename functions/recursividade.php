<div class="titulo">Recursividade</div>

<?php
echo '01-10-2021<br><hr>';

function recursividade_soma($num)
{
    if ($num == 1) {
        return $num;
    }
    return $num + recursividade_soma($num - 1);
}

function recursividade_somaEconomica($num)
{
    return $num === 1 ? '1' :
        $num + recursividade_somaEconomica($num - 1);
}

function soma($num)
{
    $sum = 0;
    for (; $num >= 1; $num--) {
        $sum = $sum + $num;
    }
    return $sum;
}

echo soma(4) . '<br>';
echo recursividade_soma(4) . '<br>';
echo recursividade_somaEconomica(4) . '<br>';
