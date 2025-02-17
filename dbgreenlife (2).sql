-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/06/2023 às 15:10
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
-- Banco de dados: `dbgreenlife`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbdenuncia`
--

CREATE TABLE `tbdenuncia` (
  `coddenuncia` int(11) NOT NULL,
  `codusu` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` int(10) NOT NULL,
  `catd` varchar(30) NOT NULL,
  `cpf` int(11) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `cep` int(8) NOT NULL,
  `descricao` varchar(300) DEFAULT NULL,
  `coord` varchar(100) DEFAULT NULL,
  `datad` date NOT NULL,
  `hora` time NOT NULL,
  `checado` char(2) DEFAULT NULL,
  `foto` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbdenuncia`
--

INSERT INTO `tbdenuncia` (`coddenuncia`, `codusu`, `nome`, `email`, `telefone`, `catd`, `cpf`, `rua`, `bairro`, `cidade`, `cep`, `descricao`, `coord`, `datad`, `hora`, `checado`, `foto`) VALUES
(1, 4, 'Ismênia', 'isms@gmail.com', 2147483647, '1', 2147483647, 'José Menescau ', 'Alto da Brasília', 'Sobral', 62010380, 'Muito Lixo', NULL, '2023-05-31', '15:27:00', NULL, NULL),
(7, 4, 'Ismênia', 'isms@gmail.com', 2147483647, '1', 464, 'José da Mata', 'Padre Palhano', 'Sobral', 32432567, 'Gatos recém-nascidos em uma caixa de palelão', '-40.366130437387106,-3.697867298881576', '2023-06-07', '11:05:00', NULL, NULL),
(8, 4, 'Ismênia', 'isms@gmail.com', 2147483647, '1', 630189, 'José Menescau ', 'Alto da Brasília', 'Sobral', 62010380, 'Muito lixo', '-40.345547141684804,-3.675077584498027', '2023-06-13', '10:52:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbusu`
--

CREATE TABLE `tbusu` (
  `codusu` int(11) UNSIGNED NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `cargo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbusu`
--

INSERT INTO `tbusu` (`codusu`, `nome`, `email`, `senha`, `cargo`) VALUES
(3, 'karoliny', 'karoliny@gmail.com', '123', 'A'),
(4, 'Ismênia', 'isms@gmail.com', '123', 'A'),
(5, 'Everton Ferraz', 'eferraz194@gmail.com', '123', 'A'),
(7, 'Raimundo', 'raimundo@gmail.com', '123', 'A'),
(11, 'Mota ', 'mota@gmail.com ', '123', 'A'),
(12, 'Jhonatas ', 'jhonatas@gmail.com', '1234', 'A'),
(13, 'Rauany', 'rauany@gmail.com', '123', 'A'),
(14, 'emy', 'emy@gmail.com', '1234', 'A');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbdenuncia`
--
ALTER TABLE `tbdenuncia`
  ADD PRIMARY KEY (`coddenuncia`);

--
-- Índices de tabela `tbusu`
--
ALTER TABLE `tbusu`
  ADD PRIMARY KEY (`codusu`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbdenuncia`
--
ALTER TABLE `tbdenuncia`
  MODIFY `coddenuncia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbusu`
--
ALTER TABLE `tbusu`
  MODIFY `codusu` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
