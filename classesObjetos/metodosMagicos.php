<div class="titulo">Métodos Mágicos</div>

<?php

    class Pessoa{
        public $nome;
        public $idade;

        function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;

            echo "Construtor invocado!<br>";
        }

        function __destruct(){
            echo "Objeto destruído!<br>";
        }

        public function __toString(){
            return "{$this->nome} tem {$this->idade} anos.";
        }

        public function apresentarPessoa(){
            echo $this . "<br>";
        }

        public function __get($attr){
            echo "Atributo não declarado: {$attr}<br>";
            // return $attr;
        }

        //Metodo e invocado sempre que atributo nao existe
        public function __set($attr, $val){
            echo "Atributo não declarado: {$attr}/{$val}<br>";
            // return $attr;
        }

        //Metodo e invocado sempre que metodo nao existe
        public function __call($mthd, $params){
            echo "Tentando executar método não declarado: {$mthd}<br>";
            echo "com os seguintes parâmetros<br>";
            print_r($params);
            // return $attr;
        }
    }

    $pessoa = new Pessoa("Rafael", 27);
    $pessoa->apresentarPessoa(); //Chamando __toString
    echo $pessoa;   //Chamando __toString
    $pessoa->nome = "Angelo"; //Chamando __toString
    $pessoa->idade = 64;
    $pessoa->nomeCompleto = "Teste";  //Chamando __set
    $pessoa->nomeCompleto; //Chamando __get
    echo "<br>" . $pessoa->nome . "<br>"; //Chama método diretamente sem __get

    $pessoa->exec(1, "teste", true, [1,2,3]); //Chamando __call
    echo "<br>";
    $pessoa = null;
?>