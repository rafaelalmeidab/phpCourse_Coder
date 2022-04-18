<div class="titulo">Variáveis Variáveis</div>

<?php
echo "19/06/2021<br><br>";

$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a} ${$a} $valorA";

$epa = 'opa';
$opa = 'vish';
$vish = 'eita!';
echo "<br><br> $epa {$$epa} {$ $$epa}";

//Desafio Variáveis Variáveis
echo "<br><br>Desafio Variáveis Variáveis<br>";

$a = 'Nossa';
$Nossa = 'Eu';
$Eu = 'consegui';
$consegui = 'responder';
$responder = 'esse';
$esse = 'desafio';

echo "Nossa! Eu consegui responder esse desafio.";
echo "<br>{$a}! {$$a} {$ $$a} {$ $ $$a} {$ $ $ $$a} {$ $ $ $ $$a}.";
