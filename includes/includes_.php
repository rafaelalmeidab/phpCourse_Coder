<div class="titulo">Includes</div>

<?php
echo '03-10-2021<br><hr>';

echo 'Executei essa linha do arquivo include_<br>';
include('includeArquivo.php');
//Se eu declarar o include mais de uma vez, e existir uma função nele. Ocorrerá problema.
//Então, utilizo da funcao  'function_exists' para solucionar tal situação!
include('includeArquivo.php');

echo soma(3, 8) . '<br>';

echo "O conteúdo da variável é {$var}.<br>";
