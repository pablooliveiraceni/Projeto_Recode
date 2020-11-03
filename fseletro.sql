-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 03, 2020 at 11:21 AM
-- Server version: 8.0.22-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fseletro`
--

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `msg` varchar(300) DEFAULT NULL,
  `data` datetime DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`id`, `nome`, `msg`, `data`, `email`) VALUES
(1, 'Pablo Oliveira De Ceni ', 'OI', '2020-11-01 12:03:06', 'pabloceni0022@gmail.com'),
(2, 'Pablo Oliveira De Ceni ', 'Ola Mundo', '2020-11-01 12:03:33', 'pabloceni0022@gmail.com'),
(3, '', '', '2020-11-01 14:15:53', NULL),
(4, 'Oivia ', 'Os produtos da loja full stack eletron são de excelente qualidade !\r\n', '2020-11-01 21:07:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `preco` decimal(8,2) NOT NULL,
  `preco_final` decimal(8,2) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id_produto`, `categoria`, `imagem`, `preco`, `preco_final`, `descricao`) VALUES
(1, 'geladeira', 'img/Geladeira01_1.png', '2069.89', '1969.89', 'Geladeira/Refrigerador Consul Duplex Frost Free 340 litros Branca 110V'),
(2, 'geladeira', 'img/Geladeira02_1.png', '2448.99', '2348.99', 'Geladeira/Refrigerador Brastemp Frost Free BRM44 375 Litros - Evox - 110v'),
(3, 'geladeira', 'img/Geladeira03_1.png', '5258.99', '5199.99', 'Refrigerador Brastemp Side Inverse BRO80 540 Litros Ice Maker Evox 110v'),
(4, 'fogao', 'img/Fogao01_1.png', '1599.89', '1499.89', 'Fogão Brastemp 5 Bocas BFS5N - Inox'),
(5, 'fogao', 'img/Fogao02_1.png', '1848.89', '1748.89', 'Fogão de Piso Mesa de Vidro Electrolux 5'),
(6, 'microondas', 'img/Microondas01_1.png', '679.99', '579.99', 'Microondas 25L Espelhado Pme25 Philco 127V'),
(7, 'microondas', 'img/Microondas02_1.png', '4100.00', '4000.00', 'Micro-ondas Consul Espelhado 32 Litros - CMS45 240v'),
(8, 'microondas', 'img/Microondas03_1.png', '1173.81', '1073.81', 'Micro-ondas Brastemp Espelhado Grill 32'),
(9, 'lavadouraderoupas', 'img/Lavadoura01_1.png', '3099.00', '2999.00', 'Máquina De Lavar Roupas Midea Storm'),
(10, 'lavadouraderoupas', 'img/Lavadoura02_1.png', '2099.99', '1999.99', 'Lavadora de Roupas Brastemp 12Kg'),
(11, 'lavaloucas', 'img/Lava_louca01_1.png', '4423.90', '4323.90', 'Lava-Louças Electrolux Inox 14 Serviços LV14X'),
(12, 'lavaloucas', 'img/Lava_louca02_1.png', '3699.89', '3599.89', 'Lava Louças Brastemp 10 Serviços BLF10 Branca 110V');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
