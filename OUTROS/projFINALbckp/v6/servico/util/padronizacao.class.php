<?php
class Padronizacao
{
    public static function padronizarMaiusculasMinusculas($valor): string
    {
        return ucwords(strtolower($valor));
    }

    public static function juntarNomeMecanico($valor1, $valor2): string
    {
        $array = [$valor1, $valor2];
        $nomeMecanico = implode(" ", $array);
        return $nomeMecanico;
    }

    public static function juntarCarro($valor1, $valor2): string
    {
        $array = [$valor1, $valor2];
        $carro = implode(", ", $array);
        return $carro;
    }
}