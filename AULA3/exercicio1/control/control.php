<?php
include '../model/quadrado.class.php';

$quadrado= new Quadrado;

$quadrado->setLado($_POST['lado']);

echo '<p>Lado: '.$quadrado->getLado();
echo '<br>Área do Quadrado: '.$quadrado->calcularArea();
echo '<br>Perímetro do Quadrado: '.$quadrado->calcularPerimetro(). '</p>';
?>