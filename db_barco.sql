-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 08-Abr-2023 às 19:18
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_barco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `barco`
--

CREATE TABLE `barco` (
  `id` int(11) NOT NULL,
  `model` varchar(50) NOT NULL,
  `manufacturer` varchar(30) NOT NULL,
  `optional_description` text NOT NULL,
  `color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `barco`
--

INSERT INTO `barco` (`id`, `model`, `manufacturer`, `optional_description`, `color`) VALUES
(1, 'teste', 'teste', 'teste', 'teste'),
(8, 'Boat 5000', 'Yamaha', 'Um barco para pesca no mar', 'Azul');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `barco`
--
ALTER TABLE `barco`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `barco`
--
ALTER TABLE `barco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
