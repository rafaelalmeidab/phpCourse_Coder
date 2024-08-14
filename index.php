<?php

include('session-cookie/sessao.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="resources/css/estilo.css">
    <title>Curso PHP</title>
</head>

<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <nav class="navegacao">
        <span class='usuario'>Usuário : <?= $_SESSION['usuario'] ?></span>
        <a href="logout.php" class="vermelho">Sair</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo vermelho">
                    <h3>Seção 17: Banco de Dados</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=db&file=criarBanco">
                                Criando Banco de Dados
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Seção 16: Formulário</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=form&file=criandoFormulario">
                                Criando Formulário
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>Seção 15: API</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=api&file=datas01">
                                Datas #1
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=api&file=datas02">
                                Datas #2
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=api&file=escreverArquivo">
                                Escrever Arquivo
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=api&file=lerArquivo">
                                Ler Arquivo
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=api&file=uploadArquivo">
                                Upload Arquivo
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=api&file=downloadArquivo">
                                Download Arquivo
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=api&file=listarImagens">
                                Listar Imagens
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Seção 14: Sessão & Cookie</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=session-cookie&file=sessao1">
                                Sessão #1
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=session-cookie&file=gerenciamentoSessao">
                                Gerenciamento da Sessão
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo verde">
                    <h3>Seção 13: Tratamento de Erro</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=error-treatment&file=tryCatch">
                                Try/Catch
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=error-treatment&file=errosPersonalizados">
                                Erros Personalizados
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=error-treatment&file=desafioIntDiv">
                                Desafio IntDiv
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=error-treatment&file=errorHandler">
                                Error Handler
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Seção 12: Namespace</h3>
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
                    <h3>Seção 11: Includes</h3>
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
                                Desafio Includes
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo verde">
                    <h3>Seção 10: Orientação a Objetos</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=classes-objects&file=primeiraClasse">
                                Primeira Classe
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classes-objects&file=desafioClasseData">
                                Desafio Classe Data
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classes-objects&file=construtorDestrutor">
                                Construtor/Destrutor
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classes-objects&file=heranca">
                                Herança
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classes-objects&file=encapsulamento">
                                Encapsulamento
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classes-objects&file=membrosEstaticos">
                                Membros Estáticos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classes-objects&file=interface">
                                Interface
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classes-objects&file=classeAbstrata">
                                Classe Abstrata
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=-objects&file=desafioSeteErros">
                                Desafio 7 Erros
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classes-objects&file=modificadorFinal">
                                Modificador Final
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classes-objects&file=traits">
                                Traits #1
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classes-objects&file=traits2">
                                Traits #2
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classes-objects&file=metodosMagicos">
                                Métodos Mágicos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=classes-objects&file=polimorfismo">
                                Polimorfimo
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho-escuro">
                    <h3>Seção 9: Funções</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=functions&file=escopo">
                                Funções & Escopo
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=functions&file=argumentoRetorno">
                                Argumentos & Retornos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=functions&file=desafioPalindromo">
                                Desafio Palíndromo
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=functions&file=argumentoVariavel">
                                Argumentos & Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=functions&file=argumentoPadrao">
                                Argumento Padrão
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=functions&file=declaraTipos">
                                Declarando Tipos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=functions&file=funcaoAnonima">
                                Funções Anônimas
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=functions&file=closureCallable">
                                Closure & Callable
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=functions&file=recursividade">
                                Recursividade
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=functions&file=desafioBuscaRecursiva">
                                Desafio Busca Recursiva
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=functions&file=retornandoFuncao">
                                Retornando Uma Função
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=functions&file=mapFilter">
                                Map & Filter
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo verde-escuro">
                    <h3>Seção 8: Estruturas de Controle #2</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=structures2&file=for">
                                Laço For
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=structures2&file=desafioFor">
                                Desafio For
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=structures2&file=foreach">
                                Foreach
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=structures2&file=breakContinue">
                                Break/Continue
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=structures2&file=desafioImpressao">
                                Desafio Impressão
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=structures2&file=whileDoWhile">
                                While/Do While
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=structures2&file=desafioTabela">
                                Desafio Tabela #1
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=structures2&file=desafioTabela2">
                                Desafio Tabela #2
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>Seção 7: Arrays</h3>
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
                <div class="modulo roxo">
                    <h3>Seção 6: Estruturas de Controle #1</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=structures&file=6-68">
                                If Else
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=structures&file=6-70">
                                Op. Relacionais
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=structures&file=6-71">
                                Desafio PI
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=structures&file=6-74">
                                Op. Lógicos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=structures&file=6-76">
                                $_GET/$_POST
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=structures&file=6-79">
                                Operador Ternário
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=structures&file=6-80">
                                Switch
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=structures&file=6-81">
                                Desafio Switch
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Seção 5: Variáveis</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variables&file=5-52">
                                Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variables&file=5-54">
                                Desafio Equação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variables&file=5-56">
                                Atribuições
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variables&file=5-57">
                                Interpolação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variables&file=5-58">
                                Variáveis Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variables&file=5-62">
                                Valor vs. Referência
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variables&file=5-63">
                                Constantes
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Seção 4: Tipos Básicos Curso PHP</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=types&file=int">
                                Tipo Inteiro
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=types&file=float">
                                Tipo Float
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=types&file=aritmeticas">
                                Op. Aritméticas
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=types&file=desafio_precedendia">
                                Desafio Precedência
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=types&file=string">
                                Tipo String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=types&file=desafio_string">
                                Desafio String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=types&file=booleano">
                                Tipo Booleano
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=types&file=conversoes">
                                Conversões
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo verde">
                    <h3>Seção 3: Integrando PHP com HTML & CSS</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basics&file=ola">
                                Olá PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basics&file=html">
                                Integração HTML
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basics&file=css">
                                Integração CSS
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basics&file=comentarios">
                                Comentários PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basics&file=desafio">
                                Desafio
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