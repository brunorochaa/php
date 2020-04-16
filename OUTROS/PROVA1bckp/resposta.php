<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de corrida</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Resposta</title>
  </head>

  <body>
    <h1 class="jumbotron">Resposta</h1>
    <div>
      <?php
              echo "<p>Nome: ".$_GET['nome'];
              echo "<br>Sexo: ".$_GET['sexo'];
              echo "<br>Valor: ".$_GET['valor'];
              echo "<br>Modalidade: ".$_GET['modalidade']. ", ".$_GET['verificarModalidade'];
              echo "<br>Forma de Pagamento: ".$_GET['forma']. ", " .$_GET['verificarForma'];
              echo "<br>Parcelas: ".$_GET['parcelas'];
              echo "<br>Pace: ".$_GET['pace'];
              echo "<br>Preço final: ".$_GET['calcularVezes'];

      ?>
    </div>

  </body>
</html>
