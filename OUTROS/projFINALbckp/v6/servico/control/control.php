<?php
include '../model/servico.class.php';
include '../dao/servicodao.class.php';
include '../util/padronizacao.class.php';

$servico = new Servico();

//$servico->idServico = ;
$servico->descricaoServico = Padronizacao::padronizarMaiusculasMinusculas($_POST['descricaoServico']);
$servico->filial = $_POST['filial'];
$servico->nomeMecanico = Padronizacao::padronizarMaiusculasMinusculas(Padronizacao::juntarNomeMecanico($_POST['nome'],$_POST['sobrenome']));
$servico->carro = Padronizacao::padronizarMaiusculasMinusculas(Padronizacao::juntarCarro($_POST['marca'],$_POST['modelo']));
$servico->cor = $_POST['cor'];
$servico->placa = $_POST['placa'];
$servico->tipoCombustivel = $_POST['tipoCombustivel'];
$servico->urgencia = $_POST['urgencia'];

$servicoDAO = new servicoDAO;
$servicoDAO->cadastrar($servico);
//echo "<br>Serviço cadastrado com sucesso!";
//echo $servico;
header("location:../buscar.php");