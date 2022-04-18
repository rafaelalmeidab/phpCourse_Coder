<div class="titulo">Valor vs. Referência</div>

<?php

echo "19/06/2021<br><br>Atribuição por Valor<br><br>";
$variavel = 'valor inicial';
echo "$variavel<br>";

//Atribuição por Valor
$variavelValor = $variavel;
echo "$variavelValor<br>";
$variavelValor = 'novo valor';

echo "$variavel<br>";
echo "$variavelValor<br><br>";


//Atribuição por Referência
echo "Atribuição por Referência<br>";
$varRef = &$variavel;
$varRef = 'mesma referencia';
$x = &$variavel;
echo "<br>$variavel $varRef $x";
