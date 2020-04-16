<?php
class Carro
{
    private $idCarro;
    private $marca;
    private $modelo;
    private $cor;
    private $ano;
    private $chassi;

    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function __toString()
    {
        return nl2br("Código: $this->idCarro
                Marca: $this->marca
                Modelo: $this->modelo
                Cor: $this->cor
                Ano: $this->ano
                Chassi: $this->chassi");
    }
}
?>
