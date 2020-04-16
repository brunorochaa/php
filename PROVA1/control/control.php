<?php
include "../model/atleta.class.php";
include "../util/validacao.class.php";

$contador= 0;
if(!Validacao::validarNome($_POST['nome'])) {
    $contador++;
} if(!Validacao::validarSexo($_POST['sexo'])) {
    $contador++;
} if(!Validacao::validarModalidade($_POST['modalidade'])) {
    $contador++;
} if(!Validacao::validarPace($_POST['pace'])) {
    $contador++;
} if(!Validacao::validarValor($_POST['valor'])) {
    $contador++;
} if(!Validacao::validarForma($_POST['forma'])) {
    $contador++;
} if(!Validacao::validarParcelas($_POST['parcelas'])) {
    $contador++;
}

if($contador== 0) {
    $atleta= new Atleta;

    $atleta->nome=$_POST['nome'];
    $atleta->sexo=$_POST['sexo'];
    $atleta->modalidade=$_POST['modalidade'];
    $atleta->pace=$_POST['pace'];
    $atleta->valor=$_POST['valor'];
    $atleta->forma=$_POST['forma'];
    $atleta->parcelas=$_POST['parcelas'];
    
    header("location:../resposta.php?nome=$atleta->nome&sexo=$atleta->sexo&modalidade=$atleta->modalidade&pace=$atleta->pace&valor=$atleta->valor&forma=$atleta->forma&parcelas=$atleta->parcelas&verificarModalidade={$atleta->verificarModalidade()}&verificarFormaDePagamento={$atleta->verificarFormaDePagamento()}&calcularVezes={$atleta->calcularVezes()}");
}else {
    header("location:../erro.php?erro=Erro! Dado(s) inválido(s).");
}    
?>