<?php
require "conexaobanco.class.php";
class ServicosDAO
{
    private $conexao = null;

    public function __construct()
    {
        $this->conexao = ConexaoBanco::getInstance();
    }

    public function __destruct()
    {
    }

    public function cadastrar($servicos)
    {
        try {
            $statement = $this->conexao->prepare("insert into servicos(idServicos,tipoServico,descricaoServico,nomeMecanico)values(null,?,?,?)");
            $statement->bindValue(1, $servicos->tipoServico);
            $statement->bindValue(2, $servicos->descricaoServico);
            $statement->bindValue(3, $servicos->nomeMecanico);
            $statement->execute();
        } catch(PDOException $error) {
            echo "Erro ao cadastrar!".$error;
        }
    }
}