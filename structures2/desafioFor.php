<div class="titulo">Desafio For</div>

<?php
echo '22-09-2021<br><hr>';

//Montar um for para sair isso:
//Um for com incremento e um sem
/*
    #
    ##
    ###
    ####
    #####
    */




for ($j = 1; $j <= 5; $j++) {
    for ($i = 1; $i <= $j; $i++) {
        echo "#";
    }
    echo "<br>";
}

echo '<hr>';

//ERRADO!
for (; $j <= 5;) {
    for (; $i <= $j;) {
        echo "#";
    }
    echo "<br>";
}

$imp = '';

//Resposta 1 - Cod3r!
for ($i = 1; $i <= 5; $i++) {
    $imp = $imp . "#";
    echo "$imp <br>";
}

echo "<br>";
echo '<hr>';

//Resposta 2 - Cod3r!
for (
    $imp2 = '#';
    $imp2 !== '######';
    $imp2 .= '#'
) {
    echo "$imp2<br>";
}

echo "<br>";
echo '<hr>';
