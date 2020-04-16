<?php
include "../model/celular.class.php";

$celular= new Celular;

$celular->marca=$_POST['marca'];
$celular->modelo=$_POST['modelo'];
$celular->preco=$_POST['preco'];
$celular->quantidade=$_POST['quantidade'];


//echo $celular;

header("location:../resposta.php?marca=$celular->marca&modelo=$celular->modelo&preco=$celular->preco&quantidade=$celular->quantidade&calcularValor={$celular->calcularValor()}");
?>