-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/10/2023 às 15:25
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
  `imagem` varchar(250) NOT NULL,
  `nome_comercio` varchar(30) NOT NULL,
  `descricao` varchar(60) NOT NULL,
  `link_instagram` varchar(200) NOT NULL,
  `status` enum('ativo','inativo') DEFAULT 'inativo',
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `comerciantes`
--

INSERT INTO `comerciantes` (`id`, `imagem`, `nome_comercio`, `descricao`, `link_instagram`, `status`, `usuario_id`) VALUES
(1, 'flores.jpg', ' Arte Floral', 'A floricultura que atende a comunidade, fornecendo uma varie', 'https://www.instagram.com/', 'inativo', 5),
(2, 'lapis-de-cor.jpg', ' Papelaria CopyPen', 'Papelaria de bairro com preços acessíveis a população e um ó', 'https://www.instagram.com/', 'inativo', 2);

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
(1, 'Maria', 'Marmota', '123.123.123-12', '(11)99999-9999', 'marmota@gmail.com', '1980-10-20', '$2y$10$2JDQ0Lk8zW6LgU3zsQgtmuYgB.5KQcYrRRuG84OlJcaVscupKdtLi', 'admin'),
(2, 'Pamela', 'Copy', '789.789.789-78', '(11)99888-8888', 'pamela@gmail.com', '1985-09-20', '$2y$10$F3VnAk5bArrIcOZ38Gnk3OgudPbnMLRFL7zyjBwzKcBE3MjKNExGG', 'comerciante'),
(3, 'Bruno', 'Bueno', '456.456.456-45', '11666666666', 'bueno@gmail.com', '1984-08-20', '$2y$10$RrpBtKfTdsHL8zK.X6SfF.gvrc8hrlSZCAuDcHfH.ou/9VrNPj7Xq', 'admin'),
(4, 'Luiz', 'Paes', '789.789.789-78', '(11)33333-3333', 'luiz@gmail.com', '1985-09-23', '$2y$10$aktk50q1lzfcC7wH5lX10uawbPf.ndXAEt9OU8HkuzNOCcHo9.YmG', 'comerciante'),
(5, 'Flora', 'Flores', '741.741.741-74', '(11)96666-6666', 'flora@gmail.com', '2001-01-01', '$2y$10$jEGNIaKUZogkjZKzje7C3OZFnh45x09jevhPgiRosTzoN7AS5SvB6', 'comerciante');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
