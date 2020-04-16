<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <!--BOOTSTRAP VIA NPM -->
        <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <h1 class="jumbotron bg-info">Seja bem vindo</h1>

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
    </body>
</html>