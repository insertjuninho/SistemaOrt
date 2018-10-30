-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Out-2018 às 14:52
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sintomas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso`
--

CREATE TABLE `acesso` (
  `idMed` int(11) NOT NULL,
  `nomeMed` varchar(60) NOT NULL,
  `crm` int(11) NOT NULL,
  `situacao` enum('ativo','inativo') NOT NULL,
  `estado` enum('online','offline') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acesso`
--

INSERT INTO `acesso` (`idMed`, `nomeMed`, `crm`, `situacao`, `estado`) VALUES
(1, 'Junior', 202, 'ativo', 'online'),
(2, 'ale', 123, 'ativo', 'online'),
(3, 'erick', 1234, 'ativo', 'online'),
(4, 'erickk', 852, 'ativo', 'online'),
(5, 'rapha', 1236, 'ativo', 'online'),
(6, 'JUnior', 123, '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `idCat` int(11) NOT NULL,
  `categorias` varchar(60) COLLATE utf8_bin NOT NULL,
  `img` int(11) NOT NULL,
  `sintomas` longtext COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`idCat`, `categorias`, `img`, `sintomas`) VALUES
(1, 'pe', 0, '1'),
(2, 'pe', 0, '2'),
(3, 'pe', 0, '3'),
(4, 'pe', 0, '4'),
(5, 'pe', 0, '5'),
(6, 'pe', 0, '6'),
(7, 'pe', 0, '7'),
(8, 'pe', 0, '8'),
(9, 'pe', 0, '9'),
(10, 'pe', 0, '10'),
(11, 'pe', 0, '11'),
(12, 'pe', 0, '12'),
(13, 'pe', 0, '13'),
(14, 'pe', 0, '14'),
(15, 'pe', 0, '15'),
(16, 'pe', 0, '16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `listadiagnostico`
--

CREATE TABLE `listadiagnostico` (
  `idDiagnostico` int(11) NOT NULL,
  `idMed` int(11) NOT NULL,
  `idPac` int(11) NOT NULL,
  `idGeral` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `idPac` int(11) NOT NULL,
  `nomePac` varchar(60) NOT NULL,
  `idade` int(11) NOT NULL,
  `altura` float NOT NULL,
  `pressao` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`idPac`, `nomePac`, `idade`, `altura`, `pressao`) VALUES
(1, '', 18, 1, '15:20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sintomas`
--

CREATE TABLE `sintomas` (
  `idSint` int(11) NOT NULL,
  `page1` varchar(3) COLLATE utf8_bin NOT NULL,
  `page2` varchar(3) COLLATE utf8_bin NOT NULL,
  `page3` varchar(3) COLLATE utf8_bin NOT NULL,
  `page4` varchar(3) COLLATE utf8_bin NOT NULL,
  `page5` varchar(3) COLLATE utf8_bin NOT NULL,
  `page6` varchar(3) COLLATE utf8_bin NOT NULL,
  `page7` varchar(3) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `sintomas`
--

INSERT INTO `sintomas` (`idSint`, `page1`, `page2`, `page3`, `page4`, `page5`, `page6`, `page7`) VALUES
(1, 'sin', 'sin', 'sin', 'sin', 'sin', 'sin', 'sin'),
(2, '', '', '', '', '', '', ''),
(3, '14', '', '', '', '', '', ''),
(4, '14', '', '', '', '', '', ''),
(5, '16', '', '', '', '', '', ''),
(6, '16', '', '', '', '', '', ''),
(7, '14', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acesso`
--
ALTER TABLE `acesso`
  ADD PRIMARY KEY (`idMed`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCat`);

--
-- Indexes for table `listadiagnostico`
--
ALTER TABLE `listadiagnostico`
  ADD PRIMARY KEY (`idDiagnostico`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`idPac`);

--
-- Indexes for table `sintomas`
--
ALTER TABLE `sintomas`
  ADD PRIMARY KEY (`idSint`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acesso`
--
ALTER TABLE `acesso`
  MODIFY `idMed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `listadiagnostico`
--
ALTER TABLE `listadiagnostico`
  MODIFY `idDiagnostico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `idPac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sintomas`
--
ALTER TABLE `sintomas`
  MODIFY `idSint` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
