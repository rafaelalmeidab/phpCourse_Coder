<div class="titulo">Primeira Classe</div>

<?php
    // phpinfo();
    // exit();
    
    class Cliente{
        //Alternativo
        public $nome = "";
        public $idade = 18;
    
        // public function __construct($nome, $idade){
        // {
        //     $nome = $this->nome;
        //     $idade = $this->idade;
        // }

        public function apresentarCliente(){
            echo "Nome:  {$this->nome} Idade: {$this->idade}<br>";
        }
    }
    



    $cliente1 = new Cliente();
    $cliente1->apresentarCliente();
    
    echo "<br>";
    $cliente2 = new Cliente();
    $cliente2->nome = "Rafael";
    $cliente2->idade = 27;
    $cliente2->apresentarCliente();

    
    echo "<br>";
    $cliente3 = new Cliente;
    $cliente3->nome = "Gabriel";
    $cliente3->idade = 28;
    $cliente3->apresentarCliente();

    echo "<br>";
    $cliente4 = new Cliente("Maria Fernanda", 5);
    $cliente4->apresentarCliente();


?>