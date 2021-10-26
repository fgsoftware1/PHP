-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Abr-2021 às 15:10
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `trabalho_01`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela`
--

CREATE TABLE `tabela` (
  `ID_aluno` int(3) NOT NULL,
  `Nome_Aluno` varchar(75) NOT NULL,
  `Morada_Aluno` varchar(130) NOT NULL,
  `Sexo_Aluno` varchar(15) NOT NULL,
  `Email_Aluno` varchar(150) NOT NULL,
  `DataNasc_Aluno` varchar(10) NOT NULL,
  `Aluno_Ativo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tabela`
--

INSERT INTO `tabela` (`ID_aluno`, `Nome_Aluno`, `Morada_Aluno`, `Sexo_Aluno`, `Email_Aluno`, `DataNasc_Aluno`, `Aluno_Ativo`) VALUES
(1, 'Ze Luis', 'Rua Clara,nº1', 'masculino', 'zeluis@epc.pt', '1996-07-06', 1),
(2, 'Ana Silva', 'Rua Escura', 'femenino', 'anasilva@epc.pt', '2001-05-21', 1),
(3, 'António Lopes', 'Rua da tabulada', 'masculino', 'antoniolopes@epc.pt', '2002-02-17', 1),
(4, 'Tim Almeida', 'Cavalhais', 'masculino', 'timalmeida@epc.pt', '1996-07-05', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tabela`
--
ALTER TABLE `tabela`
  ADD PRIMARY KEY (`ID_aluno`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabela`
--
ALTER TABLE `tabela`
  MODIFY `ID_aluno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
