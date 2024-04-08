<div class="titulo">Closure & Callable</div>

<?php
echo '01-10-2021<br><hr>';

$soma1 = function ($a, $b) {
    return $a + $b;
};

function soma2($a, $b)
{
    return $a + $b;
}

echo $soma1(2, 3) . " ";
echo (is_callable(($soma1)) ? 'Sim' : 'Não') . "<br>";

$soma1 = 1;
echo (is_callable(($soma1)) ? 'Sim' : 'Não') . "<br>";

echo soma2(2, 3) . " ";
echo (is_callable((soma2(2, 3))) ? 'Sim' : 'Não') . "<br>";
