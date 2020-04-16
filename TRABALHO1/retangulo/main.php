<?php
include 'retangulo.class.php';

$retangulo= new Retangulo();

$retangulo->setBase('10');
$retangulo->setAltura('5');

echo 'Base: ' . $retangulo->getBase();
echo '<br>Altura: ' .$retangulo->getAltura();
echo '<br>Área do Retângulo: ' .$retangulo->calcularArea();
echo '<br>Perímetro do Retângulo: ' .$retangulo->calcularPerimetro();
?>