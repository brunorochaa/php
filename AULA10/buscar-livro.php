<?php
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Buscar Livros</title>
        <!--BOOTSTRAP VIA NPM -->
        <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <h1 class="jumbotron bg-info">Buscar Livros</h1>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="#">Sistema</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav">
             <li class="nav-item">
               <a class="nav-link" href="index.php">Home</a>
             </li>

             <li class="nav-item">
               <a class="nav-link" href="cadastro-livro.php">Cad. Livros <span class="sr-only"></span></a>
             </li>

             <li class="nav-item active">
               <a class="nav-link" href="buscar-livro.php">Cons. Livros <span class="sr-only">(current)</span></a>
             </li>
           </ul>
         </div>
        </nav>

        <?php
        include "dao/livrodao.class.php";
        include "model/livro.class.php";

        $livroDAO = new livroDAO;
        $livros = $livroDAO->buscarLivros();

        if(count($livros) == 0) { //significa que o banco tá vazio
            echo "<h1>Não há livros no banco!</h1>";
            echo "</body>";
            echo "</html>";
            die();
        }

        // var_dump($livros);
        ?>

        <form name="pesquisa" method="post" action="">
          <div class="row">
            <div class="form-group col-md-6">
              <input type="text" name="pesquisa"
              class="form-control" placeholder="Digite sua pesquisa">
            </div>
            <div class="form-group col-md-6">
              <select name="filtro" class="form-control">
                <option value="todos">Todos</option>
                <option value="codigo">Código</option>
                <option value="titulo">Título</option>
                <option value="editora">Editora</option>
                <option value="autor">Autor</option>
                <option value="anolancamento">Ano lançamento</option>
                <option value="genero">Gênero</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <input type="submit" name="filtrar" value="Filtrar"
                   class="btn btn-primary btn-block">
          </div>
        </form>
        <?php
        if(isset($_POST['filtrar'])){
          include_once "dao/livrodao.class.php";
          $pesquisa = $_POST['pesquisa']; //o que usuário digitou
          $filtro = $_POST['filtro']; //o que o usuário escolheu no select

          $livroDAO = new LivroDAO;
          $livros = $livroDAO->filtrarLivros($filtro, $pesquisa);

          if(count($livros) == 0){
            echo "<h2>Sua pesquisa não retornou nenhum livro!</h2>";
            echo "</body>";
            echo "</html>";
            die();
          }//fecha if
        }//fecha if
        ?>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Título</th>
                        <th>Editora</th>
                        <th>Autor</th>
                        <th>Ano Lançamento</th>
                        <th>Gênero</th>
                        <th>Alterar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Código</th>
                        <th>Título</th>
                        <th>Editora</th>
                        <th>Autor</th>
                        <th>Ano Lançamento</th>
                        <th>Gênero</th>
                        <th>Alterar</th>
                        <th>Excluir</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                foreach($livros as $livro) {
                    echo "<tr>";
                    echo "<td>".$livro->idLivro."</td>";
                    echo "<td>".$livro->titulo."</td>";
                    echo "<td>".$livro->editora."</td>";
                    echo "<td>".$livro->autor."</td>";
                    echo "<td>".$livro->anoLancamento."</td>";
                    echo "<td>".$livro->genero."</td>";
                    echo "<td><a href='alterar-livro.php?id=$livro->idLivro' class='btn btn-warning'>Alterar</a></td>";
                    echo "<td><a href='buscar-livro.php?id=$livro->idLivro' class='btn btn-danger'>Excluir</a></td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div> <!-- table responsive-->
    </body>
    <?php
    if(isset($_GET['id'])) {
        $livroDAO = new livroDAO;
        $livroDAO->deletarLivro($_GET['id']);

        header("location:buscar-livro.php");
    }
    ?>
</html>