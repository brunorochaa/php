<?php
class Mes
{

private $mes;

public function Mes()
{
}

public function getMes()
{
    return $this->mes;
}

public function setMes($mes)
{
    $this->mes= $mes;
}

public function validarMes()
{
    if($this->mes <1){
        return "Mês inválido!";
    }else if($this->mes >12){
        return "Mês inválido!";
    }else if($this->mes== 1){
        return "Janeiro";
    }else if($this->mes== 2){
        return "Fevereiro";
    }else if($this->mes== 3){
        return "Março";
    }else if($this->mes== 4){
        return "Abril";
    }else if($this->mes== 5){
        return "Maio";
    }else if($this->mes== 6){
        return "Junho";
    }else if($this->mes== 7){
        return "Julho";
    }else if($this->mes== 8){
        return "Agosto";
    }else if($this->mes== 9){
        return "Setembro";
    }else if($this->mes== 10){
        return "Outubro";
    }else if($this->mes== 11){
        return "Novembro";
    }else{
        return "Dezembro";
    }
}

}
?>