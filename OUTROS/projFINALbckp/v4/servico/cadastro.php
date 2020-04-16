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
            <h1>Cadastrar Serviço</h1>
            <div>
                <input type="text" name="descricaoServico" placeholder="descrição do serviço">
            </div>
            <div>
                <select name="filial">
                    <option value="Assis Brasil">Filial Assis Brasil</option>
                    <option value="Santa Rosa">Filial Santa Rosa</option>
                </select>
            </div>
            <div>
                <input type="text" name="nomeMecanico" placeholder="nome do mecânico">
            </div>
            <div>
                <input type="text" name="carro" placeholder="carro: modelo, marca">
            </div>
            <div>
                <input type="text" name="cor" placeholder="cor do carro">
            </div>
            <div>
                <input type="text" name="placa" placeholder="placa do carro">
            </div>
            <div>
                <select name="tipoCombustivel">
                    <option value="Comum">Comum</option>
                    <option value="Diesel">Diesel</option>
                    <option value="Etanol">Etanol</option>
                    <option value="Gas">Gás</option>
                    <option value="Hibrido">Híbrido</option>
                </select>
            </div>
            <div>
                <label><input type="radio" name="urgencia" value="Sem Urgencia">Sem urgência</label>
                <label><input type="radio" name="urgencia" value="Urgente">Urgente</label>
            </div>
            <div>
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
            </div>
        </form>
    </body>
</html>