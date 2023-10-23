<?php
namespace ValeaPenha;
use PDO, Exception;

class Usuario{ 
    private int $id;
    private string $nome;
    private string $sobrenome;
    private string $cpf;
    private string $telefone;
    private string $email;
    private string $data;    
    private string $senha;  
    private string $tipo;  
    private PDO $conexao;


    //Conectando o banco 
    public function __construct(){
        $this->conexao = Banco::conecta();    
            
    }


    //INSERT-Inserir Usuarios no formulario Cadastre-se  //tipo
    public function inserirUsuario(): void {
        $sql = "INSERT INTO usuarios(nome, sobrenome, cpf, telefone, email, data, senha)
              VALUES(:nome, :sobrenome, :cpf, :telefone, :email, :data, :senha)";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":nome", $this->nome, PDO::PARAM_STR);
            $consulta->bindValue(":sobrenome", $this->sobrenome, PDO::PARAM_STR);
            $consulta->bindValue(":cpf", $this->cpf, PDO::PARAM_STR);
            $consulta->bindValue(":telefone", $this->telefone, PDO::PARAM_STR);
            $consulta->bindValue(":email", $this->email, PDO::PARAM_STR);
            $consulta->bindValue(":data", $this->data, PDO::PARAM_STR);
            $consulta->bindValue(":senha", $this->senha, PDO::PARAM_STR);
            //$consulta->bindValue(":tipo", $this->tipo, PDO::PARAM_STR);          

            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro ao cadastrar usuário:" . $erro->getMessage());
        }
    } // INSERT-Inserir Usuarios no formulario Cadastre-se

    /* Função para data de nacimento */
    public function formatarDataParaBanco(string $data): string {
        return date('Y-m-d', strtotime($data));
    }

    /* Método para buscar no banco um usuário através do email */
   public function buscar():array | bool { 

    $sql = "SELECT * FROM  usuarios WHERE email = :email";

    try {
        $consulta = $this->conexao->prepare($sql);
        $consulta->bindValue(":email", $this->email, PDO::PARAM_STR);
        $consulta->execute();
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

    }catch (Exception $erro){
     die ("Erro ao buscar usuario" . $erro->getMessage());
    }

     return $resultado;

    
   }

    /* Função para Codificar a senha */
    public function codificaSenha(string $senha): string{
        return password_hash($senha, PASSWORD_DEFAULT);
    }

    /* Função para Verificar a senha */
    public function verificarSenha(string $senhaFormulario, string $senhaBanco): string {
        
        if (password_verify($senhaFormulario, $senhaBanco)) {
            
            return $senhaBanco;
            
        } else {            
            return $this->codificaSenha($senhaFormulario);
        }
    }
     



    //Listar usuario na página adm 
    public function listarUsuarios(): array {
        $sql = "SELECT * FROM usuarios ORDER BY tipo";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro ao listar usuários:" . $erro->getMessage());
        }

        return $resultado;
    } //Listar usuario na página adm

   //Listar Um usuario na página adm
   public function listarUmUsuario():array {
    $sql = "SELECT * FROM usuarios WHERE id = :id";

    try{
        $consulta = $this->conexao->prepare($sql);
        $consulta->bindValue(":id", $this->id, PDO::PARAM_INT);

        $consulta->execute();

        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

    }catch (Exception $erro){
     die ("Erro ao carregar dados" . $erro->getMessage());
    }

    return $resultado;
   } //Fim Listar Um usuario na página adm


    //Atualizar usuario na pagina adm-atualizar
    public function atualizarUsuarios(): void {
        $sql = "UPDATE usuarios SET
            nome = :nome, 
            sobrenome = :sobrenome, 
            cpf = :cpf, 
            telefone = :telefone,
            email = :email,
            data = :data,
            senha = :senha, 
            tipo = :tipo 
            WHERE id = :id";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":id", $this->id, PDO::PARAM_INT);
            $consulta->bindValue(":nome", $this->nome, PDO::PARAM_STR);
            $consulta->bindValue(":sobrenome", $this->sobrenome, PDO::PARAM_STR);
            $consulta->bindValue(":cpf", $this->cpf, PDO::PARAM_STR);
            $consulta->bindValue(":telefone", $this->telefone, PDO::PARAM_STR);           
            $consulta->bindValue(":email", $this->email, PDO::PARAM_STR);
            $consulta->bindValue(":data", $this->data, PDO::PARAM_STR);
            $consulta->bindValue(":senha", $this->senha, PDO::PARAM_STR);
            $consulta->bindValue(":tipo", $this->tipo, PDO::PARAM_STR);            

            $consulta->execute();            

        } catch (Exception $erro) {
            die("Erro ao atualizar usuário" . $erro->getMessage());
        }
   } //Fim do atualizar usuario na pagina adm-atualizar


     //Atualizar usuario na pagina adm-Tipo
     public function atualizarTipoUsuario(): void {
        $sql = "UPDATE usuarios SET             
            tipo = :tipo 
            WHERE id = :id";

        try {
            $consulta = $this->conexao->prepare($sql);
            
            $consulta->bindValue(":tipo", $this->tipo, PDO::PARAM_STR);            

            $consulta->execute();            

        } catch (Exception $erro) {
            die("Erro ao atualizar o tipo de ussuario" . $erro->getMessage());
        }
   } //Fim do atualizar usuario na pagina adm-Tipo

    //Excluir usuario na pagina adm
    public function excluirUsuario():void {
        $sql = "DELETE FROM usuarios WHERE id = :id";
    
        try{
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":id", $this->id, PDO::PARAM_INT);
    
            $consulta->execute();
    
        }catch (Exception $erro){
         die ("Erro ao excluir usuário:" . $erro->getMessage());
        }
    } //FIM Excluir usuario na pagina adm
    






    



    /* === GET e SET === */ 
    
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

    //Nome
    public function getNome(): string
    {
        return $this->nome;
    }    
    public function setNome(string $nome): self
    {
        $this->nome = $this->nome = filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }

    //Sobrenome
    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }    
    public function setSobrenome(string $sobrenome): self
    {
        $this->sobrenome = $this->sobrenome = filter_var($sobrenome, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }

    //CPF;
    public function getCpf(): string
    {
        return $this->cpf;
    }    
    public function setCpf(string $cpf): self
    {
        $this->cpf = $this->cpf = filter_var($cpf, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }

    //Telefone;
    public function getTelefone(): string
    {
        return $this->telefone;
    }    
    public function setTelefone(string $telefone): self
    {
        $this->telefone = $this->telefone = filter_var($telefone, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }

    //E-mail;
    public function getEmail(): string
    {
        return $this->email;
    }    
    public function setEmail(string $email): self
    {
        $this->email = $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);

        return $this;
    }

    //Data de nascimento;
    public function getData(): string
    {
        return $this->data;
    }    
    public function setData(string $data): self
    {
        $this->data = $this->data = filter_var($data, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }

    //Tipo(admin ou comerciante);
    public function getTipo(): string
    {
        return $this->tipo;
    }    
    public function setTipo(string $tipo): self
    {
        $this->tipo = $this->tipo = filter_var($tipo, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }

    //Senha;
    public function getSenha(): string
    {
        return $this->senha;
    }    
    public function setSenha(string $senha): self
    {
        $this->senha = $this->senha = filter_var($senha, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }

}



