-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Abr-2021 às 00:31
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
  `score` varchar(11) DEFAULT NULL,
  `matches` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `players`
--

INSERT INTO `players` (`id`, `team_id`, `name`, `goals`, `assists`, `score`, `matches`) VALUES
(2, 11, 'Victor', 39, 2, '27', 4),
(3, 11, 'Drake', 38, 0, '25.5', 4),
(4, 11, 'Alfred', 44, 1, '26', 4),
(5, 11, 'Bruno', 12, 0, '23.5', 4),
(6, 4, 'Caio', 72, 1, '19.5', 3),
(7, 4, 'Nicolas', 28, 3, '19', 3),
(8, 4, 'Anthony', 5, 2, '18', 3),
(9, 4, 'Erick', 33, 2, '18.5', 3),
(10, 4, 'Icaro', 13, 0, '19', 3),
(11, 4, 'Jorge', 4, 0, '18', 3),
(12, 7, 'Graiciar', 30, 2, '20', 3),
(13, 7, 'Hlozek', 18, 2, '20.5', 3),
(14, 7, 'Masopust', 13, 1, '20.5', 3),
(16, 7, 'Karabec', 2, 0, '17', 3),
(17, 7, 'Darida', 3, 0, '18', 3),
(18, 7, 'Kral', 1, 0, '17.5', 3),
(19, 10, 'Willian', 65, 1, '24', 4),
(20, 10, 'Kevin', 33, 3, '21', 4),
(21, 10, 'Diego', 30, 0, '22.5', 4),
(22, 10, 'Ivan', 6, 0, '22', 4),
(23, 10, 'Pedro', 5, 0, '23.5', 4),
(24, 10, 'Thomas', 6, 0, '22.5', 4),
(25, 11, 'Wesley', 6, 1, '24', 4),
(26, 11, 'Diogo', 8, 1, '23', 4),
(27, 12, 'David', 72, 0, '19', 3),
(28, 12, 'Lenny', 32, 1, '16.5', 3),
(29, 12, 'Yuri', 28, 1, '17', 3),
(30, 12, 'Ezequiel', 13, 1, '18', 3),
(31, 12, 'Junior', 4, 0, '17', 3),
(32, 12, 'Paulo', 7, 1, '18', 3),
(33, 9, 'Schick', 55, 0, '17', 3),
(34, 0, 'Kliment', 14, 0, NULL, 0),
(35, 0, 'Cerny', 12, 0, NULL, 0),
(36, 9, 'Jankto', 5, 1, '18', 3),
(37, 9, 'Provod', 3, 1, '17', 3),
(38, 0, 'Kopic', 2, 0, NULL, 0),
(39, 9, 'Soucek', 2, 1, '19', 3),
(40, 9, 'Bucha', 3, 1, '19', 3),
(41, 9, 'Barak', 0, 1, '19', 3);

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
