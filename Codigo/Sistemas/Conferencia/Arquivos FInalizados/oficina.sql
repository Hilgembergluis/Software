-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Out-2020 às 19:05
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `oficina`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mecanicos`
--

CREATE TABLE `mecanicos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `endereco` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mecanicos`
--

INSERT INTO `mecanicos` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`) VALUES
(1, 'Marcela Silva', '788.888.888-60', '(88) 88888-8888', 'marcela@hotmail.com', 'Rua A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `recepcionistas`
--

CREATE TABLE `recepcionistas` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `endereco` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `recepcionistas`
--

INSERT INTO `recepcionistas` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`) VALUES
(1, 'Paulo Campos', '866.655.555-55', '(00) 00000-0000', 'paulo@hotmail.com', 'Rua A'),
(3, 'Recepcionista Teste', '444.444.444-44', '(44) 44444-4444', 'recep@hotmail.com', 'Rua A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `email`, `senha`, `nivel`) VALUES
(1, 'Marcela Silva', '788.888.888-60', 'marcela@hotmail.com', '123', 'mecanico'),
(2, 'Administrador', '000.000.000-00', 'hvfadvocacia@gmail.com', '123', 'admin'),
(3, 'Paulo Campos', '866.655.555-55', 'paulo@hotmail.com', '123', 'recep'),
(5, 'Recepcionista Teste', '444.444.444-44', 'recep@hotmail.com', '123', 'recep');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `mecanicos`
--
ALTER TABLE `mecanicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `recepcionistas`
--
ALTER TABLE `recepcionistas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `mecanicos`
--
ALTER TABLE `mecanicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `recepcionistas`
--
ALTER TABLE `recepcionistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
