<div class="titulo">Declarando Tipos</div>

<?php

echo '28-09-2021<br><hr>';

function soma($a, $b)
{
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo soma(1, 4) . '<br>';
echo soma(1.1, 4.7) . '<br>';
echo soma(1, '4dois') . '<br>';

function soma2(int $a, int $b)
{
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo '<br>';
echo soma2(1, 4) . '<br>';
echo soma2(1.1, 7.7) . '<br>';
echo soma2(1, '4') . '<br>';

function soma3($a, $b): int
{
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo '<br>';
echo soma3(1, 4) . '<br>';
echo soma3(1.1, 7.7) . '<br>';
echo soma3(1, '4') . '<br>';
