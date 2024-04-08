<?php

session_start();
print_r($_SESSION);

?>

<p>
<h1><b>Nome: </b> <?= $_SESSION['nome'] ?></h1>
</p>
<p>
<h1><b>Email: </b> <?= $_SESSION['email'] ?></h1>
</p>

<?php

$_SESSION['email'] = 'TROCADILHO@teste';

?>

<p>
    <a href='\PHP_Udemy\session-cookie\sessao1.php'>
        Voltar
    </a>
</p>

<p>
    <a href='\PHP_Udemy\session-cookie\sessao3.php'>
        Limpar Sessão
    </a>
</p>