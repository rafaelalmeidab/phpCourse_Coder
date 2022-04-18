<div class='titulo'>Multidimensionais</div>

<?php
echo '21-09-2021<br><br>';

$dados = [
    [
        "nome" => "Rafael",
        "idade" => 25,
        "cidade" => "Além Paraíba"
    ],

    [
        "nome" => "Fernanda",
        "idade" => 24,
        "cidade" => "Leopoldina"
    ],
];

print_r($dados);
echo '<br>' . $dados[0]['nome'];

$dados[] = [
    "nome" => "Margo",
    "idade" => 30,
    "cidade" => "Bruxelas"
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['nome'];

$dados[2]['vizinho'] = "Chaves";
echo '<br>';
print_r($dados);

unset($dados[1]);
echo '<br>';
print_r($dados);
var_dump($dados[1]);

sort($dados);
echo '<br>';
print_r($dados);
