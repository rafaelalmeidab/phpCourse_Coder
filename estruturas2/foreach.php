<div class="titulo">Foreach</div>

<?php
echo '22-09-2021<br><hr>';

$semana = [1 => 'domingo', 'segunda', 'terça', 'quarta', 'quinta', 'sexta', 'sábado'];

foreach ($semana as $val) {
    echo "$val <br>";
}
echo '<hr>';

foreach ($semana as $i => $valor) {
    echo "$i=>$valor <br>";
}


$matrix = [
    ['a', 'b', 'c', 'd', 'e'],
    ['f', 'g', 'h']
];

echo '<hr>';

foreach ($matrix as $val) {
    foreach ($val as $val2) {
        echo "$val2 ";
    }
    echo "<br>";
}

echo '<hr>';

$num = [1, 2, 3, 4, 5, 6, 7, 8, 9];

//Nesse caso peguei a referência '&'
//Caso contrário, seria printado o array normalmente 
foreach ($num as &$dobro) {
    $dobro *= 2;
    echo "$dobro <br>";
}
