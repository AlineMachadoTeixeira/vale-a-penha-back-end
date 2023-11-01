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

    //Listar o comercio na pagina adm na parte da camera 
    public function listarComercio():array {
        $sql = "SELECT * FROM comerciantes ";  //ORDER BY nome não coloquei

        try{
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

        }catch (Exception $erro){
         die ("Erro ao listar comercio:" . $erro->getMessage());
        }

        return $resultado;

    }// Fim Lista/Ler Categoria


    //Listar o comercio na pagina adm na parte da camera 
    public function listarUmComercio(): array {
        $sql = "SELECT * FROM comerciantes WHERE usuario_id = :id"; 
    
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":id", $this->getId(), PDO::PARAM_INT);
            $consulta->execute();
            $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    
            if (!$resultado) {
                // Se o resultado estiver vazio, exiba um alerta
                echo "<script>alert('Nenhum resultado encontrado.');</script>";                
            }
    
        } catch (Exception $erro) {
            die("Erro ao listar um comercio:" . $erro->getMessage());
        }
    
        return $resultado;
    }



    //Listar o comercio na pagina comerciante na parte gerenciar comercio
    public function listarUmComercioGerenciar(): array {
        $sql = "SELECT * FROM comerciantes WHERE usuario_id = :id"; 
    
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":id", $this->usuario->getId(), PDO::PARAM_INT);

            $consulta->execute();

            $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        
        } catch (Exception $erro) {
            die("Erro ao listar um comercio:" . $erro->getMessage());
        }
    
        return $resultado;
    }

     //Atualizar Status usuario na pagina ADM 
     public function atualizarStatus(): void {
        $sql = "UPDATE comerciantes SET             
            status = :status 
            WHERE usuario_id = :usuario_id";

        try {
            $consulta = $this->conexao->prepare($sql);
            
            $consulta->bindValue(":usuario_id", $this->id, PDO::PARAM_INT);
            $consulta->bindValue(":status", $this->status, PDO::PARAM_STR);            

            $consulta->execute();            

        } catch (Exception $erro) {
            die("Erro ao atualizar o Status do comercio" . $erro->getMessage());
        }
   } //Fim do atualizar Status



     //Atualizar Comercio
     //Atualizar usuario na pagina adm-atualizar e comerciante.php atualizar comercio
     public function atualizarComercio(): void {
        $sql = "UPDATE comerciantes SET
            imagem = :imagem, 
            nome_comercio = :nome_comercio, 
            descricao = :descricao, 
            link_instagram = :link_instagram            
            
            WHERE usuario_id = :id";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":id", $this->usuario->getId(), PDO::PARAM_INT);
            $consulta->bindValue(":imagem", $this->getImagem(), PDO::PARAM_STR);
            $consulta->bindValue(":nome_comercio", $this->getNomeComercio(), PDO::PARAM_STR);
            $consulta->bindValue(":descricao", $this->getDescricao(), PDO::PARAM_STR);
            $consulta->bindValue(":link_instagram", $this->getLinkInstagram(), PDO::PARAM_STR);                      

            $consulta->execute();            

        } catch (Exception $erro) {
            die("Erro ao atualizar comércio" . $erro->getMessage());
        }
   } //Fim do atualizar usuario na pagina adm-atualizar    



     public function listar(): array {
        $sql = "SELECT 
                    usuarios.id,
                    usuarios.nome, 
                    usuarios.cpf, 
                    usuarios.telefone,
                    usuarios.email,
                    usuarios.tipo,
                    comerciantes.usuario_id,
                    COALESCE(comerciantes.status, 's/comercio') as status
                FROM comerciantes
                RIGHT JOIN usuarios ON comerciantes.usuario_id = usuarios.id
                ORDER BY tipo";
    
        try {
            $consulta = $this->conexao->prepare($sql);    
            // Não é necessário vincular o parâmetro :usuario_id, pois não está sendo utilizado na consulta SQL
    
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    
        } catch (Exception $erro) {
            die("Erro ao listar comercio:" . $erro->getMessage());
        }
    
        return $resultado;      
    }



   

    

    // Listar o comercio de cada usuario na pagina comerciante 
    public function listarUm(): array {       

        $sql = "SELECT * FROM comerciantes WHERE usuario_id = :usuario_id";    
        try {
            $consulta = $this->conexao->prepare($sql); 

            $consulta->bindValue(":usuario_id", $this->usuario->getId(), PDO::PARAM_INT);           
            
            $consulta->execute();
            $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    
            
        } catch (Exception $erro) {
            die("Erro ao listar comercio:" . $erro->getMessage());
        }

        return $resultado;
    }  


    public function listarDestaque(): array {
        $sql = "SELECT 
                    imagem, nome_comercio, descricao, link_instagram,
                    COALESCE(status, 's/comercio') as status
                FROM comerciantes
                WHERE status = :status
                ORDER BY nome_comercio";
    
        try {
            $consulta = $this->conexao->prepare($sql);    
            // Não é necessário vincular o parâmetro :usuario_id, pois não está sendo utilizado na consulta SQL
            $consulta->bindValue(":status",$this->getStatus(),PDO::PARAM_STR);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    
        } catch (Exception $erro) {
            die("Erro ao listar comercio:" . $erro->getMessage());
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