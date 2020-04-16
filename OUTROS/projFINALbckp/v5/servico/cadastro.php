<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastrar Serviço</title>
        <link href="../css/style.css" rel="stylesheet">
        <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="../node_modules/jquery/dist/jquery.min.js"></script>
        <script src="../node_modules/ajax/lib/ajax.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="../index.php">Mecânica</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="../index.php">HOME</a></li>

                    <li class="nav-item active"><a class="nav-link" href="cadastro.php">CADASTRAR SERVIÇO<span class="sr-only"></span></a></li>

                    <li class="nav-item"><a class="nav-link" href="#">ALTERAR DADOS<span class="sr-only"></span></a></li>

                    <li class="nav-item"><a class="nav-link" href="#">BUSCAR DADOS<span class="sr-only"></span></a></li>

                    <li class="nav-item"><a class="nav-link" href="../produto/index.php">NOSSOS PRODUTOS<span class="sr-only"></span></a></li>
                </ul>
            </div>
        </nav>
        <form name="cadastro" method="post" action="control/control.php">
            <h1 class="jumbotron titulo">Cadastrar Serviço</h1>
            <h6>Digite a descrição do serviço:</h6>
            <div class="form-group">
                <input type="text" name="descricaoServico" placeholder="descrição do serviço">
            </div>
            <h6>Selecione a filial da oficina:</h6>
            <div class="form-group">
                <select name="filial">
                    <option value="Assis Brasil">Filial Assis Brasil</option>
                    <option value="Santa Rosa">Filial Santa Rosa</option>
                </select>
            </div>
            <h6>Digite o nome do mecânico que cuidará do serviço:</h6>
            <div class="form-group">
                <input type="text" name="nomeMecanico" placeholder="nome do mecânico">
            </div>
            <h6>Digite o carro:</h6>
            <div class="form-group">
                <input type="text" name="carro" placeholder="modelo, marca">
            </div>
            <h6>Digite a cor do carro:</h6>
            <div class="form-group">
                <input type="text" name="cor" placeholder="cor do carro">
            </div>
            <h6>Digite a placa do carro:</h6>
            <div class="form-group">
                <input type="text" name="placa" placeholder="placa do carro">
            </div>
            <h6>Selecione o tipo de combustível do carro:</h6>
            <div class="form-group">
                <select name="tipoCombustivel">
                    <option value="Comum">Comum</option>
                    <option value="Diesel">Diesel</option>
                    <option value="Etanol">Etanol</option>
                    <option value="Gas">Gás</option>
                    <option value="Hibrido">Híbrido</option>
                </select>
            </div>
            <h6>Selecione a urgência do serviço:</h6>
            <div class="form-group">
                <label><input type="radio" name="urgencia" value="Sem Urgencia">Sem urgência</label>
                <label><input type="radio" name="urgencia" value="Com Urgência">Com Urgência</label>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Enviar">
                <input class="btn btn-danger" type="reset" value="Limpar">
            </div>
        </form>
    </body>
</html>