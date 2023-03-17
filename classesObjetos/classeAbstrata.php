<div class="titulo">Classe Abstrata</div>

<?php

    abstract class Abstrata{
        abstract public function metodo1();
        protected abstract function metodo2($parametro);
    }

    abstract class FilhaAbstrata extends Abstrata{
        public function metodo1(){
            echo "Executando metodo1()<br>";
        }

        public abstract function metodo3();
    }

    class Concreta extends FilhaAbstrata{
        public function metodo1(){
            echo "Executando metodo1() extendido<br>";
            parent::metodo1();
        }

        protected function metodo2($parametro){
            echo "Executando metodo2(), com parametro {$parametro}<br>";
        }

        public function metodo3(){
            echo "Executando metodo3()<br>";
            $this->metodo2("interno");
        }
    }

    $c = new Concreta();
    $c->metodo1();
    // $c->metodo2("externo"); //Protegido, passa apenas por heranca
    $c->metodo3();
    echo "<br>";    

    var_dump($c instanceof Concreta);
    var_dump($c instanceof FilhaAbstrata);
    var_dump($c instanceof Abstrata);

    echo "Fim!<br>";
?>