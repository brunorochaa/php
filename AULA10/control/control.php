<?php
include '../modelo/livro.class.php';
include '../dao/livrodao.class.php';
include '../util/padronizacao.class.php';

$livro = new Livro();

//auto_increment
// $livro->idLivro = ;

$livro->titulo = Padronizacao::padronizarMaiusculasMinusculas($_POST['titulo']);
$livro->editora = $_POST['editora'];
$livro->autor = $_POST['autor'];
$livro->anoLancamento = $_POST['anoLancamento'];
$livro->genero = $_POST['genero'];

$livroDAO = new livroDAO;
$livroDAO->cadastrar($livro); //enviando objeto para o banco de dados
// echo "<br>Livro cadastrado com sucesso!";
// echo $livro;

header("location:../buscar-livro.php");