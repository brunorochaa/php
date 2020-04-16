<?php
class Padronizacao
{
    public function padronizarMarca($valor): string
    {
        return ucwords(strtolower($valor));
    }

    public function padronizarModelo($valor): string
    {
        return ucwords(strtolower($valor));
    }

    public function padronizarCor($valor): string
    {
        return ucwords(strtolower($valor));
    }

    public function padronizacaoAno($valor):  int
     {
         return ucwords(strtolower($valor));
     }
}
?>
