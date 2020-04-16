<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <h1  class="jumbotron bg-primary">Calcular Lado do Quadrado</h1>
        <form name="cadastroLado" method="post" action="control/control.php">
        <div class="form-group">
            <input type="number" name="lado" placeholder="Digite o lado do quadrado" autofocus>
        </div>
        <div class="form-group">
            <input type="submit" value="Cadastrar" class="btn btn-primary">
        </div>
        </form>
        <ul>
            <li class="btn btn-warning"><a href="../index.php">Home</a></li>
        </ul>
    </body>
</html>