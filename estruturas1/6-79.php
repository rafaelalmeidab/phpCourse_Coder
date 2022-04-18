<div class="titulo">Operador Ternário</div>

<?php

echo "20-09-2021<br><br>";

$idade = 25;
$status;

if ($idade >= 18) {
    $status = "Maior de idade";
} else {
    $status = "Menor de idade";
}

echo "$status<br>";

$idade = 17;
$status = $idade >= 18 ? "Maior de idade" : "Menor de idade";
echo "$status<br>";

/*
$status = $idade >= 18 ? $idade >=65 ? "Aposentado" : "Maior de idade";
echo "$status<br>";*/