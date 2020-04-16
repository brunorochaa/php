<?php
include '../model/cliente.class.php';
include '../dao/clientedao.class.php';

$cliente = new Cliente();

// $cliente->idCliente = ;
$cliente->nome = $_POST['nome'];
$cliente->sexo = $_POST['sexo'];
$cliente->idade = $_POST['idade'];

$clienteDAO = new clienteDAO;
$clienteDAO->cadastrar($cliente);
echo "<br>Cliente cadastrado com sucesso!";
echo $cliente;

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