-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 09/06/2017 às 01:08
-- Versão do servidor: 10.1.11-MariaDB
-- Versão do PHP: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ProjetoRestaurante`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Pessoa`
--

CREATE TABLE `Pessoa` (
  `id_pessoa` int(11) NOT NULL,
  `nome_pessoa` varchar(45) DEFAULT NULL,
  `CPF` varchar(20) DEFAULT NULL,
  `endereco` varchar(80) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Preco`
--

CREATE TABLE `Preco` (
  `id_Preco` int(11) NOT NULL,
  `preco` float DEFAULT NULL,
  `Id_tipo` int(11) NOT NULL,
  `Id_restaurante` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Produto`
--

CREATE TABLE `Produto` (
  `id_Produto` int(11) NOT NULL,
  `Descricao_item` varchar(45) DEFAULT NULL,
  `Id_tipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Restaurante`
--

CREATE TABLE `Restaurante` (
  `id_restaurante` int(11) NOT NULL,
  `nome_restaurante` varchar(45) DEFAULT NULL,
  `CPF_CNPJ` varchar(20) DEFAULT NULL,
  `endereco` varchar(80) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Tipo`
--

CREATE TABLE `Tipo` (
  `Id_tipo` int(11) NOT NULL,
  `descricao_tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `Pessoa`
--
ALTER TABLE `Pessoa`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- Índices de tabela `Preco`
--
ALTER TABLE `Preco`
  ADD PRIMARY KEY (`id_Preco`,`Id_tipo`),
  ADD KEY `fk_Preco_Tipo_idx` (`Id_tipo`),
  ADD KEY `fk_Preco_Restaurante1_idx` (`Id_restaurante`);

--
-- Índices de tabela `Produto`
--
ALTER TABLE `Produto`
  ADD PRIMARY KEY (`id_Produto`),
  ADD KEY `fk_Produto_Tipo1_idx` (`Id_tipo`);

--
-- Índices de tabela `Restaurante`
--
ALTER TABLE `Restaurante`
  ADD PRIMARY KEY (`id_restaurante`);

--
-- Índices de tabela `Tipo`
--
ALTER TABLE `Tipo`
  ADD PRIMARY KEY (`Id_tipo`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `Pessoa`
--
ALTER TABLE `Pessoa`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `Preco`
--
ALTER TABLE `Preco`
  MODIFY `id_Preco` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `Produto`
--
ALTER TABLE `Produto`
  MODIFY `id_Produto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `Restaurante`
--
ALTER TABLE `Restaurante`
  MODIFY `id_restaurante` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `Tipo`
--
ALTER TABLE `Tipo`
  MODIFY `Id_tipo` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `Preco`
--
ALTER TABLE `Preco`
  ADD CONSTRAINT `fk_Preco_Restaurante1` FOREIGN KEY (`Id_restaurante`) REFERENCES `Restaurante` (`id_restaurante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Preco_Tipo` FOREIGN KEY (`Id_tipo`) REFERENCES `Tipo` (`Id_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `Produto`
--
ALTER TABLE `Produto`
  ADD CONSTRAINT `fk_Produto_Tipo1` FOREIGN KEY (`Id_tipo`) REFERENCES `Tipo` (`Id_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
