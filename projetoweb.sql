-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/09/2025 às 20:20
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetoweb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_admin.online`
--

CREATE TABLE `tb_admin.online` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `ultima_acao` datetime NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_admin.online`
--

INSERT INTO `tb_admin.online` (`id`, `ip`, `ultima_acao`, `token`) VALUES
(17, '127.0.0.1', '2025-09-12 15:14:41', '68c446a3bb747');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_admin.usuarios`
--

CREATE TABLE `tb_admin.usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_admin.usuarios`
--

INSERT INTO `tb_admin.usuarios` (`id`, `user`, `password`, `img`, `nome`, `cargo`) VALUES
(1, 'admin', 'admin', '68c2ccb3cd3e9.jpg', 'Lorem Ipsum', 2),
(3, 'jane', '123', 'foto2.jpg', 'Jane Doe', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_admin.visitas`
--

CREATE TABLE `tb_admin.visitas` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `dia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_site.config`
--

CREATE TABLE `tb_site.config` (
  `titulo` varchar(255) NOT NULL,
  `nome_autor` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `icone1` varchar(255) NOT NULL,
  `titulo1` varchar(255) NOT NULL,
  `descricao1` text NOT NULL,
  `icone2` varchar(255) NOT NULL,
  `titulo2` varchar(255) NOT NULL,
  `descricao2` text NOT NULL,
  `icone3` varchar(255) NOT NULL,
  `titulo3` varchar(255) NOT NULL,
  `descricao3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_site.config`
--

INSERT INTO `tb_site.config` (`titulo`, `nome_autor`, `descricao`, `icone1`, `titulo1`, `descricao1`, `icone2`, `titulo2`, `descricao2`, `icone3`, `titulo3`, `descricao3`) VALUES
('ProjetoWeb', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean porttitor semper libero. Cras ac nisl eget lectus ultricies efficitur vel vel odio. Aliquam at nisi ut velit dapibus fringilla eget at sem. Ut quis nisl nec erat pharetra pharetra. Praesent mattis sem eleifend metus luctus, id facilisis eros convallis. Suspendisse bibendum urna suscipit erat eleifend varius. Fusce quis arcu scelerisque, gravida odio ac, auctor magna. Nam sodales tellus lorem, a porttitor quam finibus vel.\r\n\r\nCras sed nulla et dui ornare pellentesque. Nunc tincidunt velit vitae magna tristique, ultrices blandit erat blandit. Maecenas a tristique urna, eget facilisis quam. Aliquam malesuada, ipsum sit amet ultricies pretium, felis lacus efficitur ipsum, eget posuere ligula purus ut neque. Pellentesque viverra augue consequat ipsum suscipit vulputate. Ut ultricies sapien non neque condimentum aliquet. Cras porta vel urna eu facilisis. Proin non dignissim nisi. Etiam odio justo, facilisis a porttitor sed, mollis quis nulla. Sed vitae arcu id nunc iaculis bibendum. Aliquam quis ultricies est. Mauris a suscipit dolor, a mollis est. Sed vitae condimentum nunc. Integer sit amet ligula vestibulum, molestie enim id, rhoncus mauris. Quisque tincidunt tincidunt nisi in fringilla. ', 'fa-brands fa-html5', 'HTML5', 'Morbi laoreet lobortis enim sit amet placerat. Ut hendrerit at elit vulputate gravida. Fusce id eleifend eros. Vivamus congue odio sed tellus volutpat, id vehicula nunc molestie.', 'fa-brands fa-css3-alt', 'CSS3', 'Morbi laoreet lobortis enim sit amet placerat. Ut hendrerit at elit vulputate gravida. Fusce id eleifend eros. Vivamus congue odio sed tellus volutpat, id vehicula nunc molestie.', 'fa-brands fa-js', 'JavaScript', 'Morbi laoreet lobortis enim sit amet placerat. Ut hendrerit at elit vulputate gravida. Fusce id eleifend eros. Vivamus congue odio sed tellus volutpat, id vehicula nunc molestie.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_site.depoimentos`
--

CREATE TABLE `tb_site.depoimentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `depoimento` text NOT NULL,
  `data` varchar(100) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_site.depoimentos`
--

INSERT INTO `tb_site.depoimentos` (`id`, `nome`, `depoimento`, `data`, `order_id`) VALUES
(1, 'Jhon Doe', 'Aliqua duis voluptate nulla enim eu dolore et sunt irure cupidatat aliqua Lorem proident ad. Occaecat velit et quis reprehenderit. Quis elit tempor do reprehenderit excepteur. Minim ad aute nulla sit nisi incididunt consequat ipsum labore. Culpa exercitation aliquip dolore non dolore voluptate fugiat enim. Reprehenderit proident id aute magna officia voluptate ea elit excepteur nostrud.', '11/09/2025', 2),
(2, 'Jane Doe', 'Aliqua duis voluptate nulla enim eu dolore et sunt irure cupidatat aliqua Lorem proident ad. Occaecat velit et quis reprehenderit. Quis elit tempor do reprehenderit excepteur. Minim ad aute nulla sit nisi incididunt consequat ipsum labore. Culpa exercitation aliquip dolore non dolore voluptate fugiat enim. Reprehenderit proident id aute magna officia voluptate ea elit excepteur nostrud.', '12/09/2025', 1),
(3, 'Lorem Ipsum', 'Aliqua duis voluptate nulla enim eu dolore et sunt irure cupidatat aliqua Lorem proident ad. Occaecat velit et quis reprehenderit. Quis elit tempor do reprehenderit excepteur. Minim ad aute nulla sit nisi incididunt consequat ipsum labore. Culpa exercitation aliquip dolore non dolore voluptate fugiat enim. Reprehenderit proident id aute magna officia voluptate ea elit excepteur nostrud.', '10/09/2025', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_site.servicos`
--

CREATE TABLE `tb_site.servicos` (
  `id` int(11) NOT NULL,
  `servicos` text NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_site.servicos`
--

INSERT INTO `tb_site.servicos` (`id`, `servicos`, `order_id`) VALUES
(1, 'Teste de cadastro de serviço', 1),
(2, 'Desenvolvimento de sistemas web front e backend', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_site.slides`
--

CREATE TABLE `tb_site.slides` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `slide` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_site.slides`
--

INSERT INTO `tb_site.slides` (`id`, `nome`, `slide`, `order_id`) VALUES
(1, 'bg-01', '68c4566e4d071.jpg', 1),
(2, 'bg-02', '68c456820ded0.jpg', 2),
(3, 'bg-03', '68c4568f3e9fd.jpg', 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_admin.online`
--
ALTER TABLE `tb_admin.online`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_admin.usuarios`
--
ALTER TABLE `tb_admin.usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_admin.visitas`
--
ALTER TABLE `tb_admin.visitas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_site.depoimentos`
--
ALTER TABLE `tb_site.depoimentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_site.servicos`
--
ALTER TABLE `tb_site.servicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_site.slides`
--
ALTER TABLE `tb_site.slides`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin.online`
--
ALTER TABLE `tb_admin.online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `tb_admin.usuarios`
--
ALTER TABLE `tb_admin.usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_admin.visitas`
--
ALTER TABLE `tb_admin.visitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tb_site.depoimentos`
--
ALTER TABLE `tb_site.depoimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_site.servicos`
--
ALTER TABLE `tb_site.servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_site.slides`
--
ALTER TABLE `tb_site.slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
