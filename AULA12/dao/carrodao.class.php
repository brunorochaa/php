<?php
require "conexaobanco.class.php";
class CarroDAO
{
    private $conexao = null;

    public function __construct()
    {
        $this->conexao = ConexaoBanco::getInstance();
    }

    public function __destruct()
    {
    }

    public function cadastrar($carro)
    {
        try {
            $statement = $this->conexao->prepare("insert into carro(idcarro,marca,modelo,cor,ano,chassi) values(null,?,?,?,?,?");
            $statement->bindValue(1, $carro->marca);
            $statement->bindValue(2, $carro->modelo);
            $statement->bindValue(3, $carro->cor);
            $statement->bindValue(4, $carro->ano);
            $statement->bindValue(5, $carro->chassi);

            $statement->execute();
        } catch (PDOException $error) {
            echo "Erro ao cadastrar!".$error;
        }
    }

    public function buscarCarro()
    {
        try {
            $statement = $this->conexao->query("select * from carro");
            $array = $statement->fetchAll(PDO::FETCH_CLASS, "Carro");
            return $array;
        } catch(PDOException $error) {
            echo "Erro ao buscar!".$error;
        }
    }

    public function deletarCarro($idCarro)
    {
        try {
            $statement = $this->conexao->prepare("delete from carro where idCarro = ?");
            $statement->bindValue(1, $idCarro);

            $statement = execute(); 
        } catch(PDOException $error) {
            echo "Erro ao deletar!".$error;
        }
    }

    public function filtrarCarro($filtro, $pesquisa)
    {
        try {
            $query = "";
            if ($filtro == "Código") {
                $query = "whery idcarro = ".$pesquisa;
            } else {
                $query = "";
            }

            $statement = $this->conexao->query("select * from carro {$query}");
            $array = $statement->fetchAll(PDO::FETCH_CLASS, "Carro");
            return $array;
        } catch(PDOException $error) {
            echo "Erro ao filtrar!".$error;
        }
    }

    public function alterarCarro($carro)
    {
        try {
            $statement = $this->conexao->prepare("update carro set marca=?, modelo=?, cor=?, ano=?, chassi=? where idCarro=?");
            $statement->bindValue(1, $carro->marca);
            $statement->bindValue(2, $carro->modelo);
            $statement->bindValue(3, $carro->cor);
            $statement->bindValue(4, $carro->ano);
            $statement->bindValue(5, $carro->chassi);

            $statement->execute();
        } catch(PDOException $error) {
            echo "Erro ao alterar!".$error;
        }
    }
}
?>