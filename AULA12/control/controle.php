<?php
include "../model/carro.class.php";
include "../util/padronizacao.class.php";
include "../dao/carrodao.class.php";

$carro = new Carro;

$carro->marca = Padronizacao::padronizarMarca($_POST['marca']);
$carro->modelo = Padronizacao::padronizarModelo($_POST['modelo']);
$carro->cor = Padronizacao::padronizarCor($_POST['cor']);
$carro->ano = $_POST['ano'];
$carro->chassi = $_POST['chassi'];

$carroDAO = new carroDAO;
$carroDAO->cadastrar($carro);

echo "Carro cadastrado com sucesso!";
echo $carro;
?>