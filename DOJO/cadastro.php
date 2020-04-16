<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
    </head>
    <body>
        <h1>Cadastro de Carro</h1>
        <form name="cadastroCarro" method="post" action="control/control.php">
            <div>
                <input type="text" name="marca" placeholder="Digite a marca do carro" autofocus required pattern="^{A-z}[1,80]$">
            </div>

            <div>
                <input type="text" name="modelo" placeholder="Digite o modelo do carro" required pattern="^{A-z}[1,50]$">
            </div>

            <div>
                <input type="text" name="cor" placeholder="Digite a cor do carro" required pattern="^{A-z}[1,30]$">
            </div>

            <div>
                <input type="text" name="ano" placeholder="Digite o ano do carro" required pattern="^{^a-zA-z!@#$%¨*}[4]$">
            </div>

            <div>
                <input type="text" name="chassi" placeholder="Digite o chassi do carro" required pattern="{A-z0,9}[17]">
            </div>
            <div>
                <input type="submit"  value="cadastrar">
            </div>
            <div>
                <input type="reset"  value="limpar">
            </div>
        </form>
    </body>
</html>
