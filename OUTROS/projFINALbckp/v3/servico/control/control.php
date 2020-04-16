<?php
include '../model/servico.class.php';
include '../dao/servicodao.class.php';

$servico = new Servico();

//$servico->idServico = ;
$servico->descricaoServico = $_POST['descricaoServico'];
$servico->filial = $_POST['filial'];
$servico->nomeMecanico = $_POST['nomeMecanico'];
$servico->carro = $_POST['carro'];
$servico->cor = $_POST['cor'];
$servico->placa = $_POST['placa'];
$servico->tipoCombustivel = $_POST['tipoCombustivel'];
$servico->urgencia = $_POST['urgencia'];

$servicoDAO = new servicoDAO;
$servicoDAO->cadastrar($servico);
echo "<br>Serviço cadastrado com sucesso!";
echo $servico;