<?php
class Cliente
{
    private $idCliente; //auto_increment
    private $nome; //string, varchar(100)
    private $sexo; //radio, varchar(15)
    private $idade; //number, int (3)
    private $cep; //string, varchar(9)
    private $numeroCasa; //string, varchar(10)
    private $telefone; //string, varchar(20)

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
        return nl2br("Código: $this->idCliente
                      Nome: $this->nome
                      Sexo: $this->sexo
                      Idade: $this->idade
                      CEP: $this->cep
                      Número da Casa: $this->numeroCasa
                      Telefone: $this->telefone
        ");
    }
}