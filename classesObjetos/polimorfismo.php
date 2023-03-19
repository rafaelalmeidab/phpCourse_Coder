<div class="titulo">Polimorfismo</div>

<?php

    abstract class Comida{
        public $peso;
    }

    class Arroz extends Comida{

    }

    class ArrozCarreteiro extends Arroz {

    }
    
    class Feijao extends Comida{
        
    }
    

    class Sorvete extends Comida{
        
    }

    class Pessoa{
        public $peso;

        function __construct($peso){
            $this->peso = $peso;
        }

        public function comer(Comida $comida){
            $this->peso = $this->peso + $comida->peso;             
        }
    }

    $comida = new Arroz();
    $comida->peso = 0.15;
    $comida2 = new ArrozCarreteiro();
    $comida2->peso = 0.4;
    $comida3 = new Sorvete();
    $comida3->peso = 0.2;
    $pessoa = new Pessoa(95);
    $pessoa->comer($comida);
    $pessoa->comer($comida2);
    $pessoa->comer($comida3);

    echo $pessoa->peso . "<br>";
?>