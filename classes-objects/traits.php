<div class="titulo">Traits #1</div>

<?php
    //Trait serve para reutilizacao de codigo sem dependencia de heranca
    trait validacao{
        public $a = 'Valor a';
        public function validarString($str){
            return isset($str) && $str != '';
        }
    }

    trait segundaValidacao{
        public $b = 'Valor b';
        private $c = 'Valor c (privado)';
        public function segundaValidacaoString($str){
            return isset($str) && trim($str);
        }
    }

    class Usuario{
        use validacao, segundaValidacao;

        public function imprimirValorC(){
            echo $this->c;
        }
    }

    $user = new Usuario();
    var_dump($user->validarString(''));
    echo "<br>";
    var_dump($user->segundaValidacaoString(''));
    echo "<br>";
    echo $user->a, "<br>", $user->b, "<br>", $user->imprimirValorC();
?>