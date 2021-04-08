-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Abr-2021 às 04:49
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tournaments`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `players`
--

CREATE TABLE `players` (
  `id` mediumint(9) NOT NULL,
  `team_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `goals` int(11) DEFAULT NULL,
  `assists` int(11) DEFAULT NULL,
  `average` varchar(255) DEFAULT NULL,
  `matches` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `players`
--

INSERT INTO `players` (`id`, `team_id`, `name`, `goals`, `assists`, `average`, `matches`) VALUES
(2, 11, 'Victor', 36, 0, '0.0', 0),
(3, 11, 'Drake', 36, 0, '0.0', 0),
(4, 11, 'Alfred', 42, 0, '0.0', 0),
(5, 11, 'Bruno', 12, 0, '0.0', 0),
(6, 4, 'Caio', 68, 0, '0', 0),
(7, 4, 'Nicolas', 27, 0, '0', 0),
(8, 4, 'Anthony', 5, 0, '0', 0),
(9, 4, 'Erick', 29, 0, '0', 0),
(10, 4, 'Icaro', 12, 0, '0', 0),
(11, 4, 'Jorge', 4, 0, '0', 0),
(12, 7, 'Graiciar', 28, 0, '0.0', 0),
(13, 7, 'Hlozek', 16, 0, '0.0', 0),
(14, 7, 'Masopust', 11, 0, '0.0', 0),
(15, 7, 'Novak', 2, 0, '0.0', 0),
(16, 7, 'Karabec', 2, 0, '0.0', 0),
(17, 7, 'Darida', 3, 0, '0.0', 0),
(18, 7, 'Kral', 1, 0, '0.0', 0),
(19, 10, 'Willian', 62, 0, '0', 0),
(20, 10, 'Kevin', 31, 0, '0', 0),
(21, 10, 'Diego', 27, 0, '0', 0),
(22, 10, 'Ivan', 6, 0, '0', 0),
(23, 10, 'Pedro', 5, 0, '0', 0),
(24, 10, 'Thomas', 6, 0, '0', 0),
(25, 11, 'Wesley', 6, 0, '0.0', 0),
(26, 11, 'Diogo', 8, 0, '0.0', 0),
(27, 12, 'David', 68, 0, '6', 1),
(28, 12, 'Lenny', 32, 0, '7', 1),
(29, 12, 'Yuri', 28, 0, '5.5', 1),
(30, 12, 'Ezequiel', 13, 0, '5.5', 1),
(31, 12, 'Junior', 4, 0, '6', 1),
(32, 12, 'Paulo', 7, 1, '6.5', 1),
(33, 9, 'Schick', 53, 0, '6', 1),
(34, 0, 'Kliment', 14, 0, '0', 1),
(35, 0, 'Cerny', 12, 0, '6', 1),
(36, 9, 'Jankto', 5, 0, '6', 1),
(37, 9, 'Provod', 3, 0, '7', 1),
(38, 0, 'Kopic', 2, 0, '0', 1),
(39, 9, 'Soucek', 1, 0, '6', 1),
(40, 9, 'Bucha', 1, 1, '6.5', 1),
(41, 9, 'Barak', 0, 0, '6', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `teams`
--

CREATE TABLE `teams` (
  `team_id` int(11) NOT NULL,
  `team_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `teams`
--

INSERT INTO `teams` (`team_id`, `team_name`) VALUES
(4, 'Atalanta'),
(7, 'Bordeaux'),
(9, 'Angers'),
(10, 'Napoli'),
(11, 'Roma'),
(12, 'Lille');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `last_acess` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `players`
--
ALTER TABLE `players`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
