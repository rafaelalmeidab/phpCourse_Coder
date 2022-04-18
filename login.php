<?php
session_start();


$_SESSION['erros'] = '';
$_SESSION['user'] = '';
$email = '';
$senha = '';

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($_POST['email']) {
    $users = [
        [
            "nome" => "Rafael Almeida",
            "email" => "rafael@hotmail.com",
            "senha" => "123"
        ],
        [
            "nome" => "Teste",
            "email" => "teste@teste.com",
            "senha" => "teste"
        ]
    ];

    foreach ($users as $user) {
        $emailValido = $email === $user['email'];
        $senhaValido = $senha === $user['senha'];

        if ($emailValido && $senhaValido) {
            $_SESSION['erros'] = null;
            $_SESSION['user'] = $user['nome'];
            header('location: index.php');
        }
    }

    if (!$_SESSION['user']) {
        $_SESSION['erros'] = 'Usuário/senha inválido!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/login.css">
    <title>Curso PHP</title>
</head>

<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja bem-vindo!</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se!</h3>
            <?php if ($_SESSION['erros']) { ?>
                <div class="erros">
                    <?php
                    $erros = $_SESSION['erros'];
                    foreach ($erros as $erro) { ?>
                        <p><?= $erro ?></p>
                    <?php } ?>
                </div>
            <?php } ?>

            <form action="#" method="post">
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>

        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>

</html>