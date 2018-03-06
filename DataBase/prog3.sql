-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 06-Mar-2018 às 10:35
-- Versão do servidor: 10.1.26-MariaDB-0+deb9u1
-- PHP Version: 7.0.27-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prog3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `login` varchar(30) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`login`, `senha`) VALUES
('admin', 'admin'),
('', 'd41d8cd98f00b204e9800998ecf842');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `RA` int(12) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `curso` varchar(30) DEFAULT 'ciencia da computacao',
  `senha` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`RA`, `nome`, `cpf`, `email`, `curso`, `senha`) VALUES
(0, '', 0, '', 'Ciência da Computação', ''),
(123, '', 0, '', 'Ciência da Computação', '123'),
(1234234, 'joao', 2147483647, 'sfjkuiur@ksfs', 'Ciência da Computação', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade`
--

CREATE TABLE `atividade` (
  `id` int(3) NOT NULL,
  `titulo` varchar(65) DEFAULT NULL,
  `carga_hr` int(3) DEFAULT NULL,
  `ano` int(4) DEFAULT NULL,
  `tipo` int(3) NOT NULL,
  `RA` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `coordenador`
--

CREATE TABLE `coordenador` (
  `id` int(3) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `coordenador`
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
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(3) NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nome`, `email`) VALUES
(1, 'girafares', 'gigi@prof.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_atividade`
--

CREATE TABLE `tipo_atividade` (
  `id` int(3) NOT NULL,
  `tipo` varchar(65) DEFAULT NULL,
  `carga_hr_max` int(3) DEFAULT NULL,
  `carga_hr_min` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_atividade`
--

INSERT INTO `tipo_atividade` (`id`, `tipo`, `carga_hr_max`, `carga_hr_min`) VALUES
(1, 'Monitoria', 30, 0),
(2, 'Iniciação Científica ', 30, 0),
(3, 'Extensão ', 20, 0),
(5, 'Representação (Colegiado de Curso, \r\nCâmara de Extensão, Congrega', 20, 0),
(6, 'Atuação no Laboratório de Ensino de \r\nComputação ', 10, 0),
(7, 'Congressos, simpósios, semana de \r\nestudos, cursos extra‐curricul', 30, 0),
(8, 'Conferências, aulas‐inaugurais, \r\npalestras, mesas‐redondas isola', 2, 0),
(9, 'Apresentação de trabalho em evento ', 10, 0),
(10, 'Publicações tecnológicas ou \r\ncientíficas (Com orientação) – \r\nRe', 10, 0),
(11, 'Publicações tecnológicas ou \r\ncientíficas (Com orientação) – \r\nTr', 20, 0),
(12, 'Publicações tecnológicas ou \r\ncientíficas (Independente) – Resumo', 20, 0),
(13, 'Publicações tecnológicas ou \r\ncientíficas (Independente) – Trabal', 30, 0),
(14, 'Publicação literária, filosófica ou \r\nartística ', 10, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`RA`),
  ADD UNIQUE KEY `RA` (`RA`);

--
-- Indexes for table `atividade`
--
ALTER TABLE `atividade`
  ADD PRIMARY KEY (`id`),
  ADD KEY `RA_idx` (`RA`),
  ADD KEY `tipo` (`tipo`);

--
-- Indexes for table `coordenador`
--
ALTER TABLE `coordenador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_atividade`
--
ALTER TABLE `tipo_atividade`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atividade`
--
ALTER TABLE `atividade`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `coordenador`
--
ALTER TABLE `coordenador`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tipo_atividade`
--
ALTER TABLE `tipo_atividade`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `atividade`
--
ALTER TABLE `atividade`
  ADD CONSTRAINT `RA` FOREIGN KEY (`RA`) REFERENCES `aluno` (`RA`),
  ADD CONSTRAINT `tipo` FOREIGN KEY (`tipo`) REFERENCES `tipo_atividade` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
