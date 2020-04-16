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
        <h1 class="jumbotron">Mercado</h1>

        <div class="jumbotron">
        <?php
            echo "<p>Produto: ".$_GET['produto'];
            echo "<br>Preço: R$ ".$_GET['preco'];
            echo "<br>Quantidade: ".$_GET['quantidade'];
            echo "<br>Pagamento: ".$_GET['pagamento'];
            echo "<br>Valor Total: R$ ".$_GET['calcularValor']. '</p>';
        ?>
        </div>
        <ul>
            <li class="btn btn-warning"><a href="../index.php">Home</a></li>
        </ul>
    </body>
</html>