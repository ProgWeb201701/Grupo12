-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 09-Jul-2017 às 12:53
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
  `idPost` int(11) NOT NULL AUTO_INCREMENT,
  `nomePost` varchar(30) NOT NULL,
  `descricao` text,
  `idUsuario` int(10) DEFAULT NULL,
  `CaminhoImagem` varchar(200) NOT NULL,
  `idTag` int(11) NOT NULL,
  PRIMARY KEY (`idPost`),
  UNIQUE KEY `nomePost` (`nomePost`),
  KEY `fk_tag` (`idTag`),
  KEY `idUsuario` (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=101 ;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`idPost`, `nomePost`, `descricao`, `idUsuario`, `CaminhoImagem`, `idTag`) VALUES
(2, 'Desenho Realista', 'se trata de Pedro Lopes, de 18 anos, lá de Passo Fundo, no Rio Grande do Sul. Usando de um realismo que impressiona em suas ilustrações, ele tem postado um desenho melhor que o outro em seu perfil no Instagram.“Comecei [a desenhar] desde criança, sempre desenhando coisas, animais e artistas que eu gostava na época. Em 2012, postei um desenho no Facebook, uma releitura de um olho que eu tinha visto online, ou seja, minha reputação como desenhista começou daí”, conta Pedro à CAPRICHO. “Fui motivado por amigos e familiares, então comecei a desenhar as pessoas das minhas redes sociais. Foi aí que descobri que levava jeito pra desenhar.”', 2, 'Em algum lugar na nuvem', 5),
(8, 'Bom dia', '11111111111111111111111111', 5, 'blablabla', 1),
(11, 'Boa Tarde', 'RED', 6, 'mmmmmmmmmmmmmmmmmmmmmmmmm', 3),
(12, 'Boa Noite', 'BLUE', 7, 'lllllllllllllllllllllllllllllllllm', 2),
(100, 'bbbbbb', 'cccccc', 1, 'C:/algo>ai', 1);

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

INSERT INTO `tagpost` (`idTag`, `nomTag`) VALUES
(1, 'MODA'),
(2, 'Desenho'),
(3, 'ART'),
(4, 'MUSICA'),
(5, 'Arte Origami'),
(6, 'ARTISTA'),
(7, 'TENDENCIA'),
(8, 'GASTRONOMIA'),
(11, 'Argila E Bordados'),
(15, 'Mecânica'),
(16, 'Argila e Areia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `nome` varchar(30) NOT NULL,
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomUsuario` varchar(30) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `idUsuario`, `nomUsuario`, `senha`, `email`) VALUES
('Amanda Lopes', 1, 'amanda', '12345', 'amandagobus@gmail.com'),
('Esther Favero', 2, 'esther', '12345', 'estherfavero@gmail.com'),
('Matematico', 3, 'mat1', '123456789', 'mat@gmail.com'),
('Vitor', 4, 'vit1', '12345', 'vit@gmail.com'),
('Ana', 5, 'ana', '12345', 'ana@gmail.com'),
('olga', 6, 'olga', '12345', 'ol@gmail.com'),
('maria', 7, 'maria', '12345', 'ma@gmail.com'),
('jesus', 8, 'jesus', '12345', 'je@gmail.com'),
('stela', 9, 'stella', '123', 'stell@gmail.com'),
('gato', 10, 'gato', '123', 'cat@gmail.com'),
('biscoito', 11, 'cookie', '123', 'cookie@gmail.com'),
('Wall-e', 19, 'wall-e', 'amanda', 'wall-e@gmail.com'),
('Bug da Silva', 26, 'bug', '12345', 'bug@bug.com'),
('6b da silva', 28, '6b', '12345', '6bfaber@gmail.com'),
('sebastiana', 29, 'se', 'se', 'se@gmail.com'),
('sebastiana da silva chavier', 31, 'se', '12345', 'se@gmail.com'),
('Laura Leticia', 32, 'LaLe', '12345', 'la@gmail.com'),
('banana de pijama', 33, 'banana', '12345', 'banana@bah.com'),
('bolachinha recheada', 34, 'bolachinha', '12345', 'bolachinha@gmail.com'),
('amanda gobus lopes', 35, 'amanda', '1234', 'gobus@gmail.com'),
('Bergamota Pokan', 36, 'bpokan', '12345', 'pokan@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `fk_tag` FOREIGN KEY (`idTag`) REFERENCES `tagpost` (`idTag`),
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
