<div class="titulo">Include Once / Require Once</div>

<?php
echo '03-10-2021<br><hr>';

ini_set('display_errors', 1);

include("includeOnceArquivo.php");
require("includeOnceArquivo.php");

echo "<br>Variável = '{$var}'<br>";
$var = "Variável alterada";
echo "Variável = '{$var}'<br>";

include("includeOnceArquivo.php");
echo "<br>Variável = '{$var}'<br>";

include_once("includeOnceArquivo.php");
echo "<br>Variável = '{$var}'<br>";

require_once("includeOnceArquivo.php");
echo "<br>Variável = '{$var}'<br>";
