<div class="titulo">Desafio 7 Erros</div>

<?php

    interface Template{
        function metodo1();
        public function metodo2($parametro);
    }

    abstract class ClasseAbstrata implements Template{
        public function metodo3(){
            echo "metodo3() funcionando!<br>";
        }

        public function metodo1(){
            echo "metodo1() funcionando!<br>";
        }

    }
    
    class Classe extends ClasseAbstrata{
        function __construct($parametro){
            $this->parametro = $parametro;
        }

        public function metodo2($parametro){
            echo "metodo2() funcionando!<br>Parametro: {$parametro}";
        }
    }
    
    $exemplo = new Classe("Teste Dados");
    $exemplo->metodo3();
    $exemplo->metodo1();
    $exemplo->metodo2("Teste parametro 2");

    echo "<br>";
    var_dump($exemplo);
?>