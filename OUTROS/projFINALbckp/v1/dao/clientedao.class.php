<?php
require "conexaobanco.class.php";
class ClienteDAO
{
    private $conexao = null;

    public function __construct()
    {
        $this->conexao = ConexaoBanco::getInstance();
    }

    public function __destruct()
    {
    }

    public function cadastrar($cliente)
    {
        try {
            $statement = $this->conexao->prepare("insert into cliente(idCliente,nome,sexo,idade)values(null,?,?,?)");
            $statement->bindValue(1, $cliente->nome);
            $statement->bindValue(2, $cliente->sexo);
            $statement->bindValue(3, $cliente->idade);
            $statement->execute();
        } catch(PDOException $error) {
            echo "Erro ao cadastrar!".$error;
        }
    }
}