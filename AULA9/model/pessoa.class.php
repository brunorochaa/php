<?php
class Pessoa
{
    private $nome;
    private $data;

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
        return "Nome: ".$this->nome;
               "Data: ".$this->data;
    }
}
?>