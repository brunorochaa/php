<?php
require "conexaobanco.class.php";
class ServicoDAO
{
    private $conexao = null;

    public function __construct()
    {
        $this->conexao = ConexaoBanco::getInstance();
    }

    public function __destruct()
    {
    }

    public function cadastrar($servico)
    {
        try {
            $statement = $this->conexao->prepare("insert into servico(idServico,descricaoServico,filial,nomeMecanico,carro,cor,placa,tipoCombustivel,urgencia)values(null,?,?,?,?,?,?,?,?)");
            $statement->bindValue(1, $servico->descricaoServico);
            $statement->bindValue(2, $servico->filial);
            $statement->bindValue(3, $servico->nomeMecanico);
            $statement->bindValue(4, $servico->carro);
            $statement->bindValue(5, $servico->cor);
            $statement->bindValue(6, $servico->placa);
            $statement->bindValue(7, $servico->tipoCombustivel);
            $statement->bindValue(8, $servico->urgencia);
            $statement->execute();
        } catch(PDOException $error) {
            echo "Erro ao cadastrar!".$error;
        }
    }
}