<?php
class Padronizacao
{
    public static function padronizarMarca($valor): string
    {
        return ucwords(strtolower($valor));
    }

    public static function padronizarModelo($valor): string
    {
        return ucwords(strtolower($valor));
    }

    public static function padronizarCor($valor): string
    {
        return ucwords(strtolower($valor));
    }
}
?>