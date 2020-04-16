<?php
class Pessoa
{
    private $nome;
    private $peso;

    public function Pessoa()
    {
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getPeso(): float
    {
        return $this->peso;
    }

    public function setPeso($peso): void
    {
        $this->peso = $peso;
    }

    public function verificarRaizQuadradaPeso(): float
    {
        return sqrt($this->peso);
    }

    public function verificarPotenciaQuadradaPeso(): float
    {
        return pow($this->peso, 2);
    }
}
?>