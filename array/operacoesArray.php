<div class="titulo">Operações com Array</div>

<?php
echo '21-09-2021<br><br>';
$dados1 = [
    "nome" => "Rafael",
    "idade" => 25
];

$dados2 = [
    "nome" => "Fernanda",
    "naturalidade" => "Leopoldina"
];

$dados = $dados1 + $dados2;
print_r($dados);

echo '<br>' . is_array($dados);
echo '<br>' . count($dados);
echo '<br>';

$indice = array_rand($dados);
echo "$indice = $dados[$indice]";
echo '<br>';

//Interpolação - REVER CONCEITO!
echo "{$dados['idade']}";
echo "${dados['idade']}";

//Remover elemento de array
unset($dados['nome']);
echo '<br>';
print_r($dados);

unset($dados);
echo '<br>';
var_dump($dados);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);

$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);

sort($decimais);
echo '<br>';
print_r($decimais);
