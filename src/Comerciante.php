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
    //private string $usuario_id;
    private PDO $conexao;

    public Usuario $usuario;
    
    //Conectando o banco 
    public function __construct(){
        $this->usuario = new Usuario;
        $this->conexao = Banco::conecta();                
    }

    //INSERT-Inserir Comerciante na pagina comerciante -- Cadastrar Comércio
    public function inserirComercio(): void {
        $sql = "INSERT INTO  comerciantes (imagem, nome_comercio, descricao, link_instagram,  usuario_id) 
                 VALUES (:imagem, :nome_comercio, :descricao, :link_instagram,  :usuario_id)";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":imagem", $this->imagem, PDO::PARAM_STR);
            $consulta->bindValue(":nome_comercio", $this->nome_comercio, PDO::PARAM_STR);
            $consulta->bindValue(":descricao", $this->descricao, PDO::PARAM_STR);
            $consulta->bindValue(":link_instagram", $this->link_instagram, PDO::PARAM_STR);
            
            $consulta->bindValue(":usuario_id", $this->usuario->getId(), PDO::PARAM_INT);         

            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro ao inserir notícia:" . $erro->getMessage());
        }
    } 

    /* Método para upload de foto */ 
    public function upload(array $arquivo):void{

        //Definindo os tipos válidos de foto o mesmo tipo que colocado no formulario
        $tiposValidos = [
            "image/png",
            "image/jpeg",
            "image/gif",
            "image/*",
            "image/svg+xml"
        ];

        // Verificando se o arquivo NÃO É um dos tipos válidos 
        if (!in_array($arquivo["type"], $tiposValidos)){
            //Não fiz o Alerta ao o usuario. 
            die(
            //     "
            //     <script>
            //     alert('Formato inválido!');
            //     history.back();
            //     </script>
            // "
            );
        }

        //Acessando APENAS o nome/extensão do arquivo 
        $nome = $arquivo["name"];

        //Acessando os dados de acesso/armazenamento temporários
        $temporario = $arquivo["tmp_name"];

        //Definindo a pasta de destino das imagens no site 
        $pastaFinal = "../imagens/".$nome;

        //Movemos/enviamos da área temporária para a final/destino
        move_uploaded_file($temporario, $pastaFinal);
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
    // public function getUsuarioId(): string
    // {
    //     return $this->usuario_id;
    // }    
    // public function setUsuarioId(string $usuario_id): self
    // {
    //     $this->usuario_id =filter_var( $usuario_id, FILTER_SANITIZE_NUMBER_INT);

    //     return $this;
    // }
}