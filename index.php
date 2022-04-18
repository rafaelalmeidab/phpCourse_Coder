<?php

session_start();
if (!$_SESSION['usuario']) {
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso PHP</title>
</head>

<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <nav class="navegacao">

    </nav>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo laranja">
                    <h3>API</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=namespace&file=basicoNamespace">
                                Básico Namespace
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=namespace&file=subNamespace">
                                Sub-Namespace
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=namespace&file=useAs">
                                Use/As
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Sessão & Cookie</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=sessaoCookie&file=sessao1">
                                Sessão #1
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=sessaoCookie&file=gerenciamentoSessao">
                                Gerenciamento da Sessão
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo verde">
                    <h3>Tratamento de Erro</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tratamentoErro&file=tryCatch">
                                Try/Catch
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tratamentoErro&file=errosPersonalizados">
                                Erros Personalizados
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tratamentoErro&file=desafioIntDiv">
                                Desafio IntDiv
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tratamentoErro&file=errorHandler">
                                Error Handler
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Namespace</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=namespace&file=basicoNamespace">
                                Básico Namespace
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=namespace&file=subNamespace">
                                Sub-Namespace
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=namespace&file=useAs">
                                Use/As
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Includes</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=includes&file=includes_">
                                Includes
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=includes&file=includeFuncao">
                                Includes em Função
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=includes&file=includeRequire">
                                Include vs Require
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=includes&file=includeRetorno">
                                Include com Retorno
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=includes&file=includeOnceRequireOnce">
                                Include Once/Require Once
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=includes&file=desafioInclude">
                                Desafio Módulo - COMEÇAR POO PHP PARA FINALIZAR AQUI
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo verde">
                    <h3>Orientação a Objetos</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=escopo">
                                Funções & Escopo
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=argumentoRetorno">
                                Argumentos & Retornos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=desafioPalindromo">
                                Desafio Palíndromo
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=argumentoVariavel">
                                Argumentos & Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=argumentoPadrao">
                                Argumento Padrão
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=declaraTipos">
                                Declarando Tipos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=funcaoAnonima">
                                Funções Anônimas
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=closureCallable">
                                Closure & Callable
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=recursividade">
                                Recursividade
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=desafioBuscaRecursiva">
                                Desafio Busca Recursiva
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=retornandoFuncao">
                                Retornando Uma Função
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=mapFilter">
                                Map & Filter
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho-escuro">
                    <h3>Funções</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=escopo">
                                Funções & Escopo
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=argumentoRetorno">
                                Argumentos & Retornos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=desafioPalindromo">
                                Desafio Palíndromo
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=argumentoVariavel">
                                Argumentos & Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=argumentoPadrao">
                                Argumento Padrão
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=declaraTipos">
                                Declarando Tipos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=funcaoAnonima">
                                Funções Anônimas
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=closureCallable">
                                Closure & Callable
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=recursividade">
                                Recursividade
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=desafioBuscaRecursiva">
                                Desafio Busca Recursiva
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=retornandoFuncao">
                                Retornando Uma Função
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=funcoes&file=mapFilter">
                                Map & Filter
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo verde-escuro">
                    <h3>Estruturas de Controle #2</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=estruturas2&file=for">
                                Laço For
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=estruturas2&file=desafioFor">
                                Desafio For
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=estruturas2&file=foreach">
                                Foreach
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=estruturas2&file=breakContinue">
                                Break/Continue
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=estruturas2&file=desafioImpressao">
                                Desafio Impressão
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=estruturas2&file=whileDoWhile">
                                While/Do While
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=estruturas2&file=desafioTabela">
                                Desafio Tabela #1
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=estruturas2&file=desafioTabela2">
                                Desafio Tabela #2
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>Array</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=array&file=basicoArray">
                                Básico Array
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=mapaArray">
                                Array como Mapas
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=desafioIndex">
                                Desafio Index
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=desafioMeses">
                                Desafio Meses
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=operacoesArray">
                                Operações com Array
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=desafioSorteio">
                                Desafio Sorteio
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=multidimensionais">
                                Arrays Multidimensionais
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=arraysConstantes">
                                Arrays Constantes
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=getArray">
                                $_GET Array
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=postArray">
                                $_POST Array
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=comparacaoArray">
                                Comparação Arrays
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo verde">
                    <h3>Básico</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">
                                Olá PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">
                                Integração HTML
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">
                                Integração CSS
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">
                                Comentários PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio">
                                Desafio
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Estruturas de Controle #1</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=estruturas1&file=6-68">
                                If Else
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=estruturas1&file=6-70">
                                Op. Relacionais
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=estruturas1&file=6-71">
                                Desafio PI
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=estruturas1&file=6-74">
                                Op. Lógicos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=estruturas1&file=6-76">
                                $_GET/$_POST
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=estruturas1&file=6-79">
                                Operador Ternário
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=estruturas1&file=6-80">
                                Switch
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=estruturas1&file=6-81">
                                Desafio Switch
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Tipos</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=int">
                                Tipo Inteiro
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=float">
                                Tipo Float
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=aritmeticas">
                                Op. Aritméticas
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_precedendia">
                                Desafio Precedência
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=string">
                                Tipo String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_string">
                                Desafio String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=booleano">
                                Tipo Booleano
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=conversoes">
                                Conversões
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Variáveis</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=5-52">
                                Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=5-54">
                                Desafio Equação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=5-56">
                                Atribuições
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=5-57">
                                Interpolação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=5-58">
                                Variáveis Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=5-62">
                                Valor vs. Referência
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=5-63">
                                Constantes
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>

</html>