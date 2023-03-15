<div class="titulo">Herança</div>

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

    class Usuario extends Pessoa{
        public $login;
        public $email;

        function __construct($nome, $idade, $login, $email){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->login = $login;
            $this->email = $email;
        }

        function __destruct()
        {
            echo "<br>Destruct Usuário!<br>";
        }

        /*
        public function apresentarPessoa(){
            return "{$this->nome}, {$this->idade}, {$this->login}, {$this->email}";
        }
        */

        public function apresentarPessoa(){
            echo "@{$this->login}: ";
            parent::apresentarPessoa();
        }
        
        
    }

    $usuario = new Usuario("Rafael", 27, "rafaelalmeidab", "rafaelalmeidab@hotmail.com");
    //Se eu comentar apresentarPessoa() definida na classe Usuario, em seguida rodar o echo abaixo
    //a variavel usuario ira herdar a funcao apresentarPessoa() da classe Pessoa
    echo $usuario->apresentarPessoa();

?>