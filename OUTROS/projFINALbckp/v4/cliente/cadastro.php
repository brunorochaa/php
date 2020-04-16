<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form name="cadastro" method="post" action="control/control.php">
            <h1>Cadastrar Pessoa</h1>
            <div>
                <input type="text" name="nome" placeholder="seu nome">
            </div>
            <div>
                <label><input type="radio" name="sexo" value="Masculino">Masculino</label>
                <label><input type="radio" name="sexo" value="Feminino">Feminino</label>
            </div>
            <div>
                <input type="number" name="idade" placeholder="sua idade">
            </div>
            <div>
                <input type="text" name="cep" placeholder="seu cep(com traço)">
            </div>
            <div>
                <input type="text" name="numeroCasa" placeholder="número da casa">
            </div>
            <div>
                <input type="text" name="telefone" placeholder="seu telefone">
            </div>
            <div>
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
            </div>
        </form>
    </body>
</html>