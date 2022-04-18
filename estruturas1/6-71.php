<div class="titulo">Desafio PI</div>

<?php

echo "20/06/2021<br><br>";

echo pi();
$pi = 3.14;

if ($pi === pi()) {
    echo "<br>Iguais!";
} else {
    echo "<br>Diferentes!";
}

//Operador Relacional
$piErrado = 3.0;

if ($pi >= pi()) {
    echo "<br>Iguais!";
} else if (($pi <= $piErrado) || (($piErrado < $pi) && ($pi <  pi()))) {
    echo "<br>Diferentes!";
}

//Resposta
echo '<br>' . ($pi - pi());
echo '<br>' . ($pi - $piErrado);

if ($pi - $piErrado <= 0.01) {
    echo '<br>Praticamente iguais!';
} else {
    echo '<br>Valor errado!';
}


?>

<style>
    p {
        margin-bottom: -5px;
    }

    hr {
        margin-top: 0px;
    }
</style>