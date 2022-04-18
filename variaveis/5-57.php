<div class="titulo">Interpolação</div>

<?php

$numA = (6 * (3 + 2)) ** 2;
$denA = 3 * 2;

$numB = (-4) * (-5);
$denB = 2;

$superiorA = $numA / $denA;
$superiorB = ($numB / $denB) ** 2;

$superior = ($superiorA - $superiorB) ** 3;
$inferior = 10 ** 3;

$final = $superior / $inferior;

//echo "O resultado é: " . $final;

echo "19/06/2021\n\n";

$num = 10;
echo $num;
echo '<br> $num';
echo "<br> $num + 1";

$texto = "A sua nota é: $num";
echo "<br>$texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objeto";
echo "<br>Eu tenho 5 {$objeto}s";
echo "<br>Eu tenho 5 { $objeto}s mas perdi 3 {$objeto}s";

echo "<br>";
