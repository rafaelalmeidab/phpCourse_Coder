<div class="titulo">Error Handler</div>

<?php
echo '03-10-2021<br><hr>';

//ini_set('display_errors', 1);
error_reporting(E_ERROR);
//echo 4 / 0 . '<br>';

error_reporting(~E_ALL);
//echo 4 / 0 . '<br><hr>';

error_reporting(E_ALL);
//echo 4 / 0 . '<br>';
//include 'arquivoInexistente.php';

function filtrarMensagem($errno, $errstring)
{
    $text = 'include';
    //$text = 'by zero';

    return !!strpos(" $errstring", $text);
}

set_error_handler('filtrarMensagem', E_WARNING);

echo '<hr>';

restore_error_handler();

echo 4 / 0 . '<br>';
include 'arquivoInexistente.php';
