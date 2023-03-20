<?php
    require_once("pessoa.php");

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

        public function apresentarPessoa(){
            return "{$this->nome}, {$this->idade}, {$this->login}, {$this->email}";
        }
    }
?>