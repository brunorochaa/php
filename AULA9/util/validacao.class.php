<?php
class Validacao
{
    public static function validarNome($valor): bool
    {
        $expressao = "/^[a-zA-Z ]{2,50}$/";
        return preg_match($expressao, $valor);
    }

    public static function validarData($valor): bool
    {
        $expressao = "/^[0-9]{2,4}$/";
        return preg_match($expressao, $valor);
    }
}
?>