<?php

namespace ValeaPenha;

use PDO, Exception;

class Categoria
{
    private int $id;
    private string $nome_categoria;
    private PDO $conexao;

    //Conectando o banco 
    public function __construct()
    {
        $this->conexao = Banco::conecta();
    }

    //Lista/Ler Categoria  Select 
    public function listarCategoria(): array
    {
        $sql = "SELECT * FROM categorias ";  //ORDER BY nome não coloquei

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro ao listar categoria:" . $erro->getMessage());
        }

        return $resultado;
    } // Fim Lista/Ler Categoria









    public function getId(): int
    {
        return $this->id;
    }


    public function setId(int $id): self
    {
        $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        return $this;
    }


    public function getNomeCategoria(): string
    {
        return $this->nome_categoria;
    }


    public function setNomeCategoria(string $nome_categoria): self
    {
        $this->nome_categoria = filter_var($nome_categoria, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }
}
