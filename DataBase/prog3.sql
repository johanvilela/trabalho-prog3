-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 27/02/2018 às 21:53
-- Versão do servidor: 5.5.59-0+deb8u1
-- Versão do PHP: 5.6.33-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `prog3`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `login` varchar(30) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `admin`
--

INSERT INTO `admin` (`login`, `senha`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `RA` int(12) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `curso` varchar(30) DEFAULT 'ciencia da computacao',
  `senha` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `aluno`
--

INSERT INTO `aluno` (`RA`, `nome`, `cpf`, `email`, `curso`, `senha`) VALUES
(0, '', 0, '', 'Ciência da Computação', ''),
(123, '', 0, '', 'Ciência da Computação', '123'),
(1234234, 'joao', 2147483647, 'sfjkuiur@ksfs', 'Ciência da Computação', '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `atividade`
--

CREATE TABLE IF NOT EXISTS `atividade` (
`id` int(3) NOT NULL,
  `titulo` varchar(65) DEFAULT NULL,
  `carga_hr` int(3) DEFAULT NULL,
  `ano` int(4) DEFAULT NULL,
  `tipo` varchar(65) DEFAULT NULL,
  `RA` int(12) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `atividade`
--

INSERT INTO `atividade` (`id`, `titulo`, `carga_hr`, `ano`, `tipo`, `RA`) VALUES
(1, 't', 20, 2019, 'ttt', 123),
(2, 'atividade teste', 30, 2018, 'tipo teste', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `coordenador`
--

CREATE TABLE IF NOT EXISTS `coordenador` (
`id` int(3) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `coordenador`
--

INSERT INTO `coordenador` (`id`, `email`, `senha`) VALUES
(1, '', ''),
(2, '', ''),
(3, '', ''),
(4, 'fulano4@coord.com', '123'),
(5, 'fulano5@coord.com', '123'),
(6, '', ''),
(7, '123@123.com', '123'),
(8, '321@321', '321');

-- --------------------------------------------------------

--
-- Estrutura para tabela `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
`id` int(3) NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `professor`
--

INSERT INTO `professor` (`id`, `nome`, `email`) VALUES
(1, 'girafares', 'gigi@prof.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_atividade`
--

CREATE TABLE IF NOT EXISTS `tipo_atividade` (
`id` int(3) NOT NULL,
  `tipo` varchar(65) DEFAULT NULL,
  `carga_hr_max` int(3) DEFAULT NULL,
  `carga_hr_min` int(3) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `tipo_atividade`
--

INSERT INTO `tipo_atividade` (`id`, `tipo`, `carga_hr_max`, `carga_hr_min`) VALUES
(1, 'php', 40, 11);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `admin`
--
ALTER TABLE `admin`
 ADD UNIQUE KEY `login` (`login`);

--
-- Índices de tabela `aluno`
--
ALTER TABLE `aluno`
 ADD PRIMARY KEY (`RA`), ADD UNIQUE KEY `RA` (`RA`);

--
-- Índices de tabela `atividade`
--
ALTER TABLE `atividade`
 ADD PRIMARY KEY (`id`), ADD KEY `RA_idx` (`RA`);

--
-- Índices de tabela `coordenador`
--
ALTER TABLE `coordenador`
 ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `professor`
--
ALTER TABLE `professor`
 ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tipo_atividade`
--
ALTER TABLE `tipo_atividade`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `atividade`
--
ALTER TABLE `atividade`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `coordenador`
--
ALTER TABLE `coordenador`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `tipo_atividade`
--
ALTER TABLE `tipo_atividade`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `atividade`
--
ALTER TABLE `atividade`
ADD CONSTRAINT `RA` FOREIGN KEY (`RA`) REFERENCES `aluno` (`RA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
