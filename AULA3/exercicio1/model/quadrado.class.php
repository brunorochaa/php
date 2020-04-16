<?php
class Quadrado
{
    private $lado;

    public function Quadrado()
    {
    }

    public function getLado()
    {
        return $this->lado;
    }

    public function setLado($lado)
    {
        $this->lado = $lado;
    }

    public function calcularArea()
    {
        return $this->lado * $this->lado;
    }

    public function calcularPerimetro()
    {
        return 4 * $this->lado;
    }
}
?>