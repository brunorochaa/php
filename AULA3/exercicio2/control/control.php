<?php
include '../model/distancia.class.php';

$distancia= new Distancia;

$distancia->setX1($_POST['x1']);
$distancia->setY1($_POST['y1']);
$distancia->setX2($_POST['x2']);
$distancia->setY2($_POST['y2']);

echo '<p>x1: '.$distancia->getX1();
echo '<br>y1: '.$distancia->getY1();
echo '<br>x2: '.$distancia->getX2();
echo '<br>y2: '.$distancia->getY2();
echo '<br>Distância Entre os Pontos: '.$distancia->calcularDistancia(). '</p>';
?>