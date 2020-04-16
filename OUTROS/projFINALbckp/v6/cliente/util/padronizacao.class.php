<?php
class Padronizacao
{
    public static function padronizarMaiusculasMinusculas($valor): string
    {
        return ucwords(strtolower($valor));
    }

    public static function juntarNome($valor1, $valor2): string
    {
        $array = [$valor1, $valor2];
        $nome = implode(" ", $array);
        return $nome;
    }
}