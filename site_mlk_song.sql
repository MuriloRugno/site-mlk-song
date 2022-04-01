-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Nov-2019 às 04:26
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site_mlk_song`
--
CREATE DATABASE site_mlk_song;
-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(200) NOT NULL,
  `Nomecompleto` varchar(200) DEFAULT NULL,
  `Senha` varchar(20) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `TipoConta` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`ID`, `Nome`, `Nomecompleto`, `Senha`, `Email`, `TipoConta`) VALUES
(4, 'mhrr', 'Murilo H Rugno', '123456', 'muriloteste@hotmail.com', 0),
(6, 'Lucas', 'Lucas Scarpini', 'lucas', 'lucas@gmail.com', 0),
(7, 'joao', 'Joao Ferreira', 'joao', 'joao@gmail.com', 0),
(9, 'admin', 'admin', 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `Id` int(11) NOT NULL,
  `Quantidade` int(11) DEFAULT NULL,
  `Valorunico` float DEFAULT NULL,
  `Valor` float DEFAULT NULL,
  `CProduto` int(11) DEFAULT NULL,
  `NCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `Id` int(11) NOT NULL,
  `Quantidade` int(11) DEFAULT NULL,
  `Valorunico` float DEFAULT NULL,
  `Valor` float DEFAULT NULL,
  `NPedido` int(11) DEFAULT NULL,
  `CProduto` int(11) DEFAULT NULL,
  `NCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`Id`, `Quantidade`, `Valorunico`, `Valor`, `NPedido`, `CProduto`, `NCliente`) VALUES
(15, 20, 20, 400, 22, 3, 7),
(16, 2, 15, 30, 23, 4, 7),
(17, 4, 15, 60, 23, 5, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `Id` int(11) NOT NULL,
  `Data` datetime DEFAULT NULL,
  `Total` float DEFAULT NULL,
  `NCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`Id`, `Data`, `Total`, `NCliente`) VALUES
(22, '2019-11-25 04:11:54', 400, 7),
(23, '2019-11-25 04:11:07', 90, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `Id` int(11) NOT NULL,
  `Descricao` varchar(200) DEFAULT NULL,
  `Quantidade` int(11) DEFAULT NULL,
  `Valor` float DEFAULT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`Id`, `Descricao`, `Quantidade`, `Valor`, `img`) VALUES
(3, 'CD James Bay', 134, 20, 0x6a616d65736261792e6a7067),
(4, 'Album JayPark', 99, 15, 0x6a61797061726b2e6a7067),
(5, 'Album Half', 141, 15, 0x68616c662e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_CodProduto` (`CProduto`);

--
-- Indexes for table `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_NPedido` (`NPedido`),
  ADD KEY `FK_CProduto` (`CProduto`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_NCliente` (`NCliente`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `itens`
--
ALTER TABLE `itens`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `FK_CodProduto` FOREIGN KEY (`CProduto`) REFERENCES `produto` (`Id`);

--
-- Limitadores para a tabela `itens`
--
ALTER TABLE `itens`
  ADD CONSTRAINT `FK_CProduto` FOREIGN KEY (`CProduto`) REFERENCES `produto` (`Id`),
  ADD CONSTRAINT `FK_NPedido` FOREIGN KEY (`NPedido`) REFERENCES `pedido` (`Id`);

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `FK_NCliente` FOREIGN KEY (`NCliente`) REFERENCES `cadastro` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
