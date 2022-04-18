<div class="titulo">Básico Array</div>

<?php
echo '20-09-2021<br><br>';

$lista = array(1, 2, 3.4, "Curso PHP");
echo $lista . "<br>";
var_dump($lista);
echo "<br>";
print_r($lista);

$lista[0] = 123;

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>';

var_dump($lista[4]);

$texto = 'Esse e um teste!';
echo '<br>' . $texto[0];
