<?php
/*
echo "oi";
*/

/*
$valor = 4;
echo is_numeric($valor);
*/

/*
$valor = null;
echo is_null($valor);
*/

/*
$nome = "Bruno";
echo "<br>".isset($nome);
echo "<br>".$nome;
unset($nome);
echo "<br>".isset($nome);
echo "<br>".$nome;
*/

/*
$email = "brunorochaamaral@gmail.com";
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "e-mail válido!";
} else {
    echo "e-mail inválido!";
}
*/

/*
echo "".date("Y-m-d");
echo "<br>".date("d-m-Y");
echo "<br>".date("l");
echo "<br>".date("d");
echo " ".date("m");
echo " ".date("y");
echo "<br>".date("G:i:s");
date_default_timezone_set("America/Sao_Paulo");
echo "<br>".date("G:i:s");
*/

/*
$mes = 11;
$dia = 29;
$ano = 2000;

if(checkdate($mes, $dia, $ano)) {
    echo "data válida!";
} else {
    echo "data inválida!";
}
*/

/*
$valor = "Bruno ROCHA 'or 1=1' <i>sss</i>";
echo "".strtoupper($valor);
echo "<br>".mb_strtolower($valor);
echo "<br>".str_word_count($valor);
echo "<br>".strlen($valor);
echo "<br>".ucwords(strtolower($valor));

//segurança
echo "<br>".trim($valor);
echo "<br>".addslashes($valor);
echo "<br>".htmlentities($valor);
*/

/*
$valor = 25;
echo sqrt($valor);

$numero = 5;
echo "<br>".pow($numero, 2);
*/

/*
$valores[] = "Bruno";
$valores[] = 35;
$valores[] = 75.00;

echo "Nome: ".$valores[0];
echo "<br>Idade: ".$valores[1];
echo "<br>Peso: ".$valores[2];

echo "<br>".count($valores);
echo "<br>".sizeof($valores);
echo "<br>";
var_dump($valores);
echo "<br>";
print_r($valores);
*/

/*
$notas = [10,9];
echo array_sum($notas)/count($notas);*/

/*$nomes = ["Bruno","Diego","Amanda"];
shuffle($nomes);
//sort($nomes);
//rsort($nomes);
echo $nomes[0];
var_dump($nomes);
*/

/*
$numeros = range(1,60);
shuffle($numeros);
echo "<br>sorteado: ".$numeros[0];
// print_r($numeros);

$letrasMinusculas = range("a","z");
shuffle($letrasMinusculas);
echo "<br>sorteado: ".$letrasMinusculas[0];

$letrasMaiusculas = range("A","Z");
shuffle($letrasMaiusculas);
echo "<br>sorteado: ".$letrasMaiusculas[0];

echo "<br>nova senha: ".$numeros[0].$letrasMinusculas[0].$letrasMaiusculas[0].$numeros[1].$letrasMinusculas[1].$letrasMaiusculas[1];

$array = [$numeros[0], $letrasMinusculas[0], $letrasMaiusculas[0], $numeros[1], $letrasMinusculas[1], $letrasMaiusculas[1]];
shuffle($array);
echo "<br>";
echo "<br>nova senha: ".$array[0].$array[1].$array[2].$array[3].$array[4].$array[5];
*/

/*
$dia = 02;
$mes = 10;
$ano = 2019;
/$array= [$dia, $mes, $ano];

$dataBR = implode("/", $array);
echo $dataBR;
rsort($array);

$dataEN = implode("-", $array);
echo "<br>".$dataEN;

$novoArray = explode("-", $dataEN);
echo "<br>";
var_dump($novoArray);
*/

/*
$nomes= ["ze","joao"];
echo "While: ";
$contador = 0;
while($contador < count($nomes)) {
    echo " ".$nomes[$contador];
    $contador ++;
}
echo "<br>For: ";
for($i=0 ; $i < count($nomes); $i++) {
    echo " ".$nomes[$i];
}
echo "<br>Foreach: ";
foreach($nomes as $nome) {
    echo " ".$nome;
}
*/

/*
$valores['nome'] = "Bruno";
$valores['sobrenome'] = "Rocha";
$valores['idade'] = 18;

echo "Nome: ".$valores['nome']." ".$valores['sobrenome'];
echo "<br>Idade: ".$valores['idade'];
*/
?>