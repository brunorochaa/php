<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mercado Vá com Deus</title>
        <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <h1 class="jumbotron">Cadastre a compra</h1>
        <form name="cadastroMercado" method="post" action="control/control.php">
            <div  class="form-group">
                <input type="text" name="produto" placeholder="Digite o nome do produto" autofocus required pattern="^[A-z ]{2,30}$">
            </div>
            <div  class="form-group">
                <input type="text" name="preco" placeholder="Digite o preço do produto" required pattern="^[0-9]{1,5}$">
            </div>
            <div  class="form-group">
                <input type="text" name="quantidade" placeholder="Digite a quantidade de compra" required pattern="^[0-9]{1}$">
            </div>
            <div  class="form-group">
            <select name="pagamento"
                pattern="^(Cartão|Boleto)$">
                <option value="Cartão">Cartão</option>
                <option value="Boleto">Boleto</option>
                </select>
            </div>
            <div class="form-group">
                    <input type="submit" value="Comprar" class="btn btn-primary">
                    <input type="reset" value="Limpar"class="btn btn-danger">
            </div>
        </form>
        <ul>
            <li class="btn btn-warning"><a href="../index.php">Home</a></li>
        </ul>
    </body>
</html>