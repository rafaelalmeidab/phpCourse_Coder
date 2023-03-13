<div class="titulo">Ler Arquivo</div>

<?php
   
   $arquivo = fopen('api/teste.txt', 'r');
   echo fread($arquivo, 10);
   echo fread($arquivo, 10);
   echo fread($arquivo, 10);
   echo fread($arquivo, 10);
   fclose($arquivo);

   echo '<br>';

   $arquivo = fopen("api/teste.txt", 'r');
   echo fread($arquivo, filesize('api/teste.txt'));
   $tamanho = filesize('api/teste.txt');
   echo '<hr>' . $tamanho . '<hr>';
   echo fread($arquivo, $tamanho);
   fclose($arquivo);

   $arquivo = fopen('api/teste.txt', 'r');
   echo fgets($arquivo) . '<br>';
   echo fgets($arquivo) . '<br>';
   echo fgets($arquivo) . '<br>';
   var_dump(fgets($arquivo)) . '<br>';
   fclose($arquivo);
   
   echo '<hr>';

   $arquivo = fopen('api/teste.txt', 'r');
   while(!feof($arquivo)){
    echo fgets($arquivo) . '<br>';
   }

   fclose($arquivo);
  /*
   echo '<hr>';

   $arquivo = fopen('api/teste.txt', 'r');
 
   while(!feof($arquivo)){
    echo fgetc($arquivo) . '<br>';
   }


   fclose($arquivo);
   */
   echo '<hr>';

   $arquivo = fopen('api/teste.txt', 'r+');
   echo fgets($arquivo) . '<br>';
   echo fgets($arquivo) . '<br>';   
   echo fgets($arquivo) . '<br>';
   echo fgets($arquivo) . '<br>';
   fwrite($arquivo, "\nAdicionando nova linha ao arquivo.\n");
   fclose($arquivo);

   ?>