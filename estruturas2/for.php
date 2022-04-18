<div class="titulo">Laço For</div>
<?php
echo '22-09-2021<br>';


for ($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}
echo "<hr>";

for (; $cont <= 10; $cont++) {
    echo "$cont <br>";
}

echo "<hr>";

for (; $cont <= 15;) {
    echo "$cont <br>";
    $cont++;
}

$semana = ['domingo', 'segunda', 'terça', 'quarta', 'quinta', 'sexta', 'sábado'];

print_r($semana);
echo '<br>';

for ($i = 0; $i < count($semana); $i++) {
    echo "{$semana[$i]} <br>";
}

$matrix = [
    ['a', 'b', 'c', 'd', 'e'],
    ['f', 'g', 'h']
];

echo '<hr>';

for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix[$i]); $j++) {
        echo "{$matrix[$i][$j]} <br>";
    }
    echo '<hr>';
}
