<div class="titulo">Traits #2</div>

<?php
    //Trait serve para reutilizacao de codigo sem dependencia de heranca
    trait validacao{
        public function validarString($str){
            return isset($str) && $str != '';
        }
    }

    trait segundaValidacao{
        public function validarString($str){
            return isset($str) && trim($str);
        }
    }

    class Usuario{
        use validacao, segundaValidacao{
            segundaValidacao::validarString insteadOf validacao;

            validacao::validarString as validacaoSimples;
        }
    }

    $user = new Usuario();
    var_dump($user->validarString(' '));
    echo "<br>";
    var_dump($user->validacaoSimples(' '));
?>