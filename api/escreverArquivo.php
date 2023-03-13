<div class="titulo">Escrever Arquivo</div>

<?php
   
   $arquivo = fopen('api/teste.txt', 'w');
   fwrite($arquivo, "Iniciando estudos sobre funções FOPEN\n");
   $str = "Segunda linha\n";
   fwrite($arquivo, $str);
   fclose($arquivo);

   //Arquivo e sobrescrito
   $arquivo = fopen('api/teste.txt', 'w');
   $str = "\nNovo conteúdo\n";
   fwrite($arquivo, $str);
   fclose($arquivo);

   $arquivo = fopen('api/teste.txt', 'a');
   $str = "com novos valores\n";
   fwrite($arquivo, $str);
   fclose($arquivo);

   ini_set("display_errors", 1);
   //Garante que arquixo e inexistente para flag 'x'
   $arquivo = fopen("api/teste2.txt", 'x');
   fwrite($arquivo, "Teste!");
   fclose($arquivo);

?>