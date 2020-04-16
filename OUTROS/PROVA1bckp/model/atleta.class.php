<?php
class Atleta
{
    private $nome;
    private $sexo;
    private $valor;
    private $modalidade;
    private $forma;
    private $parcelas;
    private $pace;

    public function __contruct()
    {
    }

    public function __destruct()
    {
    }

    public function __get($atributo)
    {
      return $this->$atributo;
    }

    public function __set($atributo,$valor)
    {
      $this->$atributo = $valor;
    }

    public function calcularVezes()
    {
      if ($this->parcelas == 1) {
        return $this->valor*0.05;
      } else if ($this->parcelas == 2) {
        return $this->valor*1.05;
      }
        return $this->valor*1.10;
    }

    public function verificarForma()
    {
      if ($this->forma == Boleto) {
        return "aguarde vamos emitir o boleto";
      } else if($this->forma == Visa || $this->forma == MasterCard) {
        return "aí sim, cartão de crédito, melhor opção!";
      }
    }

    public function verificarModalidade()
    {
      if ($this->modalidade == "3km") {
        return "apenas para caminhar";
      } else if($this->modalidade == "5km") {
        return "competitiva. Os 3 primeiros levam troféu!";
      }
      return "competitiva. Os 5 primeiros levam troféu!";
    }

    public function __toString()
    {
      '<p>Nome do Atleta: ' .$this->nome;
      '<br>Sexo: ' .$this->sexo;
      '<br>Modalidade: ' .$this->modalidade;
      '<br>Pace: ' .$this->pace;
      '<br>Valor: ' .$this->valor;
      '<br>Parcelas: ' .$this->parcelas;
      '<br> Forma de Pagamento: ' .$this->forma;
      '</p>';
    }
}
 ?>
