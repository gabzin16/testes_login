-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/11/2024 às 12:24
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
-- Banco de dados: `tutorial`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados`
--

CREATE TABLE `dados` (
  `Id` int(11) NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Senha` text DEFAULT NULL,
  `Telefone` int(200) DEFAULT NULL,
  `Endereço` varchar(200) DEFAULT NULL,
  `Numero` int(200) DEFAULT NULL,
  `CEP` int(200) DEFAULT NULL,
  `Complemento` varchar(200) DEFAULT NULL,
  `Estado` varchar(200) DEFAULT NULL,
  `Cidade` varchar(200) DEFAULT NULL,
  `age` date NOT NULL,
  `Genero` varchar(200) DEFAULT NULL,
  `Estado_civil` varchar(200) DEFAULT NULL,
  `Orientacao_sexual` varchar(200) DEFAULT NULL,
  `PCD` varchar(200) DEFAULT NULL,
  `Atuacao` varchar(200) DEFAULT NULL,
  `Escolaridade` text DEFAULT NULL,
  `Competencia` text DEFAULT NULL,
  `Certificacao` text DEFAULT NULL,
  `Idioma` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `dados`
--

INSERT INTO `dados` (`Id`, `Username`, `Email`, `Senha`, `Telefone`, `Endereço`, `Numero`, `CEP`, `Complemento`, `Estado`, `Cidade`, `age`, `Genero`, `Estado_civil`, `Orientacao_sexual`, `PCD`, `Atuacao`, `Escolaridade`, `Competencia`, `Certificacao`, `Idioma`) VALUES
(1, 'Lara Andrade', 'lara_andrade@gmail.com', '123456789', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0001-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `age` date DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `age`, `Password`) VALUES
(2, 'qswdferghtjy', 'qswdefrgthjm', '0000-00-00', 'Lara290307'),
(3, 'qswdferghtjy', 'qswdefrgthjm', '0000-00-00', 'sxdsfdgrbhynumj'),
(4, 'gab silvete', 'silvete@gmail.com', '0000-00-00', 'simoncotoco'),
(5, 'gabriel', 'gabriel@gmail.com', '2024-11-18', '123456789'),
(6, 'lara', 'lara@gmail.com', '2024-11-05', '12345678');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `dados`
--
ALTER TABLE `dados`
  ADD PRIMARY KEY (`Id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados`
--
ALTER TABLE `dados`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
