<div class="titulo">Desafio Classe Data</div>

<?php

    class Data{
        public $dia = 1;
        public $mes = "Janeiro";
        public $ano = 1970;

        public function apresentarData(){
            echo "Dia: {$this->dia} Mês: {$this->mes} Ano: {$this->ano}";
        }
    }

    $mostraData = new Data();
    echo $mostraData->apresentarData() . "<br>";

    $mostraData2 = new Data();
    $mostraData2->dia = 9;
    $mostraData2->mes = "Janeiro";
    $mostraData2->ano = 1996;
    echo $mostraData2->apresentarData() . "<br>";

    $mostraData3 = new Data();
    $mostraData3->dia = 17;
    $mostraData3->mes = "Fevereiro";
    $mostraData3->ano = 1961;
    echo $mostraData3->apresentarData() . "<br>";


    ?>