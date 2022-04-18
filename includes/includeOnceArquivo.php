<?php
echo 'Carregando includeOnceArquivo<br>';

$var = 'Estou definida';

if (function_exists('soma')) {
    function soma($a, $b)
    {
        return $a + $b;
    }
}
