<div class="titulo">Argumentos & Retornos</div>

<?php

echo '28-09-2021<br><hr>';

function obterMensagem()
{
    return "Seja bem vindo!<br>";
}

obterMensagem();
$ret = obterMensagem();
echo $ret;
echo obterMensagem();

var_dump(obterMensagem());

function obterMensagemComNome($nome)
{
    return "Bem vindo, {$nome}!<br>";
}

echo obterMensagemComNome("Rorisfeldsson");

function soma($a, $b)
{
    return $a + $b;
}

echo "<br>" . soma(1, 9);

$x = 5;
$y = 2;
echo "<br>" . soma($x, $y);

function trocaValor($a, $novoValor)
{
    $a = $novoValor;
}

$var = 1;
trocaValor($var, 2);
echo '<br>', $var;

function trocaValorDeVerdade(&$a, $novoValor)
{
    $a = $novoValor;
}

trocaValorDeVerdade($var, 5000);
echo '<br>', $var;
