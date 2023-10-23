-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/10/2023 às 04:07
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

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
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
(1, 'Maria', 'Marmota', '123.123.123-12', '(11)99999-9999', 'marmotas@gmail.com', '1980-10-20', '$2y$10$e/w.YkIQeOXX34bDh9c.a.PSD9t4HRHadycGmEpU3Q./ruL.AUcpC', 'admin'),
(2, 'Pamela', 'Copy', '789.789.789-78', '(11)88888-8888', 'copy@gmail.com', '1985-01-01', '$2y$10$ww/rWAvWk/5D3vDr5.aPJOS7fAC3plnmaKJlJynB0AZnQe2zG3K1W', 'comerciante'),
(3, 'Bruno', 'Bueno', '456.456.456-45', '(11)97777-7777', 'bueno@gmail.com', '1984-08-20', '$2y$10$NsfvgDUYX24OjWy9ztTUPeH0hFBD10XE.oWA7/mT6dejg/zpLf3FC', 'comerciante'),
(4, 'Flora', 'Flores', '741.741.741-74', '', 'flores@gmail.com', '1985-10-30', '$2y$10$IDpXSiHviDZLETWEwsoYGeOl9FwYlRx1bD85jocccZAzLKUAIHl1S', 'comerciante'),
(5, 'Luiz', 'Paes', '852.852.852-85', 'comerciante', 'luiz@gmail.com', '1970-01-01', '$2y$10$wCi9xoha9EyRx42F5peXIOCC.PEZ37L4n1ddxUTjwixQV6aTMUAzC', 'comerciante'),
(6, 'Marcos', 'Marcenaria', '963.963.963-96', '', '', '1970-01-01', '$2y$10$M3LJMInccj.vEJ5FhQJRYOC9uza.iS6mJLmAoCw7jrZBP9zFvYBiS', 'comerciante'),
(7, 'Giuseppe', 'Salvatore', '147.147.147-14', '(11)93333-3333', '', '1970-01-01', '$2y$10$OHBWiu1vAJtOf8anipa7pexVdixBoXLa2I2EXqXdGAFrHuE9f0D5e', 'comerciante'),
(8, 'Manuela', '', '', '', '', '1970-01-01', '$2y$10$PQoB7.3Mw2NABSQDYSJAZuqgqce54ogW8WeUEpqb8ScmZQX3MsO4K', 'comerciante');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
