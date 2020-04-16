<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Buscar</title>
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

                    <li class="nav-item active">
                        <a class="nav-link" href="buscar-carro.php">Consultar carros<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <h1 class="jumbotron bg-dark titulo">Buscar</h1>
        <?php
        include "dao/carrodao.class.php";
        include "model/carro.class.php";

        $carroDAO = new carroDAO;
        $carros = $carroDAO->buscarCarro();

        if (count($carros) == 0) {
            echo "<h1>Não há carros no banco!</h1>";
            echo "</body";
            echo "</html>";
            die();
        }
        ?>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Cor</th>
                        <th>Ano</th>
                        <th>Chassi</th>
                        <th>Alterar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Código</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Cor</th>
                        <th>Ano</th>
                        <th>Chassi</th>
                        <th>Alterar</th>
                        <th>Excluir</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                foreach ($carros as $carro) {
                    echo "<tr>";
                    echo "<td>".$carro->idCarro."</td>";
                    echo "<td>".$carro->marca."</td>";
                    echo "<td>".$carro->modelo."</td>";
                    echo "<td>".$carro->cor."</td>";
                    echo "<td>".$carro->ano."</td>";
                    echo "<td>".$carro->chassi."</td>";
                    echo "<td><a href='alterar-carro.php?id=$carro->idCarro' class='btn btn-warning'>Alterar</a></td>";
                    echo "<td><a href='buscar-carro.php?id=$carro->idCarro' class='btn btn-danger'>Excluir</a></td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </body>
    <?php
    if (isset($_GET['id'])) {
        $carroDAO = new carroDAO;
        $carroDAO->deletarCarro($_GET['id']);

        header("location:buscar-carro.php");
    }
    ?>
</html>