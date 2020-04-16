<?php
class Padronizacao
{
    public static function juntarNome($valor1, $valor2): string
    {
        $array = [$valor1, $valor2];
        $nome = implode(" ", $array);
        return $nome;
    }

    public static function padronizarNome($valor): string
    {
        return ucwords(strtolower($valor));
    }

    public static function juntarData($dia, $mes, $ano): string
    {
        $array = [$dia, $mes, $ano];
        $data = implode("/", $array);
        return $data;
    }
}
?>