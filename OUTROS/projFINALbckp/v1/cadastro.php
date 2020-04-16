<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastrar Cliente</title>
    </head>
    <body>
    <form name="cadastro" method="post" action="control/control.php">
        <div>
          <input type="text" name="nome" placeholder="nome" autofocus>
        </div>
        <div>
          <input type="text" name="sexo"placeholder="sexo">
        </div>
        <div>
          <input type="number" name="idade" placeholder="idade">
        </div>

        <div>
          <input type="text" name="tipoServico" placeholder="tipo de servico" autofocus>
        </div>
        <div>
          <input type="text" name="descricaoServico"placeholder="descricao do servico">
        </div>
        <div>
          <input type="text" name="nomeMecanico" placeholder="nome do mecanico">
        </div>
        <div>
          <input type="submit" value="Cadastrar">
        </div>
      </form>
    </body>
</html>