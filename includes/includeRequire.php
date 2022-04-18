<div class="titulo">Include vs Require</div>

<?php
ini_set('display_errors', 0);
echo '03-10-2021<br><hr>';

echo 'Carregando: arquivoInexistente...<br>';
include("arquivoInexistente.php");
echo 'Usando include com arquivoInexistente...<br>';

require("arquivoInexistente.php");
echo 'Usando require com arquivoInexistente...<br>';

echo "Não achou mesmo...<br>";
