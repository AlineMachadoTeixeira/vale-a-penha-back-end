![](modelo-logico.png)

<!--  Crie um banco   -->
```sql
CREATE DATABASE vale_a_penha CHARACTER SET utf8mb4;
```

<!-- Criar tabela COMERCIANTES  -->
```sql
CREATE TABLE comerciantes(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    sobrenome VARCHAR(150) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    telefone VARCHAR(14) NOT NULL,
    email VARCHAR(100) NOT NULL,
    data_de_nascimento DATE NOT NULL,
    status ENUM('ativo', 'inativo') NULL DEFAULT 'inativo',
    senha VARCHAR(250) NOT NULL   
); 
```

<!-- Criar tabela COMERCIOS  -->
```sql
CREATE TABLE comercios(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    imagem VARCHAR(250) NOT NULL,
    nome_comercio VARCHAR(30) NOT NULL,
    descricao VARCHAR(60) NOT NULL,
    link_instagram VARCHAR(200) NOT NULL,
    comerciante_id INT NULL       
); 
```

<!-- Criar tabela ADMINISTRADORES  -->
```sql
CREATE TABLE administradores(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(250) NOT NULL           
); 
```

<!--Criando a chave-estrangeira Confirmar se está correto com a opção on Delete Cascade-->
```sql
ALTER TABLE comercios
    
    ADD CONSTRAINT fk_comercios_comerciantes
    FOREIGN KEY (comerciante_id) REFERENCES comerciantes(id) ON DELETE CASCADE;
```

<!-- 	ON DELETE CASCADE – Uma operação de exclusão em uma tabela referenciada se propaga (cascade = em cascata) para as chaves estrangeiras correspondentes. Ou seja, ao excluir um registro em uma tabela, um registro relacionado em outra tabela é automaticamente excluído. Por exemplo, se uma editora de uma tabela de editoras for excluída, os livros da tabela de livros relacionados com esta editora também serão excluídos automaticamente. -->


<!-- ```sql
ALTER TABLE comercios
    
    ADD CONSTRAINT fk_comercios_comerciantes
    FOREIGN KEY (comerciante_id) REFERENCES comerciantes(id);

``` -->