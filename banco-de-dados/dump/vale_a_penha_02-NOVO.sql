-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31/10/2023 às 15:54
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vale_a_penha`
--
CREATE DATABASE IF NOT EXISTS `vale_a_penha` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `vale_a_penha`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `comerciantes`
--

CREATE TABLE `comerciantes` (
  `id` int(11) NOT NULL,
  `imagem` varchar(250) DEFAULT NULL,
  `nome_comercio` varchar(30) DEFAULT NULL,
  `descricao` varchar(150) DEFAULT NULL,
  `link_instagram` varchar(200) DEFAULT NULL,
  `status` enum('ativo','inativo') DEFAULT 'inativo',
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `comerciantes`
--

INSERT INTO `comerciantes` (`id`, `imagem`, `nome_comercio`, `descricao`, `link_instagram`, `status`, `usuario_id`) VALUES
(1, 'flores.jpg', '   Arte Floral', 'A floricultura que atende a comunidade próxima, fornecendo uma variedade de opções florais. ', 'https://www.instagram.com/', 'ativo', 2),
(2, NULL, NULL, NULL, NULL, 'inativo', 3),
(3, 'padaria-paes.jpg', 'Padoca da Vovó', 'Descubra sabores frescos: preço acessível e atendimento excelente!', 'https://www.instagram.com/', 'ativo', 4),
(4, NULL, NULL, NULL, NULL, 'inativo', 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(150) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `senha` varchar(250) NOT NULL,
  `tipo` enum('admin','comerciante') DEFAULT 'comerciante'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `cpf`, `telefone`, `email`, `data`, `senha`, `tipo`) VALUES
(2, 'Flora', 'Flores', '147.147.147-14', '(11)98888-8888', 'flora@gmail.com', '1985-10-30', '$2y$10$X7AGGxrF6g7tT23V4aJL8e5TO6aqGDvHtuE6s1jMwH6aJrk9GIDuy', 'comerciante'),
(3, 'Maria', 'Marmota', '123.123.123-12', '(11)99999-9999', 'marmota@gmail.com', '1980-10-20', '$2y$10$8bXOE7Q9TQ5SQdbLiBrueOVw.rKW8CpT4hzVo5zuWqzUsQZeGskGy', 'admin'),
(4, 'Luiz', 'Pães', '454.454.454-54', '(11)11111-1111', 'luiz@gmail.com', '2004-02-11', '$2y$10$xT.7275p1dtoFNIRzEYZKuzFT4Lk45nbGPzJ5i2HnRDjJ2kvpokC2', 'comerciante'),
(5, 'Bruno', 'Bueno', '312.312.313-12', '(11)11111-1112', 'bruno@gmail.com', '2004-03-10', '$2y$10$1vfDgg.l/wjK2b6SFfspzOhIS35yXtF9EHPPsmU8HaUpzXFCvHwQu', 'comerciante');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `comerciantes`
--
ALTER TABLE `comerciantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comerciantes_usuarios` (`usuario_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comerciantes`
--
ALTER TABLE `comerciantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `comerciantes`
--
ALTER TABLE `comerciantes`
  ADD CONSTRAINT `fk_comerciantes_usuarios` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
