<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de corrida</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>
    <h1 class="jumbotron">Cadastro</h1>
    <form name="cadastro" method="post" action="control/control.php">
      <div class="form-group">
        <input type="text" name="nome" placeholder="Digite o nome do atleta" autofocus required pattern="^[A-z ]{2,30}$">
      </div>
      <h6>Selecione seu sexo: </h6>
      <div class="form-group">
        <label><input type="radio" name="sexo" value="Masculino"  pattern="^(Masculino|Feminino)$" >Masculino</label>
        <label><input type="radio" name="sexo" value="Feminino"  pattern="^(Masculino|Feminino)$">Feminino</label>
      </div>
      <div class="form-group">
        <input type="number" step="any" name="valor" placeholder="Digite o valor" required pattern="^[0-9]{1,}$">
      </div>
      <h6>Selecione sua modalidade: </h6>
      <div class="form-group">
          <select name="modalidade" pattern="^(3km|5km|10km)$">
            <option value=3km>3km</option>
            <option value=5km>5km</option>
            <option value=10km>10km</option>
          </select>
      </div>
      <h6>Selecione sua forma de pagamento:</h6>
      <div class="form-group">
          <select name="forma" pattern="^(Boleto|Visa|MasterCard)$">
            <option value="Visa">Visa</option>
            <option value="MasterCard">MasterCard</option>
            <option value="Boleto">Boleto</option>
          </select>
      </div>

      <h6>Selecione a quantidade de parcelas a pagar: </h6>
      <div class="form-group">
          <select name="parcelas" pattern="^(1x|2x|3x)$">
            <option value=1x>1x</option>
            <option value=2x>2x</option>
            <option value=3x>3x</option>
          </select>
      </div>
      <div class="form-group">
        <input type="number" step="any" name="pace" placeholder="Digite seu pace" required pattern="^-?[0-9](.){1,4}$">
      </div>
      <div class="form-group">
                <input type="submit" value="Cadastrar" class="btn btn-primary">
                <input type="reset" value="Limpar"class="btn btn-danger">
      </div>
      <!-- pattern="^(Masculino|Feminino)$"-->
    </form>
  </body>
</html>
