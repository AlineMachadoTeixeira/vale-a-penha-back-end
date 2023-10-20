-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/10/2023 às 02:41
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
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastros`
--

CREATE TABLE `cadastros` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(150) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `tipo` enum('admin','comerciante') DEFAULT 'comerciante',
  `senha` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `comerciantes`
--

CREATE TABLE `comerciantes` (
  `id` int(11) NOT NULL,
  `imagem` varchar(250) NOT NULL,
  `nome_comercio` varchar(30) NOT NULL,
  `descricao` varchar(60) NOT NULL,
  `link_instagram` varchar(200) NOT NULL,
  `status` enum('ativo','inativo') DEFAULT 'inativo',
  `cadastro_id` int(11) DEFAULT NULL
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
-- Índices de tabela `cadastros`
--
ALTER TABLE `cadastros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `comerciantes`
--
ALTER TABLE `comerciantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comerciantes_cadastros` (`cadastro_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cadastros`
--
ALTER TABLE `cadastros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `comerciantes`
--
ALTER TABLE `comerciantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `comerciantes`
--
ALTER TABLE `comerciantes`
  ADD CONSTRAINT `fk_comerciantes_cadastros` FOREIGN KEY (`cadastro_id`) REFERENCES `cadastros` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
