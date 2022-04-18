<div class="titulo">Operadores Lógicos</div>

<?php

echo "20/06/2021<br><br>";

var_dump(true);
echo '<br>';
var_dump(!true);

echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false and true);
var_dump(false and false);

echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false or true);
var_dump(false or false);

echo "<p class='divisao'>Tabela Verdade 'XOR' (OU EXCLUSIVO)</p><hr>";
var_dump(true xor true); // 'xor' ou '!='
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

echo "<p class='divisao'>Exemplo</p><hr>";

$idade = 65;
$sexo = 'M';

$pagouPrevidencia = true;
$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aposentar -> $podeSeAposentar.<br>";

if ($idade >= 65 && $sexo === 'M') {
    echo "Pode se aposentar!<br>";
} else if ($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar!<br>";
} else {
    echo "Precisa trabalhar um pouco mais!<br>";
}


?>

<style>
    p {
        margin-bottom: -5px;
        font-weight: bold;
    }

    hr {
        margin-top: 0px;
    }
</style>