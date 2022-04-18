<div class="titulo">Array como Mapas</div>

<?php

echo '20-09-2021<br>';

$dados = array(
    "idade" => 25,
    "nome" => "Rafael",
    "peso" => 99.2
);

print_r($dados);
var_dump($dados[0]);

echo '<br>' . $dados['nome'];
echo '<br>' . $dados['idade'];
echo '<br>' . $dados['peso'];
echo '<br>';

var_dump($dados['outraInformacao']);

$lista = array(
    "a",
    "cinco" => 5.0,
    1 => 'Oasis',
    "Rafael",
    4 => 'I am the Walrus!'
);

echo "<br>";
print_r($lista);
