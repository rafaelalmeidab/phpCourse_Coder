<div class="titulo">Datas #02</div>

<?php
    $formatoData1 = 'D, d \d\e M \d\e Y';
    $formatoData2 = '%A, %d de %B de %Y';
    $formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';

    $agora = new Datetime();
    print_r($agora);
    echo "<br>";

    echo $agora->format($formatoData1) . '<br>';

    setlocale(LC_TIME, 'pt_BR');
    echo strftime($formatoData2, $agora->getTimestamp())  . '<br>';

    $varNow = new DateTime('-2 day');
    echo strftime($formatoData2, $varNow->getTimestamp()) . '<br>';
    
    $varNow->modify("+2 day");
    echo strftime($formatoData2, $varNow->getTimestamp()) . '<br>';

    $nasc = new DateTime('1996-01-09 10:00:00');
    echo strftime($formatoDataHora, $nasc->getTimestamp()) . '<br>';

    $varNow->setDate(1996, 1, 9);
    echo strftime($formatoDataHora, $varNow->getTimestamp()) . '<br>';

    $hoje = new DateTime();
    $dataPassada = new DateTime('2000-05-28');
    $dataFutura = new DateTime('2032-01-09');
    $outraData = new DateTime('2032-01-09');

    echo ($hoje > $dataFutura ? 'Maior' : 'Menor') . '<br>';
    echo ($hoje > $dataPassada ? 'Maior' : 'Menor') . '<br>';
    echo ($outraData == $dataFutura ? 'Igual' : 'Diferente') . '<br>';
    echo ($outraData === $dataFutura ? 'Igual' : 'Diferente') . '<br>';

    $timeZone = new DateTimeZone('America/Sao_Paulo');
    $agora = new DateTime(null, $timeZone);
    echo $agora->format('d/M/Y H:i:s')  . '<br>';


?>