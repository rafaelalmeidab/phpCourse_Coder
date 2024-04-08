<div class="titulo">Modificador Final</div>

<?php

    abstract class Abstrata{
        abstract public function metodo1();

        public final function metodo2(){
            echo "metodo2() final!<br>";
        }
    }

    class ClasseTeste extends Abstrata{
        public function metodo1(){
            echo "Executando metodo1()<br>";
        }

        // public function metodo2(){
        //     echo "Sobrescrevendo método final metodo2()<br>";
        // }
    }

    $exemplo = new ClasseTeste();
    $exemplo->metodo1();
    $exemplo->metodo2();

    final class ClasseUnica{
        public $attr = "Valor Classe Unica<br>";
    }

    $testeClasseUnica = new ClasseUnica();
    echo $testeClasseUnica->attr;

    // class NovaClass extends ClasseUnica{
    //     public $att2;
    // }
?>