-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 04-Out-2019 às 20:38
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

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
(14, 'Ronie Nutella', 'PNTL', '0'),
(45, 'João Doria', 'PCC', '0'),
(74, 'Joséfina Fiança', 'PBB', '0');

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
(24, 'ACEU DISPOR', '24HRS', 0),
(25, 'João Rasgado', 'PUPA', 0),
(81, 'Pranchana Jack', 'PS', 0);

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
-- Extraindo dados da tabela `votos`
--

INSERT INTO `votos` (`idVotos`, `branco`, `nulo`) VALUES
(1, 1, 0),
(2, 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
