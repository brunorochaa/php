<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Livro</title>
        <!--BOOTSTRAP VIA NPM -->
        <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>

    <body>
      <h1 class="jumbotron bg-info">Cadastro de Livro</h1>

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

           <li class="nav-item active">
             <a class="nav-link" href="cadastro-livro.php">Cad. Livros <span class="sr-only"></span></a>
           </li>

           <li class="nav-item">
             <a class="nav-link" href="buscar-livro.php">Cons. Livros <span class="sr-only">(current)</span></a>
           </li>
         </ul>
       </div>
      </nav>

      <form name="cadastro" method="post" action="control/control.php">
        <div>
          <input type="text" name="titulo"
                 placeholder="Digite o titulo"
                 autofocus>
        </div>

        <div>
          <input type="text" name="editora"
                 placeholder="Digite a editora">
        </div>

        <div>
          <input type="text" name="autor"
                 placeholder="Digite o autor">
        </div>
        <div>
          <input type="number" name="anoLancamento"
                 placeholder="Digite o ano de lançamento">
        </div>

        <div>
          <label>Genero</label>
          <select name="genero">
            <option value="Ação">Ação</option>
            <option value="Terror">Terror</option>
            <option value="Romance">Romance</option>
            <option value="Suspense">Suspense</option>
            <option value="Aventura">Aventura</option>
          </select>
        </div>

        <div>
          <input type="submit" value="Cadastrar">
        </div>
      </form>
    </body>
</html>