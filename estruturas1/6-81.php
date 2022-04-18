<div class="titulo">Desafio Switch #1</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km -> Milha</option>
        <option value="milha-km">Milha -> Km</option>
        <option value="km-metro">Km -> Metro</option>
        <option value="metro-km">Metro -> Km</option>
        <option value="cel-fah">Celsius -> Fahrenheit</option>
        <option value="fah-cel">Fahrenheit -> Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form>* {
        font-size: 1.8rem;
    }
</style>

<?php

$categoria = $_POST['conversao'];
$param = $_POST['param'] == '' ? 0.0 : $_POST['param'];

echo $param . " - " . $categoria . '<br>';

if ($param == '') {
    $param = 0;
}

switch ($categoria) {
    case 'km-milha':
        $ans = $param * 0.6213;
        break;

    case 'milha-km':
        $ans = $param / 0.6213;
        break;

    case 'km-metro':
        $ans = $param * 1000;
        break;
    case 'metro-km':
        $ans = $param / 1000;
        break;
    case 'cel-fah':
        $ans = ($param * (9 / 5)) + 32;
        break;
    case 'fah-cel':
        $ans = ($param - 32) * (5 / 9);
        break;
}

//$result = number_format($ans, 2, ',', '.');
echo "<p>$ans</p>";
