<?php
include '../model/pessoa.class.php';

$pessoa = new Pessoa;

$pessoa->setNome($_POST['nome']);
$pessoa->setPeso($_POST['peso']);

echo '<p>Nome: ' .$pessoa->getNome();
echo '<br>Peso: ' .$pessoa->getPeso();
echo '<br>Raiz Quadrada do Peso: ' .$pessoa->verificarRaizQuadradaPeso();
echo '<br>Potência Quadrada do Peso: ' .$pessoa->verificarPotenciaQuadradaPeso() . '</p>';
?>