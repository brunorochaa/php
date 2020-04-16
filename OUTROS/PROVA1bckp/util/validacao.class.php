<?php
class Validacao
{
    public static function validarNome($valor): bool
    {
        $expressao = "/^[A-z ]{2,30}$/";
        return preg_match($expressao,$valor);
    }

    public static function validarSexo($valor): bool
    {
        $expressao = "/^(Masculino|Feminino)$/";
        return preg_match($expressao,$valor);
    }

    public static function validarValor($valor): bool
    {
        $expressao = "/^[0-9]{1,}$/";
        return preg_match($expressao,$valor);
    }

    public static function validarModalidade($valor): bool
    {
        $expressao = "/^(3km|5km|10km)$/";
        return preg_match($expressao,$valor);
    }

    public static function validarForma($valor): bool
    {
        $expressao = "/^(Boleto|Visa|MasterCard)$/";
        return preg_match($expressao,$valor);
    }

    public static function validarParcelas($valor): bool
    {
        $expressao = "/^(1x|2x|3x)$/";
        return preg_match($expressao,$valor);
    }

    public static function validarPace($valor): bool
    {
        $expressao = "/^-?[0-9](.){1,4}$/";
        return preg_match($expressao,$valor);
    }
}
?>
