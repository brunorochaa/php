<?php
include "../model/mercado.class.php";
include "../util/validacao.class.php";

$contador=0;
if(!Validacao::validarProduto($_POST['produto'])) {
    $contador++;
}

if(!Validacao::validarPreco($_POST['preco'])) {
    $contador++;
}

if(!Validacao::validarPreco($_POST['quantidade'])) {
    $contador++;
}

if($contador == 0) {
    $mercado= new Mercado;

    $mercado->produto=$_POST['produto'];
    $mercado->preco=$_POST['preco'];
    $mercado->quantidade=$_POST['quantidade'];
    $mercado->pagamento=$_POST['pagamento'];
    header("location:../resposta.php?produto=$mercado->produto&preco=$mercado->preco&quantidade=$mercado->quantidade&pagamento=$mercado->pagamento&calcularValor={$mercado->calcularValor()}");
}else {
    header("location:../erro.php?erro=Erro dado(s) inválido(s)");
}
?>