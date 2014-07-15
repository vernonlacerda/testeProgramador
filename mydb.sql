-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 15-Jul-2014 às 03:23
-- Versão do servidor: 5.5.32
-- versão do PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clerk`
--

CREATE TABLE IF NOT EXISTS `clerk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Funcionários' AUTO_INCREMENT=54 ;

--
-- Extraindo dados da tabela `clerk`
--

INSERT INTO `clerk` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'Vernon', 'vernon', 'vernon', 'vernon'),
(48, 'MÃ¡rcia Veronica', 'mvtryx@gmail.com', 'marcia', 'marcia'),
(49, 'Luizinho', 'luizinho@disney.com', 'luizinho', 'luizinho'),
(50, 'Luizinho', 'luizinho@disney.com', 'luizinho', 'luizinho'),
(51, 'Luizinho', 'luizinho@disney.com', 'luizinho', 'luizinho'),
(52, 'Luizinho', 'luizinho@disney.com', 'luizinho', 'luizinho'),
(53, 'Luizinho', 'luizinho@disney.com', 'luizinho', 'luizinho');

-- --------------------------------------------------------

--
-- Estrutura da tabela `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project` int(11) NOT NULL COMMENT 'id do projeto',
  `worker` int(11) NOT NULL COMMENT 'id do funcionário/gerente/empregado',
  `type` varchar(15) NOT NULL COMMENT 'diz se o cara é gerente ou funcionário',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `employee`
--

INSERT INTO `employee` (`id`, `project`, `worker`, `type`) VALUES
(1, 0, 0, ' manager '),
(2, 0, 0, ' manager '),
(3, 0, 0, ' manager '),
(4, 3, 0, ' manager '),
(5, 1, 0, ' manager '),
(6, 1, 0, ' manager ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `pessoa` int(11) NOT NULL COMMENT 'id do funcionário ou gerente',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `manages`
--

CREATE TABLE IF NOT EXISTS `manages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `manager` int(11) NOT NULL COMMENT 'id do gerente',
  `clerk` varchar(11) NOT NULL COMMENT 'id do funcionario',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Relacionamento entre gerentes e funcionários' AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `manages`
--

INSERT INTO `manages` (`id`, `manager`, `clerk`) VALUES
(10, 1, '1;48'),
(11, 1, '1;48'),
(12, 1, '1;48'),
(13, 1, '1;48'),
(14, 1, '1;48'),
(15, 1, '1;48'),
(16, 1, '1;48'),
(17, 1, '1;48;49;50;');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `beggin` date NOT NULL COMMENT 'deadline Início',
  `finish` date NOT NULL COMMENT 'deadline Fim',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Extraindo dados da tabela `projects`
--

INSERT INTO `projects` (`id`, `description`, `beggin`, `finish`) VALUES
(38, 'Desenvolvimento de sistema de Cadastro de Projetos', '0000-00-00', '0000-00-00'),
(39, 'Desenvolvimento de sistema de Cadastro de Projetos', '0000-00-00', '0000-00-00'),
(40, 'Desenvolvimento de sistema de Cadastro de Projetos', '0000-00-00', '0000-00-00'),
(41, 'dasdsadsa dsadas dsa dsa', '0000-00-00', '0000-00-00'),
(42, 'dasdsadsa dsadas dsa dsa', '0000-00-00', '0000-00-00'),
(43, 'dasdas', '2014-10-07', '0000-00-00'),
(44, 'dsadsa', '2014-10-07', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetoemprega`
--

CREATE TABLE IF NOT EXISTS `projetoemprega` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `projeto` int(11) NOT NULL COMMENT 'id do projeto',
  `empregado` int(11) NOT NULL COMMENT 'id do empregado',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
