<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Produto</title>
        <link href="style.css" rel="stylesheet"/>
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/ajax/lib/ajax.js"></script>
    </head>
    <body>
        <div class="nav-bar"></div>
        <div id="app">
            <div clas="cart">
                <p>Carrinho ({{ cart.length }})</p>
            </div>
            <product :premium="premium" @add-to-cart="updateCart" @remove-from-cart="removeItem"></product>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
        <script src="main.js"></script>
    </body>
</html>