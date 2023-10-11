-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/10/2023 às 15:20
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
-- Estrutura para tabela `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `comerciantes`
--

CREATE TABLE `comerciantes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(150) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_de_nascimento` date NOT NULL,
  `status` enum('ativo','inativo') DEFAULT 'inativo',
  `senha` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `comerciantes`
--

INSERT INTO `comerciantes` (`id`, `nome`, `sobrenome`, `cpf`, `telefone`, `email`, `data_de_nascimento`, `status`, `senha`) VALUES
(1, 'Manuela', 'Copy Pen', '312.312.313-12', '(11)99999-9999', 'copypen@gmail.com', '1981-01-01', 'inativo', '$2y$10$IKQcc38ZDaSSz6wX7CK9D.l99WyOgg5jqzxaMLDzYMWv5a2SwIW6O');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comercios`
--

CREATE TABLE `comercios` (
  `id` int(11) NOT NULL,
  `imagem` varchar(250) NOT NULL,
  `nome_comercio` varchar(30) NOT NULL,
  `descricao` varchar(60) NOT NULL,
  `link_instagram` varchar(200) NOT NULL,
  `comerciante_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `comerciantes`
--
ALTER TABLE `comerciantes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `comercios`
--
ALTER TABLE `comercios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comercios_comerciantes` (`comerciante_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `comerciantes`
--
ALTER TABLE `comerciantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `comercios`
--
ALTER TABLE `comercios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `comercios`
--
ALTER TABLE `comercios`
  ADD CONSTRAINT `fk_comercios_comerciantes` FOREIGN KEY (`comerciante_id`) REFERENCES `comerciantes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
