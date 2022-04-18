<div class="titulo">Argumentos & Variáveis</div>

<?php
echo '28-09-2021<br><hr>';

function soma($a, $b)
{
    return $a + $b;
}

echo soma(1, 2) . '<br>';
echo soma(12, 2, 1, 3) . '<br>';

function somaCompleta(...$numeros)
{
    $sum = 0;
    //print_r($numeros);
    foreach ($numeros as $val) {
        $sum = $sum + $val;
    }
    return $sum;
}

somaCompleta(1, 2, 5, 77, 10);

$arr = [10, 20, 30];
echo '<br>' . somaCompleta(...$arr) . '<br>';

function membros($titular, ...$dependentes)
{
    echo "Titular: $titular<br>";
    if ($dependentes) {
        foreach ($dependentes as $val) {
            echo "Dependente: $val<br>";
        }
    }
}

echo '<br>' . membros("Anderson", "Bruno", "Rafael", "Nycolas", "Ícaro");
