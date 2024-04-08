<div class="titulo">Membros Estáticos</div>

<?php

    class A{
        public $naoEstatico = "Variável de instância";
        public static $Estatico = "Variável de classe {estática}";
        
        public function mostrarA(){
            echo "Não Estático -> {$this->naoEstatico}<br>";
            // echo "Estático -> {$this->Estatico}<br>";

            //PARA ACESSAR ATRIBUTO ESTATICO
            // echo "Estático -> {self::$Estatico}<br>"; //INTERP0LACAO NAO FUNCIONADA PARA ESSE CASO
            echo "Estático -> " . self::$Estatico . "<br>";
        }

        public static function mostrarEstatico(){ //DENTRO DE UMA FUNCAO ESTATICO, SO E POSSIVEL MEMBROS ESTATICOS
            // echo "Não Estático -> {$this->$naoEstatico}<br>";
            echo "Estático -> " . self::$Estatico . "<br>";
        }
    }

    /*
    $A = new A();
    $A->mostrarA();
    $A->mostrarEstatico(); //NAO E A FORMA IDEAL, POIS ACESSA ATRAVES DE UM OBJETO
    A::mostrarEstatico();
    */

    //E POSSIVEL ACESSAR OS MEMBROS ESTATICOS DE UMA FUNCAO SEM CRIAR INSTANCIA, 
    //PELO FATO DE SEREM ESTATICOS, DIRETAMENTE DA CLASSE
    echo A::$Estatico . "<br>"; //FORMA IDEAL, ACESSANDO DIRETAMENTE PELA CLASSE
    A::$Estatico = "Alterando membro de classe!"; //FORMA IDEAL, ACESSANDO DIRETAMENTE PELA CLASSE
    A::mostrarEstatico(); //MEMBROS DE CLASSE, E PREFERIVEL ACESSAR PELA CLASSE
    //C::mostrarEstatico(); //PRECISARIA DO NOME DA CLASSE PARA EXECUTAR ACESSO A FUNCAO ESTATICA DE MEMBROS ESTATICOS


?>