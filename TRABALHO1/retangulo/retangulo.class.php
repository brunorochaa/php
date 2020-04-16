<?php
class Retangulo
{

private $base;
private $altura;

public function Retangulo()
{
}

public function getBase()
{
    return $this->base;
}

public function setBase($base)
{
    $this->base= $base;
}

public function getAltura()
{
    return $this->altura;
}

public function setAltura($altura)
{
    $this->altura= $altura;
}

public function calcularArea()
{
    return $this->base * $this->altura;
}

public function calcularPerimetro()
{
    return 2*($this->base + $this->altura);
}

}
?>