-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/11/2023 às 16:04
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
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome_categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome_categoria`) VALUES
(1, 'Gastronomia'),
(2, 'Varejo'),
(3, 'Educação');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comerciantes`
--

CREATE TABLE `comerciantes` (
  `id` int(11) NOT NULL,
  `imagem` varchar(250) DEFAULT NULL,
  `nome_comercio` varchar(50) DEFAULT NULL,
  `descricao` varchar(150) DEFAULT NULL,
  `link_instagram` varchar(200) DEFAULT NULL,
  `status` enum('ativo','inativo') DEFAULT 'inativo',
  `categoria_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `comerciantes`
--

INSERT INTO `comerciantes` (`id`, `imagem`, `nome_comercio`, `descricao`, `link_instagram`, `status`, `categoria_id`, `usuario_id`) VALUES
(1, NULL, NULL, NULL, NULL, 'inativo', NULL, 1),
(2, 'flores.jpg', 'Arte Floral ', 'A floricultura que atende a comunidade próxima, fornecendo uma variedade de opções florais. ', 'https://www.instagram.com/', 'ativo', 2, 2),
(3, 'padaria-paes.jpg', '  Padoca da Vovó', ' Descubra sabores frescos: preço acessível e atendimento excelente!', 'https://www.instagram.com/', 'ativo', 1, 3),
(4, 'peppa300.jpg', 'EE Nossa Senhora da Penha', 'A Escola Estadual Nossa Senhora da Penha, inicialmente chamada de Colégio (ou Ginásio) Estadual da P', 'https://www.instagram.com/', 'ativo', 3, 4),
(5, 'lapis-de-cor.jpg', 'Barão de Ramalho', 'É uma escola da rede pública voltada ao ensino fundamental e médio.', 'https://www.instagram.com/', 'ativo', 3, 5);

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
(1, 'Maria', 'Marmota', '123.123.123-12', '(11)99999-9999', 'marmota@gmail.com', '1980-10-20', '$2y$10$HOYjU4vlH88Ca94NFfYO1esalTeSQsG8te1t0cNV.DjrCaU4r6EQi', 'admin'),
(2, 'Flora', 'Flores', '456.456.456-45', '(11)98888-8888', 'flora@gmail.com', '2000-10-15', '$2y$10$iQ1eOPPcN2C1dsR29rYjLOZEtFpONvyelptAZ.lT9pMq418rRYZwS', 'comerciante'),
(3, 'Luiz', 'Pães', '789.789.789-78', '(11)97777-7777', 'luiz@gmail.com', '1985-05-05', '$2y$10$2T6lUOlWlOV2ig.zlH5HWOBDO5k.aAx742e5U2DlF9bK6Ig4Ga6Z6', 'comerciante'),
(4, 'Nossa ', 'Senhora', '258.258.825-58', '(11)66666-6666', 'nossasenhora@gmail.com', '1975-12-20', '$2y$10$94LQ2SJlnw6bYcGBIJuA5.IoOKZKMWMcHkB5kUdBUMNW37k9G0gYW', 'comerciante'),
(5, 'Barrão', 'Ramalho', '789.789.663-25', '(11)55555-5555', 'baraoderamalho@gmail.com', '1999-12-20', '$2y$10$O.UWzHNbvdqlE8kpSg0MfuMMaYN26FH2vgltQ95sD.gosx1KMkuv6', 'comerciante');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `comerciantes`
--
ALTER TABLE `comerciantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comerciantes_usuarios` (`usuario_id`),
  ADD KEY `fk_comerciantes_categorias` (`categoria_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `comerciantes`
--
ALTER TABLE `comerciantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  ADD CONSTRAINT `fk_comerciantes_categorias` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_comerciantes_usuarios` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
