<div class="titulo">Sessão #1</div>

<?php

session_start();

echo '04-10-2021<br><hr>';

print_r($_SESSION);
echo '<br><br>';

if (!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Rafael Almeida';
}

if (!$_SESSION['email']) {
    $_SESSION['email'] = 'rafaelalmeidab@hotmail.com';
}

print_r($_SESSION);

?>

<p>
    <a href='\PHP_Udemy\sessaoCookie\sessao2.php'>
        Alterar Sessão
    </a>

</p>