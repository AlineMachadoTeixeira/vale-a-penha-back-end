<?php
namespace ValeaPenha;
use PDO, Exception;

class Comerciante{
    private int $id;
    private string $imagem;
    private string $nome_comercio;
    private string $descricao;
    private string $link_instagram;
    private string $status;
    private string $usuario_id;
    private PDO $conexao;

    //Conectando o banco 
    public function __construct(){
        $this->conexao = Banco::conecta();    
            
    }


    





    //ID
    public function getId(): int
    {
        return $this->id;
    }    
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    //IMAGEM
    public function getImagem(): string
    {
        return $this->imagem;
    }
    public function setImagem(string $imagem): self
    {
        $this->imagem = $imagem;

        return $this;
    }

    
    //Nome Comercio
    public function getNomeComercio(): string
    {
        return $this->nome_comercio;
    }    
    public function setNomeComercio(string $nome_comercio): self
    {
        $this->nome_comercio = $nome_comercio;

        return $this;
    }

    

    //Descrição
    public function getDescricao(): string
    {
        return $this->descricao;
    }    
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    //Link Instagram
    public function getLinkInstagram(): string
    {
        return $this->link_instagram;
    }    
    public function setLinkInstagram(string $link_instagram): self
    {
        $this->link_instagram = $link_instagram;

        return $this;
    }

    // Status
    public function getStatus(): string
    {
        return $this->status;
    }    
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    // ID Usuario
    public function getUsuarioId(): string
    {
        return $this->usuario_id;
    }    
    public function setUsuarioId(string $usuario_id): self
    {
        $this->usuario_id = $usuario_id;

        return $this;
    }
}