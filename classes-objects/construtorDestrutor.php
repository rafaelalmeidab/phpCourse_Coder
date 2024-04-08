<div class="titulo">Construtor/Destrutor</div>

<?php

    class Pessoa{
        public $nome;
        public $idade;

        function __construct($novoNome, $idade)
        {
            $this->nome = $novoNome;
            $this->idade = $idade;
        }

        function __destruct()
        {
            echo "<br>Destruct!";
        }

        public function apresentarPessoa(){
            echo "{$this->nome}, {$this->idade}";
        }
    }
    
    //$pessoa2 = new Pessoa() //Problema
    
    $pessoa1 = new Pessoa("Rafael", 27);
    $pessoa1->apresentarPessoa();
    unset($pessoa1);

    echo "<br>";
        
    $pessoa2 = new Pessoa("João", 15);
    $pessoa2->apresentarPessoa();
    $pessoa2 = null;
?>