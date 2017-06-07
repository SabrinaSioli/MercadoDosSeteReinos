-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Jun-2017 às 02:11
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mercadodossetereinos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `Nome` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `Cpf` varchar(14) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `Estado` varchar(2) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Codigo` int(10) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `rua` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`Nome`, `date`, `Cpf`, `Cidade`, `Estado`, `Email`, `Codigo`, `rg`, `numero`, `bairro`, `cep`, `senha`, `rua`) VALUES
('', '0000-00-00', '', '', '', 'heronverissimo@hotmail.com', 0, '', 0, '', '', '', ''),
('admin', '2000-02-28', '12', 'PB', 'CE', 'sabrina.sioly@gmail.com', 11, '12', 12, 'd', '63630-000', '123', 'h'),
('Samuel', '2000-02-06', '12312312312', 'as', 'ac', 'samuel_louco@gmail.com', 15, '11111111111111', 12, 'as', '63630000', '1', 'as'),
('Carlos', '2000-02-06', '12312312312', 'as', 'ac', 'carlos@gmail.com', 16, '11111111111111', 12, 'as', '63630000', '2', 'as');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `cod_prod` int(11) NOT NULL,
  `desc_prod` varchar(3000) NOT NULL,
  `preco_prod` double NOT NULL,
  `nome_prod` varchar(50) NOT NULL,
  `categ_prod` varchar(50) NOT NULL,
  `autor_prod` varchar(50) DEFAULT NULL,
  `pag_prod` int(11) DEFAULT NULL,
  `tipo_prod` varchar(50) DEFAULT NULL,
  `sexo_prod` varchar(10) DEFAULT NULL,
  `cor` varchar(50) DEFAULT NULL,
  `grava_prod` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbproduto`
--

INSERT INTO `tbproduto` (`cod_prod`, `desc_prod`, `preco_prod`, `nome_prod`, `categ_prod`, `autor_prod`, `pag_prod`, `tipo_prod`, `sexo_prod`, `cor`, `grava_prod`) VALUES
(1, 'Colar choker Casa Targaryen, material liga de zinco, tamanho:45cm ', 29, 'Gargantilha Casa Targaryen', 'acessorio', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Colar Casa Stark, material: metal-estanho, tamanho:60cm ajustável', 30, 'Colar Casa stark', 'acessorio', NULL, NULL, NULL, NULL, 'grafite', NULL),
(3, 'Caderno Daenerys, 96 folhas, 01 materia, pautado, capa com verniz, formato(mm):200 x 275', 22, 'Caderno Daenerys', 'acessorio', 'Tilibra', NULL, NULL, NULL, NULL, NULL),
(4, 'Capa de celular-Iphone(S e 5S), material: plastico resistente', 39, 'Capa para Iphone', 'acessorio', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'tamanho: 7cm, cor: dourado envelhecido, item de colecionador.', 22, 'Broche-Mão do rei', 'acessorio', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Pocket Poop Funko!\r\ntamanho:4 cm\r\nmaterial:vinil', 45, 'Chaveiro Jon Snou', 'acessorio', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Almofadas\r\nformato: 30 x 30 cm\r\nTecido: 100% algodão', 115, 'Combo almofadas', 'acessorio', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Casa targary en fire and Blood\r\naltura:9,7cm\r\ncapacidade:310ml\r\nmaterial: porcelana', 39, 'Caneca', 'acessorio', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Paginas: 592.\r\nTipo: Brochura.', 33, 'As Crônicas de Gelo e fogo - A Guerra dos Tronos', 'livros', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Paginas 656\r\nTipo: Brochura e Capa dura', 35, 'As Crônicas de Gelo e fogo - A Fúria dos reis', 'acessorio', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Episódio 04: Cripples, Bastards, and Broken Things - Aleijados, Bastardos e Coisas Quebradas.\r\nEpisódio 01: Winter Is Coming - O Inverno Está Chegando.\r\nEpisódio 02: The Kingsroad - A Estrada do Rei.\r\nEpisódio 03: Lord Snow - Lorde Snow.\r\nEpisódio 04: Cripples, Bastards, and Broken Things - Aleijados, Bastardos e Coisas Quebradas.\r\nEpisódio 05: The Wolf and the Lion - O Lobo e o Leão.\r\nEpisódio 06: A Golden Crown - Uma Coroa Dourada.\r\nEpisódio 07: You Win or You Die - Você Vence ou Você Morre.\r\nEpisódio 08: The Pointy End - A Ponta Afiada.\r\nEpisódio 09: Baelor - Baelor.\r\nEpisódio 10: Fire and Blood - Fogo e Sangue.', 44, '1ª TEMPORADA (2011)', 'DVD', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indexes for table `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`cod_prod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `Codigo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `cod_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
