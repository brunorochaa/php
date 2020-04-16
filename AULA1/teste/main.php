<?php
include 'pessoa.class.php';

$pessoa = new Pessoa();

$pessoa->setNome('Bruno');
$pessoa->setIdade(18);

echo 'Nome: ' . $pessoa->getNome();
echo '<br>Idade: ' . $pessoa->getIdade();
?>
