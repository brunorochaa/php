<?php
class Validacao
{
    public static function validarProduto($valor): bool
    {
        $expressao = "/^[A-z ]{2,30}$/";
        return preg_match($expressao,$valor);
    }

    public static function validarPreco($valor): bool
    {
        $expressao = "/^[0-9]{1,5}$/";
        return preg_match($expressao,$valor);
    }

    public static function validarQuantidade($valor): bool
    {
        $expressao = "/^[0-9]{1}$/";
    }
}
?>