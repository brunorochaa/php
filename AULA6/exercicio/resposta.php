<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Resposta</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <h1>Seus dados</h1>
        <hr>
        <?php
            echo "<p>Nome: ".$_GET['nome'];
            echo "<br>Sexo: ".$_GET['sexo'];
            echo "<br>Idade: ".$_GET['idade'];
            echo "<br>Altura: ".$_GET['altura'];
            echo "<br>Peso: ".$_GET['peso'];
            echo "<br>IMC: ".$_GET['calcularImc']. ' - '.$_GET['verificarImc'].'</p>';
        ?>
        <ul>
            <li class="btn btn-warning"><a href="../index.html">Home</a></li>
        </ul>
    </body>
</html>