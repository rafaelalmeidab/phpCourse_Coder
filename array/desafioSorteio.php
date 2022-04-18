<div class="titulo">Desafio Sorteio</div>

<?php
echo '21-09-2021<br><br>';

$nome = array("Elza", "Catchuco", "Cinderela", "Djonga");

$indice = array_rand($nome);
echo "<div center><h1>$nome[$indice]</h1></div>";
?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>