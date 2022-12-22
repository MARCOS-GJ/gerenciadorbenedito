-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Set-2022 às 14:19
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gerenciador`
--
CREATE DATABASE IF NOT EXISTS `gerenciador` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gerenciador`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `Cod_Func` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(80) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Senha` varchar(20) NOT NULL,
  PRIMARY KEY (`Cod_Func`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`Cod_Func`, `Nome`, `Email`, `Senha`) VALUES
(1, 'Marcos Firmino', 'marcos@gmail.com', 'marcos0676');

-- --------------------------------------------------------

--
-- Estrutura da tabela `patrimonio`
--

DROP TABLE IF EXISTS `patrimonio`;
CREATE TABLE IF NOT EXISTS `patrimonio` (
  `Num_Pat` int(11) NOT NULL AUTO_INCREMENT,
  `Cod_Func` int(11) NOT NULL,
  `Num_Sala` int(11) NOT NULL,
  `Cod_Pat` int(11) NOT NULL,
  `dsc` varchar(100) NOT NULL,
  `Tipo` varchar(40) NOT NULL,
  `Data_Tomb` date NOT NULL,
  `sts` varchar(50) NOT NULL,
  PRIMARY KEY (`Num_Pat`),
  UNIQUE KEY `Cod_Pat` (`Cod_Pat`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `patrimonio`
--

INSERT INTO `patrimonio` (`Num_Pat`, `Cod_Func`, `Num_Sala`, `Cod_Pat`, `dsc`, `Tipo`, `Data_Tomb`, `sts`) VALUES
(3, 1, 14, 13254, 'Mesa de madeira', 'MobÃ­lia', '2022-09-12', 'Em Uso'),
(2, 1, 13, 852963, 'projetor', 'EletrÃ´nico', '2022-09-12', 'Em ManutenÃ§Ã£o'),
(5, 1, 15, 1234123, 'cama', 'MobÃ­lia', '2022-08-09', 'em uso'),
(6, 1, 13, 214235, 'gabinete', 'EletrÃ´nico', '2022-09-22', 'Em estoque');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala`
--

DROP TABLE IF EXISTS `sala`;
CREATE TABLE IF NOT EXISTS `sala` (
  `Num_Sala` int(11) NOT NULL,
  `dsc` varchar(100) NOT NULL,
  PRIMARY KEY (`Num_Sala`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sala`
--

INSERT INTO `sala` (`Num_Sala`, `dsc`) VALUES
(13, 'sala de IINF'),
(14, 'sala de EMPD'),
(15, 'sala de Conceitos basicos');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
