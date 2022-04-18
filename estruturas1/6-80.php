<div class="titulo">Switch</div>

<?php

echo "20-09-2021<br><br>";

$categoria = 'Luxo';
$preco = 0.0;
$carro = '';

if ($categoria === 'Luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} else if ($categoria === 'SUV') {
    $carro = 'Urus';
    $preco = 3000000;
} else if ($categoria === 'Sedan') {
    $carro = 'Virtus';
    $preco = 110000;
} else {
    $carro = 'Gol G5';
    $preco = 32000;
}

$precoformatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$$precoformatado</p>";

//Switch Case
//Senão implemetnar o break, acontece o 'false true'

$categoria = '';
switch ($categoria) {
    case 'Luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;

    case 'SUV':
        $carro = 'Urus';
        $preco = 3000000;
        break;

    case 'Sedan':
        $carro = 'Virtus';
        $preco = 110000;
        break;
    default:
        $carro = 'Gol G5';
        $preco = 32000;
        break;
}

$precoformatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$$precoformatado</p>";
