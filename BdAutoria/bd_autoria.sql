-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Nov-2023 às 17:51
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE DATABASE bd_autoria;

USE bd_autoria;

CREATE TABLE `autor` (
  `Cod_Autor` int(11) NOT NULL,
  `NomeAutor` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Sobrenome` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Nasc` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`Cod_Autor`, `NomeAutor`, `Sobrenome`, `Email`, `Nasc`) VALUES
(1, 'Bruno', 'Fernandes', 'bruno789@gmail.com', '1973-08-22'),
(2, 'Amarildo', 'Bartosa', 'bartosaama1228@gmail.com', '1956-03-06'),
(3, 'Noel ', 'Rosario', 'noelrosa5687@gmail.com', '1949-09-02'),
(4, 'Aparecido', 'Jesus', 'jesusaparecido@gmail.com', '1981-06-25'),
(5, 'Rodrigo', 'Marques', 'rodridrimarques@gmail.com', '1976-11-13'),
(6, 'Sergio', 'Silva', 'sergio1234@gmail.com', '1975-04-01'),
(7, 'Felipe', 'André', 'felipe.andre97@gmail.com', '1990-02-08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `autoria`
--

CREATE TABLE `autoria` (
  `Cod_Autor` int(11) NOT NULL,
  `Cod_Livro` int(11) NOT NULL,
  `DataLancamento` date NOT NULL,
  `Editora` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `autoria`
--

INSERT INTO `autoria` (`Cod_Autor`, `Cod_Livro`, `DataLancamento`, `Editora`) VALUES
(1, 1, '2023-06-27', 'Editora Rocco'),
(2, 2, '2023-06-28', 'Editora Rocco'),
(3, 3, '2023-06-29', 'Editora Rocco'),
(4, 4, '2023-06-30', 'Editora Rocco'),
(5, 5, '2023-07-01', 'Editora Rocco'),
(6, 6, '2023-07-02', 'Editora Rocco'),
(7, 7, '2023-07-03', 'Editora Rocco'),
(8, 8, '2023-07-04', 'Editora Rocco');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `Cod_Livro` int(11) NOT NULL,
  `Título` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Categoria` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ISBN` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Idioma` varchar(30) NOT NULL,
  `QtdePag` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`Cod_Livro`, `Título`, `Categoria`, `ISBN`, `Idioma`, `QtdePag`) VALUES
(1, 'Até Logo', 'Drama', '111-11-111-1111-1', 'Português', 198),
(2, 'Marlene', 'Romance', '222-22-222-2222-2', 'Português', 213),
(3, 'Eu contra eles', 'Ação', '333-33-333-3333-3', 'Português', 93),
(4, 'Travessia', 'Biografia', '444-44-444-4444-4', 'Português', 157),
(5, 'Amigo Imaginário', 'Infantil', '555-55-555-5555-5', 'Português', 35);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `Login` varchar(10) NOT NULL,
  `Senha` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`Login`, `Senha`) VALUES
('a', 123),
('b', 456);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`Cod_Autor`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`Cod_Livro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `Cod_Autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `Cod_Livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
