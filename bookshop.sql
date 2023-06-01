-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jun-2023 às 22:47
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
-- Banco de dados: `bookshop`
--
CREATE DATABASE IF NOT EXISTS `bookshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bookshop`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bookshop`
--

DROP TABLE IF EXISTS `bookshop`;
CREATE TABLE `bookshop` (
  `id_login` int(100) NOT NULL,
  `login_user` varchar(100) NOT NULL,
  `login_password` varchar(30) NOT NULL,
  `login_email` varchar(150) NOT NULL,
  `login_tel` varchar(150) NOT NULL,
  `login_profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `bookshop`
--

INSERT INTO `bookshop` (`id_login`, `login_user`, `login_password`, `login_email`, `login_tel`, `login_profile`) VALUES
(5, 'luana', '123456', 'luana@umc.br', '(11) 946764600', 'admin'),
(9, 'Matheus', '123456', 'matheus@umc.br', '11546321564 ', 'cliente'),
(10, 'gabriel', '123', 'gabriel@umc.br', '11946875230 ', 'cliente'),
(11, 'gustavo', '123456', 'gustavo@umc.br', '(15) 94132-0156 ', 'cliente'),
(15, 'Vitória', '123', 'vitoria@umc.br', '(23) 94362-1503 ', 'cliente'),
(16, 'luanav', '123', 'luanav@umc.br', '2315161321 ', 'cliente'),
(17, 'gabriel', '123', 'gabriel@umc.br', '132121645 ', 'cliente'),
(18, 'beatriz', '123', 'beatriz@umc.br', '1123546158 ', 'cliente'),
(19, 'maria', '123', 'maria@umc.br', '53213216554 ', 'cliente'),
(20, 'alice', '123', 'alice@umc.br', '34354534345354354 ', 'cliente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bookshop_login_user`
--

DROP TABLE IF EXISTS `bookshop_login_user`;
CREATE TABLE `bookshop_login_user` (
  `login_id` int(100) NOT NULL,
  `login_user` varchar(100) NOT NULL,
  `login_password` varchar(100) NOT NULL,
  `login_profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `bookshop_login_user`
--

INSERT INTO `bookshop_login_user` (`login_id`, `login_user`, `login_password`, `login_profile`) VALUES
(1, '', '', 'cliente'),
(2, 'Vitoria', '123456', 'cliente'),
(3, 'Vitoria', '123', 'cliente'),
(4, 'gabriel', '123456', 'cliente'),
(5, 'Vitoria', '123456', 'cliente'),
(6, 'gustavo ', '123456', 'cliente');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `bookshop`
--
ALTER TABLE `bookshop`
  ADD PRIMARY KEY (`id_login`);

--
-- Índices para tabela `bookshop_login_user`
--
ALTER TABLE `bookshop_login_user`
  ADD PRIMARY KEY (`login_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bookshop`
--
ALTER TABLE `bookshop`
  MODIFY `id_login` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `bookshop_login_user`
--
ALTER TABLE `bookshop_login_user`
  MODIFY `login_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
