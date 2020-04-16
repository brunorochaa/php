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
        <h1 class="jumbotron bg-primary">Calcular Distância Entre Pontos</h1>
        <form name="cadastroPonto" method="post" action="control/control.php">
            <div  class="form-group">
                <input type="number" name="x1" placeholder="Digite o x1" autofocus>
            </div>
            <div class="form-group">
                <input type="number" name="y1" placeholder="Digite o y1">
            </div>
            <div class="form-group">
                <input type="number" name="x2" placeholder="Digite o x2">
            </div>
            <div class="form-group">
                <input type="number" name="y2" placeholder="Digite o y2">
            </div>
            <div class="form-group">
                    <input type="submit" value="Calcular" class="btn btn-primary">
            </div>
        </form>
        <ul>
            <li class="btn btn-warning"><a href="../index.php">Home</a></li>
        </ul>
    </body>
</html>