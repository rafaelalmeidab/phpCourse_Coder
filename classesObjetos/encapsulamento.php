<div class="titulo">Encapsulamento</div>

<?php
    class DadosEncapsulamento{
        public $attPublic = "Público";
        protected $attProtected = "Protegido";
        private $attPrivate = "Privado";

        public function mostrarDadosEncapsulamento(){
            // $this->naoMostrarDados();
            echo "Classe DadosEncapsulamento: attPublic {$this->attPublic}<br>";
            echo "Classe DadosEncapsulamento: attProtected {$this->attProtected}<br>"; 
            echo "Classe DadosEncapsulamento: attPrivate {$this->attPrivate}<br><br>"; 
        }

        private function naoMostrarDados(){
            echo "Não imprime nada!<br>";
        }

        public function MostrarDadosPorHeranca(){
            echo "Mostrando dados por herança!<br>";
        }
    }   

    $teste = new DadosEncapsulamento();
    echo $teste->attPublic . "<br>";
    // echo $teste->attProtected . "<br>";
    $teste->mostrarDadosEncapsulamento();
    // $teste->naoMostrarDados();

    echo "Fim!<br><br>";
    echo "Parte Classe B<hr>";

    class HerdaDadosEncapsulamento extends DadosEncapsulamento{
        public function mostrarHerdaDadosEncapsulamento(){
            echo "Classe HerdaDadosEncapsulamento: attPublic {$this->attPublic}<br>";
            echo "Classe HerdaDadosEncapsulamento: attProtected {$this->attProtected}<br>";
            echo "Classe HerdaDadosEncapsulamento: attPrivate {$this->attPrivate}<br>";
            // $this->MostrarDadosPorHeranca();
            
            //CHAMADA ALTERNATIVA;
            // parent::MostrarDadosPorHeranca();
        }
    }

    $teste2 = new HerdaDadosEncapsulamento();
    $teste2->mostrarHerdaDadosEncapsulamento();
    $teste2->mostrarDadosEncapsulamento();
    $teste2->MostrarDadosPorHeranca();
    
    ?>