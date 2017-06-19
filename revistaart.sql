-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 19-Jun-2017 às 02:26
-- Versão do servidor: 5.5.28
-- versão do PHP: 5.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `revistaart`
--
CREATE DATABASE IF NOT EXISTS `revistaart` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `revistaart`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `idPost` int(10) NOT NULL,
  `nomePost` varchar(30) NOT NULL,
  `descricao` text,
  `idUsuario` int(11) NOT NULL,
  `CaminhoImagem` varchar(50) NOT NULL,
  `idTag` int(11) NOT NULL,
  PRIMARY KEY (`idPost`),
  UNIQUE KEY `nomePost` (`nomePost`),
  UNIQUE KEY `idUsuario` (`idUsuario`),
  KEY `fk_tag` (`idTag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` VALUES(1, 'Inspirações no Dia-a-dia', 'Criatividade não é um botãozinho no cérebro que basta apertar o play para que ele funcione. Muito menos é um dom, como se fosse uma escolha divina. Para sermos habilidosos em qualquer área, precisamos de treinamento e muita observação. É como jogar futebol, ninguém começa fazendo gol de trivela. Tem que tomar muita pancada na canela, jogar todo o dia embaixo de chuva ou sol, levar muitos dríbles entre as pernas e chutar várias bolas para fora, para só aí, conseguir ser habilidoso como desejávamos no começo.', 1, 'C:UsersamandaDesktopPastasAmanda', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tagpost`
--

CREATE TABLE IF NOT EXISTS `tagpost` (
  `idTag` int(11) NOT NULL,
  `nomTag` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idTag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tagpost`
--

INSERT INTO `tagpost` VALUES(1, 'MODA');
INSERT INTO `tagpost` VALUES(2, 'BELEZA');
INSERT INTO `tagpost` VALUES(3, 'ART');
INSERT INTO `tagpost` VALUES(4, 'MUSICA');
INSERT INTO `tagpost` VALUES(5, 'DESENHO');
INSERT INTO `tagpost` VALUES(6, 'ARTISTA');
INSERT INTO `tagpost` VALUES(7, 'TENDENCIA');
INSERT INTO `tagpost` VALUES(8, 'GASTRONOMIA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `nome` varchar(30) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nomUsuario` varchar(30) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` VALUES('Amanda Lopes', 1, 'agobusl', '12345', 'amandagobus@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_tag` FOREIGN KEY (`idTag`) REFERENCES `tagpost` (`idTag`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
