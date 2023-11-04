-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/11/2023 às 14:41
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
  `descricao` varchar(200) DEFAULT NULL,
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
(2, 'flores.jpg', ' Arte Floral ', 'A floricultura que atende a comunidade próxima, fornecendo uma variedade de opções flores. ', 'https://www.instagram.com/', 'ativo', 2, 2),
(3, 'padaria-paes.jpg', '  Padoca da Vovó', ' Descubra sabores frescos: preço acessível e atendimento excelente!', 'https://www.instagram.com/', 'ativo', 1, 3),
(4, 'nossa-senhora-da-penha.jpg', ' EE Nossa Senhora da Penha', 'Escola Estadual Nossa Senhora da Penha: fundada em 1952, é uma escola pública do bairro voltada ao ensino médio.', 'https://www.instagram.com/', 'ativo', 3, 4),
(5, 'barao-de-ramalho.jpg', ' Barão de Ramalho', 'É uma escola da rede pública voltada ao ensino fundamental e médio.', 'https://www.instagram.com/', 'ativo', 3, 5),
(6, 'santos-dummont.jpg', 'Santos Dummont', 'Fundada em 1913 Dummont, é a primeira escola do bairro da Penha, oferecendo ensino fundamental.', 'https://www.instagram.com/', 'ativo', 3, 6),
(7, 'sao-vicnte-de-paulo-penha.jpg', 'Colégio São Vicente de Paulo', ' Colégio histórico e cultural, fundado em 1918, é o mais antigo da Rede Educacional Vicentina.', 'https://www.instagram.com/', 'ativo', 3, 7),
(8, 'senac.jpg', 'Senac Penha', 'Senac Penha, a unidade tem uma grande variedade de cursos  técnicos, aprendizagem e cursos EAD', 'https://www.instagram.com/', 'ativo', 3, 8),
(9, 'mercado-bueno.jpg', '    Mercado Bueno', 'O mercadinho mais perto de você com ofertas e produtos de qualidade.', 'https://www.instagram.com/', 'ativo', 2, 9),
(10, 'padaria-requinte.jpg', '  Padaria Requinte!', 'Padaria antiga que serve café da manhã, lanches, pizzas, frango assado e pães há quatro gerações.', 'https://www.instagram.com/requinte/', 'ativo', 1, 10),
(11, 'yara-panificadora.jpg', 'Nova Yara Panificadora', 'Panificadora tradicional que serve café da manhã e pratos executivos em um ambiente descontraído.', 'https://www.instagram.com/padarianovayara/', 'ativo', 1, 11),
(12, 'panelao.jpg', 'Panelão do Norte', 'Restaurante com tema nordestino e música sertaneja, que serve pratos e especialidades regionais.', 'https://www.instagram.com/panelaopenha/', 'ativo', 1, 12),
(13, 'tiquatirao.jpg', 'Tiquatirão Frutos Do Mar', 'Restaurante em forma de navio que serve camarão, caranguejo, mexilhão, polvo e peixe assado.', 'https://www.instagram.com/tiquatiraorestaurante/', 'ativo', 1, 13),
(14, 'bar-jao.jpg', 'Bar do Jão', 'O Bar do Jão conta com um ambiente aconchegante e descontraído. O Bar do Jão foi eleito tetracampeão do Concurso Comida di Buteco em 2017, 2018, 2019 e 2021.', 'https://www.instagram.com/bardojaoetradicao/', 'ativo', 1, 14);

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
(5, 'Barão', 'Ramalho', '789.789.663-25', '(11)55555-5555', 'baraoderamalho@gmail.com', '1999-12-20', '$2y$10$O.UWzHNbvdqlE8kpSg0MfuMMaYN26FH2vgltQ95sD.gosx1KMkuv6', 'comerciante'),
(6, 'Santos ', 'Dummont', '369.369.369-36', '(11)44444-4444', 'santos@gmail.com', '1991-11-01', '$2y$10$kcqpVLXucyQvKnPE4MhO/utU3k97Ief7D5axsRzGgtlU4aC/KX3pu', 'comerciante'),
(7, 'São ', 'Vicente ', '258.258.825-58', '(11)66666-6666', 'saovicente@gmail.com', '1992-12-02', '$2y$10$zqQy8sI3btr1B0e6pC4AmOOG66O3KG9CrMGhe7iApfRsYuanw765W', 'comerciante'),
(8, 'Senac', 'Penha', '258.258.825-58', '(11)22222-2222', 'senac@gmail.com', '1993-03-03', '$2y$10$9FmpvI/.BYf.p9wE6ZXePuC1LR9Nz9WFwai3GgH6rfMYhiNrKD0Ie', 'comerciante'),
(9, 'Bruno', 'Bueno', '525.252.525-25', '(11)95855-5221', 'bruno@gmail.com', '1994-04-04', '$2y$10$7L0S69St2kZonquMoH1RWOpPWW82d1qSZ5glW1wyAPJC5NAMjjCa.', 'comerciante'),
(10, 'Requinte', 'Padaria', '369.452.687-52', '(11)55555-5555', 'requinte@gmail.com', '1994-04-04', '$2y$10$yTeHILkWgJ3RtI6AbjJaEe4b1rYxVoEbtavrVrP2.0MZe/onCvcta', 'comerciante'),
(11, 'Yara', 'Padaria', '452.369.872-25', '(11)55255-2252', 'yara@gmail.com', '1995-05-05', '$2y$10$vp/.6uw5pllWI7dS0DcXyulMx4/ZPEGdRdZm.Z0vecWZwwjJTwKEy', 'comerciante'),
(12, 'Panelão', 'Norte', '523.655.258-87', '(11)44444-4444', 'panelao@gmail.com', '1996-06-06', '$2y$10$.61G72.Y.BYebQgcci9CRu8Omd.6tCPMugX6f9HommhKISEa8Ajoi', 'comerciante'),
(13, 'Tiquatirão', 'Penha', '869.741.325-69', '(11)25358-2233', 'tiquatirao@gmail.com', '1997-07-07', '$2y$10$keo7Pnimni493EiVJkxA8Oz2c2xnKUuoZcLk0v6XK2I3gi9k3IQm2', 'comerciante'),
(14, 'Jão', 'Bar', '123.596.582-16', '(11)21398-5624', 'jao@gmail.com', '1998-08-08', '$2y$10$7JjLUZzHCIY.UAJQM.RDiOPPyp7F8fSMYvusY/0zaKKuEnREYQlUC', 'comerciante');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
