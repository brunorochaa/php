<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Saúde</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <h1>Veja como está sua saúde</h1>
        <hr>
        <form name="cadastroPessoa" method="post" action="control/control.php"> 
            <div class="form-group">
                <input type="text" name="nome" placeholder="Digite seu nome" autofocus required pattern="^[A-z ]{2,30}$">
            </div>
            <div class="form-group">
                <select name="sexo" pattern="^(Masculino|Feminino)$" pattern="^(Masculino|Feminino)$">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="idade" placeholder="Digite sua idade" required pattern="^[0-9]{1,3}$">
            </div>
            <div class="form-group">
                <input type="long" name="altura" placeholder="Digite sua altura (com .)" required>
            </div>
            <div  class="form-group">
                <input type="text" name="peso" placeholder="Digite seu peso" required pattern="^[0-9]{2}$">
            </div>
            <div class="form-group">
                <input type="submit" value="Cadastrar" class="btn btn-primary">
                <input type="reset" value="Limpar"class="btn btn-danger">
            </div>
        </form>
    </body>
</html>