<div class="titulo">Retornando Uma Função</div>

<?php
echo '03-10-2021<br><hr>';

function soma($a)
{
    return function ($b) use ($a) {
        return $a + $b;
    };
}

echo soma(13)(3);

$doisMais = soma(2);
echo '<br>' . $doisMais(10);
echo '<br>' . $doisMais(20);
