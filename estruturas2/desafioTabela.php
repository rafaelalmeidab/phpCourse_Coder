<div class="titulo">Desafio Tabela #1</div>

<?php
echo '22-09-2021<br><hr>';

$matrix = [
    ['1', '2', '3', '4', '5'],
    ['6', '7', '8', '9', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20']
];

foreach ($matrix as $linha) {
    foreach ($linha as $val) {
        echo "$val ";
    }
    echo '<br>';
}

?>

<table>

    <?php
    foreach ($matrix as $linha) {
        echo '<tr>';
        foreach ($linha as $val) {
            echo "<td>$val</td>";
        }
        echo '</tr>';
    }
    ?>

</table>

<table>

    <?php
    echo '<hr><br>';
    foreach ($matrix as $i => $linha) {
        $style = $i % 2 === 1 ? 'background-color: lightgreen;' : '';
        echo "<tr style='{$style}'>";

        foreach ($linha as $val) {
            echo "<td>$val</td>";
        }
        echo '</tr>';



        echo '<tr>';

        echo '</tr>';
    }
    ?>

</table>


<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>