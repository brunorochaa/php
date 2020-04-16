<?php
include "../model/pessoa.class.php";
include "../util/validacao.class.php";


$contador= 0;
if(!Validacao::validarNome($_POST['nome'])) {
    $contador++;
}

if(!Validacao::validarSexo($_POST['sexo'])) {
    $contador++;
}

if(!Validacao::validarIdade($_POST['idade'])) {
    $contador++;
}

if(!Validacao::validarAltura($_POST['altura'])) {
    $contador++;
}

if(!Validacao::validarPeso($_POST['peso'])) {
    $contador++;
}



if($contador== 0) {
    $pessoa= new Pessoa;

    $pessoa->nome=$_POST['nome'];
    $pessoa->sexo=$_POST['sexo'];
    $pessoa->idade=$_POST['idade'];
    $pessoa->altura=$_POST['altura'];
    $pessoa->peso=$_POST['peso'];

    header("location:../resposta.php?nome=$pessoa->nome&sexo=$pessoa->sexo&idade=$pessoa->idade&altura=$pessoa->altura&peso=$pessoa->peso&calcularImc={$pessoa->calcularImc()}&verificarImc={$pessoa->verificarImc()}");
}else {
    header("location:../erro.php?erro=Erro! Dado(s) inválido(s).");
}
?>