<div class="titulo">Desafio Busca Recursiva</div>

<?php
echo '01-10-2021<br><hr>';

/*
    $array =[1 , 2, [3, 4, 5], 6, [7, [8, 9]], 10];
*/

function recursividade_arr($arr, $nivel = '>')
{
    foreach ($arr as $element) {
        if (is_array($element)) {
            recursividade_arr($element, $nivel . $nivel[0]);
        } else {
            echo "$nivel $element<br>";
        }
    }
}

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

recursividade_arr($array);
echo '<br>';
recursividade_arr($array, '#');
