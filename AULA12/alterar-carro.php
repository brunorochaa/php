<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Alterar</title>
        <link href="css/style.css" rel="stylesheet"/>
        <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>
    
    <body class="corFundo">
        <nav class="navbar navbar-expand-lg navbar-light bg-grey">
            <a class="navbar-brand" href="#">Concessionária</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="cadastro-carro.php">Cadastrar carro<span class="sr-only"></span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="buscar-carro.php">Consultar carros<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <h1 class="jumbotron bg-dark titulo">Alterar</h1>
        <?php
        if (isset($_GET['id'])) {
            include "model/carro.class.php";
            include "dao/carrodao.class.php";

            $carroDAO = new CarroDAO;
            $carros = $carroDAO->filtrarCarros("Código", $_GET['idCarro']);

            $carro = $carros[0];
        } 
        ?>
         <form name="alterar" method="post" action="alterar-carro.php">
            <div>
                <input type="text" name="codigo" value="<?php echo $carro->idCarro ?? ""; ?>" readonly hidden>
            </div>
            <h6>Digite a marca do carro:</h6>
            <div class="form-group center">
                <input type="text" name="marca" placeholder="marca do carro" autofocus value="<?php echo $carro->marca ?? ""; ?>">
            </div>
            <h6>Digite o modelo do carro:</h6>
            <div class="form-group">
                <input type="text" name="modelo" placeholder="modelo do carro" value="<?php echo $carro->modelo ?? ""; ?>">
            </div>
            <h6>Digite a cor do carro:</h6>
            <div class="form-group">
                <input type="text" name="cor" placeholder="cor do carro" value="<?php echo $carro->cor ?? ""; ?>">
            </div>
            <h6>Digite o ano do carro:</h6>
            <div class="form-group">
                <input type="year" name="ano" placeholder="ano do carro" value="<?php echo $carro->ano ?? ""; ?>">
            </div>
            <h6>Digite o chassi do carro:</h6>
            <div class="form-group">
                <input type="text" name="chassi" placeholder="chassi do carro" value="<?php echo $carro->chassi ?? ""; ?>">
            </div>
            <div class="form-group">
                <input type="submit" value="Cadastrar" class="btn btn-primary">
                <input type="reset"  value="Limpar" class="btn btn-danger">
            </div>
        </form>
        <?php
            include_once "model/carro.class.php";
            include_once "dao/carrodao.class.php";
            include "util/padronizacao.class.php";

            $carroAlterar = new Carro();

            $carro->idCarro = $_POST['idCarro'];    
            $carro->marca = Padronizacao::padronizarMarca($_POST['marca']);
            $carro->modelo = Padronizacao::padronizarModelo($_POST['modelo']);
            $carro->cor = Padronizacao::padronizarCor($_POST['cor']);
            $carro->ano = $_POST['ano'];
            $carro->chassi = $_POST['chassi'];

            $carroDAO = new carroDAO;
            $carroDAO->cadastrar($carro);

            header("buscar-carro.php");
        ?>
    </body>
</html>