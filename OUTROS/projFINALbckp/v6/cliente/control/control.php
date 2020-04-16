<?php
include '../model/cliente.class.php';
include '../dao/clientedao.class.php';
include '../util/padronizacao.class.php';

$cliente = new Cliente();

// $cliente->idCliente = ;
$cliente->nome = Padronizacao::padronizarMaiusculasMinusculas(Padronizacao::juntarNome($_POST['nome'],$_POST['sobrenome']));
$cliente->sexo = $_POST['sexo'];
$cliente->dataNascimento = $_POST['dataNascimento'];
$cliente->cep = $_POST['cep'];
$cliente->numeroCasa = $_POST['numeroCasa'];
$cliente->telefone = $_POST['telefone'];

$clienteDAO = new clienteDAO;
$clienteDAO->cadastrar($cliente);
//echo "<br>Cliente cadastrado com sucesso!";
//echo $cliente;
header("location:../buscar.php");