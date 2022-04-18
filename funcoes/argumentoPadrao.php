<div class="titulo">Argumento Padrão</div>

<?php
echo "28-09-2021<br><hr>";

function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente')
{
    echo "Bem vindo, $nome $sobrenome!<br>";
}

saudacao();
saudacao(null);
saudacao(null, null);
saudacao('Rafael', 'Almeida');

echo '<br>';

function anotarPedido($comida, $bebida = 'Água')
{
    echo "Para comer: $comida<br>";
    echo "Para beber: $bebida<br>";
}

anotarPedido("Hambúrguer");
anotarPedido("Pizza", "Refrigerante");

echo '<br>';

function anotarPedido2($bebida = 'Água', $comida)
{
    echo "Para beber: $bebida<br>";
    echo "Para comer: $comida<br>";
}

//anotarPedido2("Hambúrguer");
anotarPedido2("Pizza", "Refrigerante");
