<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Celular</title>
        <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <h1 class="jumbotron">Cadastre seu celular</h1>
        <form name="cadastroCelular" method="post" action="control/control.php">
            <div  class="form-group">
                <input type="text" name="marca" placeholder="Digite a marca" autofocus>
            </div>
            <div  class="form-group">
                <input type="text" name="modelo" placeholder="Digite o modelo do seu celular">
            </div>
            <div  class="form-group">
                <input type="number" name="preco" placeholder="Digite o preço do celular">
            </div>
            <div  class="form-group">
                <input type="number" name="quantidade" placeholder="Digite a quantidade de compra">
            </div>
            <div class="form-group">
                    <input type="submit" value="Comprar" class="btn btn-primary">
            </div>
        </form>
    </body>
</html>