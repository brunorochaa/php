<?php
include 'modelo/mes.class.php';

$mes= new Mes();
$mes->setMes($_POST['mes']);
echo "<p>Mês digitado: ".$mes->getMes();
echo "<br>" .$mes->validarMes().'</p>';
?>