<div class="titulo">Try/Catch</div>

<?php
echo '03-10-2021<br><hr>';

//echo intdiv(7, 0);

try {
    echo intdiv(7, 0);
} catch (Error $e) {
    echo "Teve um erro aqui!<br>";
}

try {
    new Exception("Um erro muito estranho aconteceu");
    echo 7 / 0;
} catch (DivisionByZeroError $e) {
    echo "Divisão por zero <br>";
} catch (Throwable $e) {
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
} finally {
    echo 'Sempre executado!<br>';
}

echo "Continua...<br>";
