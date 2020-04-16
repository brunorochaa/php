<?php
session_start();

if(!isset($_SESSION['mensagem'])) header("location:cadastro.php");
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
        <h1>Resposta</h1>
        <?php
        include "model/pessoa.class.php";

        $pessoa = unserialize($_SESSION['pessoa']);
        echo "".$pessoa;
        echo "<br>Data: ".$pessoa->data;

        echo "<br>".$_SESSION['mensagem'];		
        unset($_SESSION['mensagem']);
        unset($_SESSION['pessoa']);
        ?>
    </body>
</html>