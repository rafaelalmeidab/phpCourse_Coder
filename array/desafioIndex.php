<div class="titulo">Desafio Index</div>

<?php
echo "21-09-2021<br><br>";

$lista = array(
    1,
    4 => 2,
    3 => 3,
    'a' => 4,
    5,
    '9' => 6,
    '06' => 7,
    0 => 8
);

//Array ([0] => 1, [1] => 2, [2] => 3, [3] => 4, [4] => 5, [5] => 6, [6] => 7, [8] => 8)
//Errado!

print_r($lista);
