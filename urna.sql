-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 24-Set-2019 às 14:16
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urna`
--
CREATE DATABASE IF NOT EXISTS `urna` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `urna`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eleitor`
--

DROP TABLE IF EXISTS `eleitor`;
CREATE TABLE IF NOT EXISTS `eleitor` (
  `numTitulo` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `Presidente_numPresidente` int(11) NOT NULL,
  `Governador_numGovernador` int(11) NOT NULL,
  PRIMARY KEY (`numTitulo`),
  KEY `fk_Eleitor_Presidente_idx` (`Presidente_numPresidente`),
  KEY `fk_Eleitor_Governador1_idx` (`Governador_numGovernador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `governador`
--

DROP TABLE IF EXISTS `governador`;
CREATE TABLE IF NOT EXISTS `governador` (
  `numGovernador` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `partido` varchar(45) DEFAULT NULL,
  `votos` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`numGovernador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `governador`
--

INSERT INTO `governador` (`numGovernador`, `nome`, `partido`, `votos`) VALUES
(14, 'Ronie Nutella', 'PNTL', NULL),
(45, 'João Doria', 'PCC', NULL),
(74, 'Joséfina Fiança', 'PBB', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `presidente`
--

DROP TABLE IF EXISTS `presidente`;
CREATE TABLE IF NOT EXISTS `presidente` (
  `numPresidente` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `partido` varchar(100) DEFAULT NULL,
  `votos` int(45) DEFAULT NULL,
  PRIMARY KEY (`numPresidente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `presidente`
--

INSERT INTO `presidente` (`numPresidente`, `nome`, `partido`, `votos`) VALUES
(24, 'ACEU DISPOR', '24HRS', NULL),
(25, 'João Rasgado', 'PUPA', NULL),
(81, 'Pranchana Jack', 'PS', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `votos`
--

DROP TABLE IF EXISTS `votos`;
CREATE TABLE IF NOT EXISTS `votos` (
  `idVotos` int(45) NOT NULL,
  `branco` int(45) DEFAULT NULL,
  `nulo` int(45) DEFAULT NULL,
  PRIMARY KEY (`idVotos`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `eleitor`
--
ALTER TABLE `eleitor`
  ADD CONSTRAINT `fk_Eleitor_Governador1` FOREIGN KEY (`Governador_numGovernador`) REFERENCES `governador` (`numGovernador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Eleitor_Presidente` FOREIGN KEY (`Presidente_numPresidente`) REFERENCES `presidente` (`numPresidente`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
