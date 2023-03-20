<?php
    class Pessoa{
        public $nome;
        public $idade;

        function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        function __destruct()
        {
            echo "<br>Destruct Pessoa!<br>";
        }

        public function apresentarPessoa(){
            return "{$this->nome}, {$this->idade}";
        }
    }
?>