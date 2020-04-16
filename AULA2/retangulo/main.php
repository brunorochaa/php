<?php
include 'modelo/retangulo.class.php';

$retangulo= new Retangulo();

$retangulo->setBase($_POST['base']);
$retangulo->setAltura($_POST['altura']);

echo '<p>Base: '  . $retangulo->getBase();
echo '<br>Altura: ' .$retangulo->getAltura();
echo '<br>Área do Retângulo: ' .$retangulo->calcularArea();
echo '<br>Perímetro do Retângulo: ' .$retangulo->calcularPerimetro(). '</p>';
?>