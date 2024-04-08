<div class="titulo">Constantes</div>

<?php

echo "19/06/2021<br><br>";

define('TAXA_JUROS', 5.9);
echo TAXA_JUROS;
echo '<br>' . $TAXA_JUROS . '!';
//TAXA_JUROS = 2.5;

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$val = 2.8;
define('NOVISSIMA_TAXA', $val);
echo '<br>' . NOVISSIMA_TAXA;

echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;
echo '<br>Linha: ' . __LINE__;
echo '<br>Arquivo: ' . __FILE__;
echo '<br>Diretorio: ' . __DIR__;
