<?php
session_start();
include "../model/pessoa.class.php";
include "../util/padronizacao.class.php";
include "../util/validacao.class.php";

$erros = [];
if(!Validacao::validarNome($_POST['nome'])) {
    $erros[] = "Nome inválido!";
}

if(!Validacao::validarNome($_POST['sobrenome'])) {
    $erros[] = "Sobrenome inválido!";
}

if(!Validacao::validarData($_POST['dia'])) {
    $erros[] = "Dia inválido!";
}

if(!Validacao::validarData($_POST['mes'])) {
    $erros[] = "Mês inválido!";
}

if(!Validacao::validarData($_POST['ano'])) {
    $erros[] = "Ano inválido!";
}

if(count($erros) == 0) {
    $pessoa = new Pessoa();
    $pessoa->nome = Padronizacao::padronizarNome(Padronizacao::juntarNome($_POST['nome'],$_POST['sobrenome']));
    $pessoa->data = Padronizacao::juntarData($_POST['dia'],$_POST['mes'],$_POST['ano']);
    echo "<p>Nome:".$pessoa->nome;
    echo "<br>Data: ".$pessoa->data."</p>";
    $_SESSION['mensagem'] = "Cadastro efetuado com sucesso!";
    $_SESSION['pessoa'] = serialize($pessoa);
    $_SESSION['data'] = serialize($data);
    header("location:../resposta.php");
} else {
    $_SESSION['post'] = serialize($_POST);
    $_SESSION['erros'] = serialize($erros);
    header("location:../cadastro.php");
}
?>