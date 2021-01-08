-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Dez-2020 às 17:59
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema`
--
CREATE DATABASE IF NOT EXISTS `sistema` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistema`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagens`
--

DROP TABLE IF EXISTS `postagens`;
CREATE TABLE IF NOT EXISTS `postagens` (
  `id_postagens` int(11) NOT NULL AUTO_INCREMENT,
  `conteudo` varchar(400) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_postagens`),
  KEY `fk_usuario` (`fk_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `postagens`
--

INSERT INTO `postagens` (`id_postagens`, `conteudo`, `fk_usuario`) VALUES
(7, 'Um pequeno teste', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(80) NOT NULL,
  `imagem` varchar(150) DEFAULT NULL,
  `email_usuario` varchar(80) NOT NULL,
  `senha_usuario` char(32) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email_usuario` (`email_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `imagem`, `email_usuario`, `senha_usuario`) VALUES
(5, 'vikk', NULL, 'vikk@gmail.com', '4607e782c4d86fd5364d7e4508bb10d9'),
(6, 'viktor', NULL, 'viktor@mail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'enzo', NULL, 'enzo@ymail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'Enzo Soares', 'https://avatars1.githubusercontent.com/u/62313997?s=460&u=7c0a0c740491f568ace4b69600a6c24cdbefaf54&v=4', 'soaresenzo@mail.com', 'e10adc3949ba59abbe56e057f20f883e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
