<?php
class Padronizacao
{
    public static function padronizarMaiusculasMinusculas($valor): string
    {
        return ucwords(strtolower($valor));
    }
}
?>