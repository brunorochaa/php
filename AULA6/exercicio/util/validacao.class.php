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

    public static function validarIdade($valor): bool
    {
        $expressao = "/^[0-9]{1,3}$/";
        return preg_match($expressao,$valor);
    }

    public static function validarAltura($valor): bool
    {
        $expressao = "/^[0-9]{1}.{3}$/";
        return preg_match($expressao,$valor);
    }

    public static function validarPeso($valor): bool
    {
        $expressao = "/^[0-9]{2}$/";
        return preg_match($expressao,$valor);
    }
}
?>