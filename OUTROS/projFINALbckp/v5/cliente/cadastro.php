<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastrar Cliente</title>
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
                    <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>

                    <li class="nav-item active"><a class="nav-link" href="cadastro.php">CADASTRAR CLIENTE<span class="sr-only"></span></a></li>

                    <li class="nav-item"><a class="nav-link" href="#">ALTERAR DADOS<span class="sr-only"></span></a></li>

                    <li class="nav-item"><a class="nav-link" href="#">BUSCAR DADOS<span class="sr-only"></span></a></li>

                    <li class="nav-item"><a class="nav-link" href="../produto/index.php">NOSSOS PRODUTOS<span class="sr-only"></span></a></li>
                </ul>
            </div>
        </nav>
        <form name="cadastro" method="post" action="control/control.php">
            <h1 class="jumbotron titulo">Cadastrar Pessoa</h1>
            <h6>Digite seu nome:</h6>
            <div class="form-group">
                <input type="text" name="nome" placeholder="nome" autofocus>
            </div>
            <h6>Marque seu sexo:</h6>
            <div class="form-group">
                <label><input type="radio" name="sexo" value="Masculino">Masculino</label>
                <label><input type="radio" name="sexo" value="Feminino">Feminino</label>
            </div>
            <h6>Digite sua data de nascimento:</h6>
            <div class="form-group">
                <input type="date" name="dataNascimento">
            </div>
            <h6>Digite seu CEP:</h6>
            <div class="form-group">
                <input type="text" name="cep" placeholder="cep *com traço*">
            </div>
            <h6>Digite o número da sua casa:</h6>
            <div class="form-group">
                <input type="text" name="numeroCasa" placeholder="número da casa">
            </div>
            <h6>Digite seu telefone:</h6>
            <div class="form-group">
                <input type="text" name="telefone" placeholder="telefone">
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Enviar">
                <input class="btn btn-danger"type="reset" value="Limpar">
            </div>
        </form>
    </body>
</html>