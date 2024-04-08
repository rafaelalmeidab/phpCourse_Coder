<div class="titulo">Desafio Impressão</div>

<?php
echo '22-09-2021<br><hr>';

/*
Imprimir valor do array que tem indice par
Resolver com for e foreach
Ans: AAA, CCC, EEE
*/

$val = ['AAA', 'BBB', 'CCC', 'DDD', 'EEE', 'FFF'];

foreach ($val as $key => $val2) {
    if ($key === 5) {
        break;
    }
    if ($key % 2 == 0) {
        echo "$key => $val2 ";
        continue;
    }
}

echo "<hr>";
for ($i = 0; $i < count($val); $i++) {
    if ($i === 5) {
        break;
    }
    if ($i % 2 == 0) {
        echo "$val[$i] ";
        continue;
    }
}
