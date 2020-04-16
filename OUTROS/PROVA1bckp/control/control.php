<?php
include "../model/atleta.class.php";
include "../util/validacao.class.php";

$contador= 0;
if(!Validacao::validarNome($_POST['nome'])) {
    $contador++;
} if(!Validacao::validarSexo($_POST['sexo'])) {
    $contador++;
} if(!Validacao::validarValor($_POST['valor'])) {
    $contador++;
} if(!Validacao::validarPace($_POST['pace'])) {
    $contador++;
} if(!Validacao::validarModalidade($_POST['modalidade'])) {
    $contador++;
} if(!Validacao::validarForma($_POST['forma'])) {
    $contador++;
} if(!Validacao::validarParcelas($_POST['parcelas'])) {
    $contador++;
}

if($contador== 0) {
  $atleta= new Atleta;

  $atleta->nome = $_POST['nome'];
  $atleta->sexo = $_POST['sexo'];
  $atleta->valor = $_POST['valor'];
  $atleta->modalidade = $_POST['modalidade'];
  $atleta->forma = $_POST['forma'];
  $atleta->parcelas = $_POST['parcelas'];
  $atleta->pace = $_POST['pace'];

  header("location:../resposta.php?nome=$atleta->nome&sexo=$atleta->sexo&valor=$atleta->valor&modalidade=$atleta->modalidade&parcelas=$atleta->parcelas&forma=$atleta->forma&pace=$atleta->pace&calcularVezes={$atleta->calcularVezes()}&verificarForma={$atleta->verificarForma()}&verificarModalidade={$atleta->verificarModalidade()}");
}else {
    header("location:../erro.php?erro=Erro! Dado(s) inválido(s).");
}
?>
