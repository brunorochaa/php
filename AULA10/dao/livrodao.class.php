<?php
require "conexaobanco.class.php";
class LivroDAO
{ //DAO - Data access object - acesso aos dados do objeto

    private $conexao = null;

    public function __construct()
    {
        $this->conexao = ConexaoBanco::getInstance();
    }

    public function __destruct()
    {
    }

    //sem digitar
    public function cadastrar($livro)
    {
        try {
            //SQL - case insensitive
            $statement = $this->conexao->prepare("insert into livro(idlivro,titulo,editora,autor,anolancamento,genero)values(null,?,?,?,?,?)");
            $statement->bindValue(1, $livro->titulo);
            $statement->bindValue(2, $livro->editora);
            $statement->bindValue(3, $livro->autor);
            $statement->bindValue(4, $livro->anoLancamento);
            $statement->bindValue(5, $livro->genero);
            $statement->execute();
        } catch(PDOException $error) {
            echo "Erro ao cadastrar!".$error;
        }
    }//fecha cadastrar

    public function buscarLivros()
    {
        try {
            $statement = $this->conexao->query("select * from livro");
            $array = $statement->fetchAll(PDO::FETCH_CLASS,"Livro");
            return $array;
        } catch(PDOException $error) {
            echo "Erro ao buscar! ".$error;
        }
    }

    public function deletarLivro($idLivro)
    {
        try {
            $statement = $this->conexao->prepare("delete from livro where idLivro = ?");
            $statement->bindValue(1, $idLivro);

            $statement->execute(); //<------- ELE QUE EXECUTA NO BANCO!! TÁ NÉ?!

        } catch(PDOException $error) {
            echo "Erro ao excluir! ".$error;
        }
    }

    public function filtrarLivros($filtro, $pesquisa)
    {
        try {

            $query = "";
            switch($filtro) {
                case "codigo": $query = "where idlivro = ".$pesquisa;
                break;
                case "titulo": $query = "where titulo like '%{$pesquisa}%'";
                break;
                case "editora": $query = "where editora like '%{$pesquisa}%'";
                break;
                case "autor": $query = "where autor like '%{$pesquisa}%'";
                break;
                case "anolancamento": $query = "where anoLancamento = ".$pesquisa;
                break;
                case "genero": $query = "where genero like '%{$pesquisa}%'";
                break;
                case "todos": $query = "";
                break;
                case "default": $query = "";
                break;
            }//fecha switch

            $statement = $this->conexao->query("select * from livro {$query}");
            $array = $statement->fetchAll(PDO::FETCH_CLASS,"Livro");
            return $array;
        } catch(PDOException $error) {
            echo "Erro ao filtrar! ".$error;
        }
    }

    public function alterarLivro($livro)
    {
        try {

            $statement = $this->conexao->prepare("update livro set titulo=?, editora=?, autor=?, anoLancamento=?, genero=? where idlivro=?");

            $statement->bindValue(1, $livro->titulo);
            $statement->bindValue(2, $livro->editora);
            $statement->bindValue(3, $livro->autor);
            $statement->bindValue(4, $livro->anoLancamento);
            $statement->bindValue(5, $livro->genero);
            $statement->bindValue(6, $livro->idLivro);

            $statement->execute();

        } catch(PDOException $error) {
            echo "Erro ao alterar livro! ".$error;
        }
    }


    //alterar

}