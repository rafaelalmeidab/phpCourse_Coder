<div class="titulo">Interface</div>

<?php

    interface Animal{
        function respirar();
    }

    interface Mamifero{
        function alimentar();
    }

    interface Felino{
        function correr();
    }


    interface Canino extends Animal, Mamifero{
        function latir() : string;
    }

    class Cachorro implements Canino{
        function respirar(){
            return "Respirando oxigênio!<br>";
        }

        function latir() : string{
            return "Latiu!<br>";
        }

        function alimentar() : string{
            return "Comer!<br>";
        }

        function correr() : string{
            return "Correr!<br>";
        }
    }

    $animal1 = new Cachorro();
    echo $animal1->respirar();
    echo $animal1->latir();
    echo $animal1->alimentar();
    echo $animal1->correr();

    echo "Fim!<br><br>";

    //SE EXISTEREM 15 INTERFACES POR EXEMPLO, CADA UMA COM CONJUNTO DE METODOS DIFERENTES
    //E VOCE FIZER COM QUE A CLASSE CACHORRO (PARA ESTE EXEMPLO) IMPLEMENTE TODAS AS INTERFACES,
    //SEJA A PARTIR DE UMA INTERFACE QUE AGRUPE TODAS AS OUTRAS, OU MESMO DIRETAMENTE INTERFACE A INTERFACE,
    //E PRECISO DECLARAR CADA UMA DAS FUNCOES REPRESENTADAS NAS INTERFACES, DENTRO DA CLASSE CACHORRO
    var_dump($animal1);
    var_dump($animal1 instanceof Cachorro);
    var_dump($animal1 instanceof Canino);
    var_dump($animal1 instanceof Mamifero);
    var_dump($animal1 instanceof Animal);
    var_dump($animal1 instanceof Felino);

?>