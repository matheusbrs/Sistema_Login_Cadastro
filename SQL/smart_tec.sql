-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/10/2023 às 04:06
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
-- Banco de dados: `smart_tec`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(255) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cpf` int(12) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `sexo` varchar(9) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` int(255) DEFAULT NULL,
  `estado_civil` varchar(10) DEFAULT NULL,
  `logradouro` varchar(255) DEFAULT NULL,
  `numero_casa` int(255) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `cpf`, `data_nascimento`, `sexo`, `email`, `senha`, `estado_civil`, `logradouro`, `numero_casa`, `complemento`, `cidade`) VALUES
(18, 'Matheus Brendon Ribeiro Da Silva', 2147483647, '1998-09-18', 'on', 'matheusbrs2020@gmail.com', 0, 'saab', 'qr 208 conj h ', 7, 'ponto alto', 'brasilia'),
(19, '', 0, '0000-00-00', '', '', 0, 'volvo', '', 0, '', ''),
(20, 'maria heloysa', 2147483647, '1998-09-18', 'on', 'maria@gmail.com', 84477409, 'saab', 'santa', 2, 'ponto alto', 'brasilia'),
(21, '', 0, '0000-00-00', 'on', '', 0, 'volvo', '', 0, '', ''),
(22, '', 0, '0000-00-00', '', '', 0, 'volvo', '', 0, '', ''),
(23, 'ezemael', 2147483647, '1998-09-18', 'on', 'ezemael@gmail.com', 84477409, 'volvo', 'santa', 2, 'ponto alto', 'brasilia');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
