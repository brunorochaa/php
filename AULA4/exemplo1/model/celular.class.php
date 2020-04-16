<?php
class Celular
{
    private $marca;
    private $modelo;
    private $preco;
    private $quantidade;

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
        return $this->$atributo=$valor;
    }

    public function calcularValor()
    {
        return $this->preco * $this->quantidade;
    }

    public function __toString()
    {
        return '<p>Marca: ' .$this->marca;
               '<br>Modelo: ' .$this->modelo;
               '<br>Preço: ' .$this->preco;
               '<br>Quantidade: ' .$this->quantidade.'</p>';
    }
}
?>