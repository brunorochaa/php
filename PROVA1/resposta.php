<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastro Concluído</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <h1>Cadastrado com Sucesso!</h1>
        <hr>
        <div>
            <?php
                echo "<p>Nome: " .$_GET['nome'];
                echo "<br>Sexo: " .$_GET['sexo'];
                echo "<br>Modalidade: " .$_GET['modalidade']. ", ".$_GET['verificarModalidade'];
                echo "<br>Pace: " .$_GET['pace']. " km/h";
                echo "<br>Valor: R$ " .$_GET['valor'];
                echo "<br>Forma de Pagamento: " .$_GET['forma']. ", ".$_GET['verificarFormaDePagamento'];
                echo "<br>Número de Parcelas do Pagamento: " .$_GET['parcelas'];
                echo "<br>Valor Final: R$ " .$_GET['calcularVezes'];
            ?>
        </div>
        <ul>
            <li class="btn btn-warning"><a href="index.html">Voltar a Home</a></li>
        </ul>
    </body>
</html>