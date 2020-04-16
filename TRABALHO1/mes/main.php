<?php
include 'mes.class.php';

$mes= new Mes();

$mes->setMes('13');

echo 'Mês: ' .$mes->getMes();
echo '<br> '. $mes->validarMes();
?>