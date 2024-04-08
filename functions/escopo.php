<div class="titulo">Funções e Escopo</div>

<?php
echo '28-09-2021<br><hr>';

function imprimirMensagens()
{
    echo "Olá!<br>";
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

$var = 1;
function trocaValor()
{
    $var = 2;
    echo "Durante a função: $var <br>";
}

echo "<br>Antes: $var <br>";
trocaValor();
echo "Depois: $var <br>";

function trocaValorDeVerdade()
{
    global $var;
    $var = 3;
    echo "Durante a função: $var <br>";
}

echo "<br>Antes: $var <br>";
trocaValorDeVerdade();
echo "Depois: $var <br>";

var_dump(trocaValorDeVerdade());
