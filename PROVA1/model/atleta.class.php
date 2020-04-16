<?php
class Atleta
{
    private $nome;
    private $sexo;
    private $modalidade;
    private $pace;
    private $valor;
    private $forma;
    private $parcelas;

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

    public function verificarModalidade()
    {
        if($this->modalidade == "3km") {
            return "modalidade apenas para caminhar";
        } elseif($this->modalide == "5km") {
            return "modalidade competitiva, os 3 primeiros levam trófeu";
        }
        return "modalidade competitiva, os 5 primeiros levam trófeu";
    }

    public function verificarFormaDePagamento()
    {
        if($this->forma== Boleto) {
            return "aguarde, vamos emitir o boleto";
        }
            return "aí sim, cartão de crédito, melhor opção";
    }

    public function calcularVezes()
    {
        if($this->parcelas==1) {
            return $this->valor * 0.95;
        } elseif($this->parcelas==2) {
            return $this->valor * 1.05;
        }
        return $this-> valor * 1.10;
    }

    public function __toString()
    {
        '<p>Nome do Atleta: ' .$this->nome;
        '<br>Sexo: ' .$this->sexo;
        '<br>Modalidade: ' .$this->modalidade;
        '<br>Pace: ' .$this->pace;
        '<br>Valor: ' .$this->valor;
        '<br> Forma de Pagamento: ' .$this->forma;
        '<br>Parcelas: ' .$this->parcelas .'</p>';
    }
}
?>