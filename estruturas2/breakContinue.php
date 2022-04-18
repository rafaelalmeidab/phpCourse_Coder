<div class="titulo">Break/Continue</div>

<?php
echo '22-09-2021<br><hr>';

$cont = 10;

for (;;) {
    echo "$cont ";
    $cont++;
    if ($cont > 20) {
        break;
    }
}

echo "Fim!<br><hr>";

for (;;) {
    $cont++;
    if ($cont % 2 === 1) {
        continue;
    }
    echo "$cont ";
    if ($cont >= 30) {
        break;
    }
}

echo "Fim!<br><hr>";

foreach (array(1, 2, 3, 4, 5, 6, 7, 8, 9) as $val) {
    if ($val === 5) {
        break;
    }
    if ($val % 2 === 0) {
        continue;
    }
    echo "$val ";
}

echo "Fim!<br><hr>";
