<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastro de Atletas</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <h1>Cadastrar-se</h1>
        <hr>
        <form name="cadastro" method="POST" action="control/control.php">
            <h6>Digite seu nome:</h6>
            <div class="form-group">
                <input type="text" name="nome" placeholder="nome completo do atleta" autofocus required pattern="^[A-Za-záÁéÉíÍóÓúÚãÃçÇüÜñÑ ]{2,30}$">
            </div>
            <h6>Escolha seu gênero:</h6>
            <div class="form-group">
                <label><input type="radio" name="sexo" value="Masculino" pattern="^(Masculino|Feminino)$">Masculino</label>
                <label><input type="radio" name="sexo" value="Feminino" pattern="^(Masculino|Feminino)$">Feminino</label>
            </div>
            <h6>Selecione sua modalidade:</h6>
            <div class="form-group">
                <select name="modalidade" required pattern="^(3km|5km|10km)$">
                    <option value="3km">3km</option>
                    <option value="5km">5km</option>
                    <option value="10km">10km</option>
                </select>
            </div>
            <h6>Digite seu pace:</h6>
            <div class="form-group">
                <input type="number" step="any" name="pace" placeholder="pace" required pattern="^-?[0-9](.){1,4}$">
            </div>
            
            <h6>Digite o valor a ser pago:</h6>
            <div class="form-group">
                <input type="number" step="any" name="valor" placeholder="valor a ser pago" required pattern="^[0-9]{1,}$">
            </div>
            <h6>Selecione sua forma de pagamento:</h6>
            <div class="form-group">
                <select name="forma" required pattern="^(Visa|MasterCard|Boleto)$">
                    <option value="Visa">Visa</option>
                    <option value="MasterCard">MasterCard</option>
                    <option value="Boleto">Boleto</option>
                </select>
            </div>
            <h6>Selecione o número de parcelas do pagamento:</h6>
            <div class="form-group">
                <select name="parcelas" required pattern="^(1x|2x|3x)$">
                    <option value=1x>1x desconto 5%</option>
                    <option value=2x>2x juros 5%</option>
                    <option value=3x>3x juros 10%</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Cadastrar" class="btn btn-primary">
                <input type="reset" value="Limpar"class="btn btn-danger">
            </div>
        </form>
    </body>
</html>