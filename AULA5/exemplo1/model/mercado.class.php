<?php
class Mercado
{
    private $produto;
    private $preco;
    private $quantidade;
    private $pagamento;

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
        return '<p>Produto: ' .$this->produto;
               '<br>Preço: ' .$this->preco;
               '<br>Quantidade: ' .$this->quantidade;
               '<br>Pagamento: '.$this->pagamento.'</p>';
    }
}
?>