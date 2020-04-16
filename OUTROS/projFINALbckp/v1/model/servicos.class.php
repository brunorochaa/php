<?php
class Servicos
{
    private $idServicos;
    private $tipoServico;
    private $descricaoServico;
    private $nomeMecanico;
    /*private $carro;
    private $ano;
    private $cor;
    private $placa;
    private $quilometragem;
    private $tipoCombustivel;*/

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
        return nl2br("Código: $this->idServicos
                      Tipo de Serviço: $this->tipoServico;
                      Descrição do Serviço: $this->situacao;
                      Mecânico: $this->nomeMecanico;
        ");
    }
}