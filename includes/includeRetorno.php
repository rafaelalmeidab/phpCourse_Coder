<div class="titulo">Include com Retorno</div>

<?php
echo '03-10-2021<br><hr>';
ini_set('display_errors', 0);

$valRetorno = require("retornoUsado.php");

echo "$valRetorno";
echo "$varRetornada<br>";

echo __DIR__ . '<br>';

$valRetorno2 = require(__DIR__ . '/retornoNaoUsado.php');
echo "$valRetorno2<br>";
echo "$varDeclarada<br>";

$valRetorno2 = include(__DIR__ . '/retornoNaoUsado.php');
//var_dump($valRetorno2);
echo "$valRetorno2<br>";
echo "$varDeclarada<br>";
