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

     //Inserir comercio na pagina comerciante - Cadastrar Comércio
     public function inserirComercio(): void {
        $sql = "INSERT INTO comerciantes(imagem, nome_comercio, descricao, link_instagram, usuario_id)
              VALUES(:imagem, :nome_comercio, :descricao, :link_instagram, :usuario_id)";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":imagem", $this->imagem, PDO::PARAM_STR);
            $consulta->bindValue(":nome_comercio", $this->nome_comercio, PDO::PARAM_STR);
            $consulta->bindValue(":descricao", $this->descricao, PDO::PARAM_STR);
            $consulta->bindValue(":link_instagram", $this->link_instagram, PDO::PARAM_STR);              

            $consulta->execute();

        } catch (Exception $erro) {
            die("Erro ao cadastrar comercio:" . $erro->getMessage());
        }
    } //FIM Inserir comercio na pagina comerciante - Cadastrar Comércio


    public function listarComerciante():array {
        /// Fiz assim por causa do id usuario talvez não vai ser necessario
        $sql = "SELECT 
                    comerciantes.id,
                    comerciantes.imagem,
                    comerciantes.nome_comercio,
                    comerciantes.descricao,
                    comerciantes.link_instagram,
                    comerciantes.status,
                    usuarios.nome AS Nome Usuario,  
                    
                FROM comerciantes INNER JOIN usuarios
                ON comerciantes.usuario_id = usuarios.id";

        
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro ao listar comerciantes:" . $erro->getMessage());
        }
        
        return $resultado;
    }








    //ID
    public function getId(): int
    {
        return $this->id;
    }    
    public function setId(int $id): self
    {
        $this->id = $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

        return $this;
    }

    //IMAGEM
    public function getImagem(): string
    {
        return $this->imagem;
    }
    public function setImagem(string $imagem): self
    {
        $this->imagem = $this->imagem = filter_var($imagem, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }

    
    //Nome Comercio
    public function getNomeComercio(): string
    {
        return $this->nome_comercio;
    }    
    public function setNomeComercio(string $nome_comercio): self
    {
        $this->nome_comercio =  $this->nome_comercio = filter_var($nome_comercio, FILTER_SANITIZE_SPECIAL_CHARS);; 

        return $this;
    }

    

    //Descrição
    public function getDescricao(): string
    {
        return $this->descricao;
    }    
    public function setDescricao(string $descricao): self
    {
        $this->descricao = filter_var($descricao, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }

    //Link Instagram
    public function getLinkInstagram(): string
    {
        return $this->link_instagram;
    }    
    public function setLinkInstagram(string $link_instagram): self
    {
        $this->link_instagram =  filter_var($link_instagram, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }

    // Status
    public function getStatus(): string
    {
        return $this->status;
    }    
    public function setStatus(string $status): self
    {
        $this->status =  filter_var ($status, FILTER_SANITIZE_SPECIAL_CHARS); 

        return $this;
    }

    // ID Usuario
    public function getUsuarioId(): string
    {
        return $this->usuario_id;
    }    
    public function setUsuarioId(string $usuario_id): self
    {
        $this->usuario_id =filter_var( $usuario_id, FILTER_SANITIZE_NUMBER_INT);

        return $this;
    }
}