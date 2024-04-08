<div class="titulo">Gerenciamento Sessão</div>

<?php

session_start();

echo '14-10-2021<br>' . date('d-m-Y') . '<hr>';

echo session_id() . '<br>';

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo $_SESSION['contador'];

if ($_SESSION['contador'] % 5 == 0) {
    session_regenerate_id();
}

if ($_SESSION['contador'] >= 15) {
    session_destroy();
}
