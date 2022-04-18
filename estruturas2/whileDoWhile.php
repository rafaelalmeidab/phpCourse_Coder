<div class="titulo">While/Do While</div>

<?php
echo '22-09-2021<br><hr>';

const VALOR_LIMITE = 5;
$cont = 0;

do {
    echo "while $cont ";
    $cont++;
} while ($cont < VALOR_LIMITE);

echo '<br><hr>';

$cont = 10;

while ($cont < VALOR_LIMITE) {
    echo "while $cont ";
    $cont++;
}

echo '<br><hr>';

for ($cont = 0; $cont < VALOR_LIMITE; $cont++) {
    echo "for $cont ";
}

echo '<br><hr>';
$cont = 0;
do {
    echo "do-while $cont ";
    $cont++;
} while ($cont < VALOR_LIMITE);

echo '<br><hr>';
$cont = 0;
while (true) {
    echo "while(true) $cont ";
    $cont++;
    if ($cont >= VALOR_LIMITE) {
        break;
    }
}
