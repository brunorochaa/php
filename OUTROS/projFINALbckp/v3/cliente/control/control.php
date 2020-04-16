<?php
include '../model/cliente.class.php';
include '../dao/clientedao.class.php';

$cliente = new Cliente();

// $cliente->idCliente = ;
$cliente->nome = $_POST['nome'];
$cliente->sexo = $_POST['sexo'];
$cliente->idade = $_POST['idade'];
$cliente->cep = $_POST['cep'];
$cliente->numeroCasa = $_POST['numeroCasa'];
$cliente->telefone = $_POST['telefone'];

$clienteDAO = new clienteDAO;
$clienteDAO->cadastrar($cliente);
echo "<br>Cliente cadastrado com sucesso!";
echo $cliente;