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
        <h1 class="jumbotron">Celular</h1>

        <div class="jumbotron">
        <?php
            echo "<p>Marca: ".$_GET['marca'];
            echo "<br>Modelo: ".$_GET['modelo'];
            echo "<br>Preço: R$ ".$_GET['preco'];
            echo "<br>Quantidade: ".$_GET['quantidade'];
            echo "<br>Valor Total: R$ ".$_GET['calcularValor']. '</p>';
        ?>
        </div>
    </body>
</html>