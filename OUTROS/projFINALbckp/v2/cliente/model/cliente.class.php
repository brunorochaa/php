<?php
class Cliente
{
    private $idCliente;
    private $nome;
    private $sexo;
    private $idade;
    /*private $nivel; //nivelCliente(normal/veterano)
    private $endereco;
    private $telefone;
    private $urgencia; //nivelUrgencia(normal/urgente)*/

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
                      Nome: $this->nome;
                      Sexo: $this->sexo;
                      Idade: $this->idade;
        ");
    }
}