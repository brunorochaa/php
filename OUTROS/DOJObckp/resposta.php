<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Resposta</title>
    </head>
    <body>
        <h1>Resposta</h1>
        <?php
        echo "<p>Marca: ".$_POST['marca'];
        echo "<br>Modelo: ".$_POST['modelo'];
        echo "<br>Cor: ".$_POST['cor'];
        echo "<br>Ano: ".$_POST['ano'];
        echo "<br>Chassi: ".$_POST['chassi']. "</p>";
        ?>
    </body>
</html>
