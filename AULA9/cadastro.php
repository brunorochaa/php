<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <h1>Cadastro de pessoa</h1>
        <?php
        if(isset($_SESSION['erros'])) {
            $erros = unserialize($_SESSION['erros']);
            foreach($erros as $erro) {
                echo "<br>".$erro;
            }
            $post = unserialize($_SESSION['post']);
            unset($_SESSION['erros']);
        }
        ?>
        <form name="cadastro" method="post" action="control/control.php">
            <div>
                <input type="text" name="nome" placeholder="Digite o seu nome" autofocus value="<?php if(isset($post)) echo $post['nome']?>">
            </div>  
            <div>
                <input type="text" name="sobrenome" placeholder="Digite o seu sobrenome" value="<?php if(isset($post)) echo $post['sobrenome']?>">
            </div>
            <div>
                <input type="number" name="dia" placeholder="Digite dia" value="<?php if(isset($post)) echo $post['dia']?>">
            </div>
            <div>
                <input type="number" name="mes" placeholder="Digite mês" value="<?php if(isset($post)) echo $post['mes']?>">
            </div>
            <div>
                <input type="number" name="ano" placeholder="Digite ano" value="<?php if(isset($post)) echo $post['ano']?>">
            </div>
            <div>
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </body>
</html>