-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Dez-2021 às 03:43
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `disco_db`
--
CREATE DATABASE IF NOT EXISTS `disco_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `disco_db`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `musica_tb`
--

CREATE TABLE `musica_tb` (
  `id_musica` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `album` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compositor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `musica_tb`
--

INSERT INTO `musica_tb` (`id_musica`, `titulo`, `album`, `cantor`, `compositor`, `genero`, `ano`) VALUES
(1, 'Deixa a Vida Me Levar', 'De Santo Amaro a Xerém', 'Zeca Pagodinho ', 'Eri Do Cais / Serginho Merti ', 'Pagode', 2018),
(2, 'Kill My Time ', 'CALM', '5 Seconds Of Summer ', ' Luke Hemmings / Michael Clifford', 'Pop', 2020),
(3, 'Starlight', 'Black Holes and Revelations', 'Muse', 'Matthew Bellamy', 'Rock', 2006),
(4, 'Paradise', 'Love Yourself: Tear', 'BTS', ' J-Hope/SUGA /RM ', ' K-pop', 2018),
(5, 'É Osso', 'É Osso ', 'Jovem Dionisio', 'Gabriel Dunajski Mendes', 'Pop', 2020),
(6, 'I´m a B', 'Guilty Pleasure', 'Hwasa', 'Hwasa', 'K-pop', 2021),
(7, 'Leilão', 'Aviões 10 Anos ', 'César Menotti e Fabiano', 'Alfredo Matheus', 'Sertanejo', 2013),
(13, 'Gooey', 'Zaba', 'Glass Animals', 'David Bayley', 'Alternativa', 2014),
(14, 'Red Desert', 'CALM', '5 Seconds Of Summer ', 'Calum Hood / Ashton Irwin', 'Pop', 2020),
(15, 'TWIT', 'TWIT', 'Hwasa', 'Hwasa', ' K-pop', 2019);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_tb`
--

CREATE TABLE `usuarios_tb` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios_tb`
--

INSERT INTO `usuarios_tb` (`id_usuario`, `usuario`, `senha`) VALUES
(1, 'Adelaide Hemmings ', 'rabanete7');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `musica_tb`
--
ALTER TABLE `musica_tb`
  ADD PRIMARY KEY (`id_musica`);

--
-- Índices para tabela `usuarios_tb`
--
ALTER TABLE `usuarios_tb`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `musica_tb`
--
ALTER TABLE `musica_tb`
  MODIFY `id_musica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `usuarios_tb`
--
ALTER TABLE `usuarios_tb`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
