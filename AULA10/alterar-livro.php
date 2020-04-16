<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Alterar Livro</title>
        <!--BOOTSTRAP VIA NPM -->
        <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>

    <body>
      <h1 class="jumbotron bg-info">Alterar Livro</h1>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <a class="navbar-brand" href="#">Sistema</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
           <li class="nav-item active">
             <a class="nav-link" href="index.php">Home</a>
           </li>

           <li class="nav-item">
             <a class="nav-link" href="cadastro-livro.php">Cad. Livros <span class="sr-only"></span></a>
           </li>

           <li class="nav-item">
             <a class="nav-link" href="buscar-livro.php">Cons. Livros <span class="sr-only">(current)</span></a>
           </li>
         </ul>
       </div>
      </nav>
      <?php
      if(isset($_GET['id'])) {
          include "model/livro.class.php";
          include "dao/livrodao.class.php";

          $livroDAO = new LivroDAO;
          $livros = $livroDAO->filtrarLivros("codigo", $_GET['id']);

          // var_dump($livros);
          $livro = $livros[0];
          // echo $livro;
      }
      ?>
      <form name="alterar" method="post" action="alterar-livro.php">

        <div>
         <input type="text" name="codigo" value="<?php echo $livro->idLivro ?? ""; ?>" readonly hidden>
        </div>
        <div>
          <input type="text" name="titulo"
                 placeholder="Digite o titulo"
                 autofocus value="<?php echo $livro->titulo ?? ""; ?>">
        </div>

        <div>
          <input type="text" name="editora"
                 placeholder="Digite a editora" value="<?php echo $livro->editora ?? ""; ?>">
        </div>

        <div>
          <input type="text" name="autor"
                 placeholder="Digite o autor" value="<?php echo $livro->autor ?? ""; ?>">
        </div>
        <div>
          <input type="number" name="anoLancamento"
                 placeholder="Digite o ano de lançamento"
                 value="<?php echo $livro->anoLancamento ?? ""; ?>">
        </div>

        <div>
          <label>Genero</label>

          <select name="genero">
            <option value="Ação" <?php if(isset($livro)) if($livro->genero=='Ação') echo "selected"; ?>>Ação</option>
            <option value="Terror" <?php if(isset($livro))  if($livro->genero=='Terror') echo "selected"; ?>>Terror</option>
            <option value="Romance" <?php if(isset($livro))  if($livro->genero=='Romance') echo "selected"; ?>>Romance</option>
            <option value="Suspense" <?php if(isset($livro))  if($livro->genero=='Suspense') echo "selected"; ?>>Suspense</option>
            <option value="Aventura" <?php if(isset($livro))  if($livro->genero=='Aventura') echo "selected"; ?>>Aventura</option>
          </select>
        </div>

        <div>
          <input type="submit" name="alterar" value="Alterar">
        </div>
      </form>

      <?php
      if(isset($_POST['alterar'])) {
          // teste....
          // var_dump($_POST);
          include_once "modelo/livro.class.php";
          include_once "dao/livrodao.class.php";
          include 'util/padronizacao.class.php';

          $livroAlterar = new Livro();

          $livroAlterar->idLivro = $_POST['codigo']; //TEM QUE TER O IDLIVRO!!!
          $livroAlterar->titulo = Padronizacao::padronizarMaiusculasMinusculas($_POST['titulo']);
          $livroAlterar->editora = $_POST['editora'];
          $livroAlterar->autor = $_POST['autor'];
          $livroAlterar->anoLancamento = $_POST['anoLancamento'];
          $livroAlterar->genero = $_POST['genero'];

          $livroDAO = new livroDAO;
          $livroDAO->alterarLivro($livroAlterar); //enviando objeto para alterar no banco de dados

          header("location:buscar-livro.php");
      }
      ?>
    </body>
</html>