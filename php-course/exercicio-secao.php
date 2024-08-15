<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="php-course/recursos-secao/css-secao/estilo-secao.css">
  <link rel="stylesheet" href="php-course/recursos-secao/css-secao/exercicio-secao.css">
  <title>Curso PHP</title>
</head>
<body class="exercicio">
  <header class="cabecalhosecaoex">
    <h1>Curso PHP</h1>
    <h2>Visualização do Exercício</h2>
  </header>
  <nav class="navegacaosecaoex">
    <a href="#" class="azul">Sem Formatação</a>
    <a href="index-secao.php" class="azul">Voltar</a>
  </nav>
  <main class="principalsecaoex">
    <div class="conteudosecaoex">
      <?php
        include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
      ?>
    </div>
  </main>
  <footer class="rodapesecaoex">
      Rafael Almeida © <?= date('Y'); ?>
  </footer>
</body>
</html>