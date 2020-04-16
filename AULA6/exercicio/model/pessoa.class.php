<?php
class Pessoa
{
    private $nome;
    private $sexo;
    private $idade;
    private $altura;
    private $peso;

    public function __construct()
    {
    }

    public function __desctruct()
    {
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        return  $this->$atributo=$valor;
    }

    public function calcularImc(): float
    {
        return $this->peso / ($this->altura * $this->altura);
    }

    public function verificarImc(): string
    {
        if ($this->calcularImc < 18.5){
            return "Magreza";
        } else if ($this->calcularImc >= 18.5 || $this->calcularImc<= 24.9 ){
            return "Normal";
        } else if ($this->calcularImc >= 25.0 || $this->calcularImc<= 29.9 ){
            return "Sobrepeso";
        } else if ($this->calcularImc >= 30.0 || $this->calcularImc<= 39.9 ){
            return "Obesidade";
        } else if ($this->calcularImc >= 40.0){
            return "Obesidade Grave";
        }
            return "Erro! Inválido";
    }

    public function __toString()
    {
        return '<p>Nome: '.$this->nome;
               '<br>Sexo: '.$this->sexo;
               '<br>Idade: '.$this->idade;
               '<br>Altura: '.$this->altura;
               '<br>Peso: '.$this->peso. '</p>';
    }
}
?>