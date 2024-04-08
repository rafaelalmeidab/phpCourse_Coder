<div class="titulo">Desafio Palindromo</div>

<?php
echo '28-09-2021<br><hr>';

function palindromo($palavra)
{
    $ultimoIndice = strlen($palavra) - 1;
    for ($i = 0; $i <= $ultimoIndice; $i++) {
        if ($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return "Não é palíndromo!";
        }
    }
    return "É palíndromo!";
}

echo palindromo("ana") . '<br>';
echo palindromo("bola") . '<br>';
echo palindromo("abba") . '<br><br>';


function palindromoSimples($palavra)
{
    return $palavra === strrev($palavra) ? "É palíndromo!" : "Não é palíndromo!";
}


echo palindromoSimples("ana") . '<br>';
echo palindromoSimples("bola") . '<br>';
echo palindromoSimples("abba") . '<br>';
