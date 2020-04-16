<?php
include '../model/servicos.class.php';
include '../dao/servicosdao.class.php';

$servicos = new Servicos();

// $servicos->idServicos = ;
$servicos->tipoServico = $_POST['tipoServico'];
$servicos->descricaoServico = $_POST['descricaoServico'];
$servicos->nomeMecanico = $_POST['nomeMecanico'];


$servicosDAO = new servicosDAO;
$servicosDAO->cadastrar($servicos);
echo "<br>Serviço cadastrado com sucesso!";
echo $servicos;