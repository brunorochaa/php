<?php
include "../model/carro.class.php";
include "../util/padronizacao.class.php";
include "../dao/carro-dao.class.php";
$carro = new Carro;

$carro->marca = Padronizacao::padronizarMarca($_POST['marca']);
$carro->modelo = Padronizacao::padronizarModelo($_POST['modelo']);
$carro->cor = Padronizacao::padronizarCor($_POST['cor']);
$carro->ano = $_POST['ano'];
$carro->chassi = $_POST['chassi'];

$carroDAO = new CarroDAO;
$carroDAO->cadastrar($carro);
echo "<br>carro cadasatrado com sucesso.";
echo $carro;
