-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Maio-2019 às 22:24
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `likefood`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `figurinhas`
--

CREATE TABLE `figurinhas` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `caminho` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `figurinhas`
--

INSERT INTO `figurinhas` (`id`, `nome`, `caminho`) VALUES
(1, '1', '1.jpg'),
(2, '2', '2.jpg'),
(3, '3', '3.jpg'),
(4, '4', '4.jpg'),
(5, '5', '5.jpg'),
(6, '6', '6.jpg'),
(7, '7', '7.jpg'),
(8, '8', '8.jpg'),
(9, '9', '9.jpg'),
(10, '10', '10.jpg'),
(11, '11', '11.jpg'),
(12, '12', '12.jpg'),
(13, '13', '13.jpg'),
(14, '14', '14.jpg'),
(15, '15', '15.jpg'),
(16, '16', '16.jpg'),
(17, '17', '17.jpg'),
(18, '18', '18.jpg'),
(19, '19', '19.jpg'),
(20, '20', '20.jpg'),
(21, '21', '21.jpg'),
(22, '22', '22.jpg'),
(23, '23', '23.jpg'),
(24, '24', '24.jpg'),
(25, '25', '25.jpg'),
(26, '26', '26.jpg'),
(27, '27', '27.jpg'),
(28, '28', '28.jpg'),
(29, '29', '29.jpg'),
(30, '30', '30.jpg'),
(31, '31', '31.jpg'),
(32, '32', '32.jpg'),
(33, '33', '33.jpg'),
(34, '34', '34.jpg'),
(35, '35', '35.jpg'),
(36, '36', '36.jpg'),
(37, '37', '37.jpg'),
(38, '38', '38.jpg'),
(39, '39', '39.jpg'),
(40, '40', '40.jpg'),
(41, '41', '41.jpg'),
(42, '42', '42.jpg'),
(43, '43', '43.jpg'),
(44, '44', '44.jpg'),
(45, '45', '45.jpg'),
(46, '46', '46.jpg'),
(47, '47', '47.jpg'),
(48, '48', '48.jpg'),
(49, '49', '49.jpg'),
(50, '50', '50.jpg'),
(51, '51', '51.jpg'),
(52, '52', '52.jpg'),
(53, '53', '53.jpg'),
(54, '54', '54.jpg'),
(55, '55', '55.jpg'),
(56, '56', '56.jpg'),
(57, '57', '57.jpg'),
(58, '58', '58.jpg'),
(59, '59', '59.jpg'),
(60, '60', '60.jpg'),
(61, '61', '61.jpg'),
(62, '62', '62.jpg'),
(63, '63', '63.jpg'),
(64, '64', '64.jpg'),
(65, '65', '65.jpg'),
(66, '66', '66.jpg'),
(67, '67', '67.jpg'),
(68, '68', '68.jpg'),
(69, '69', '69.jpg'),
(70, '70', '70.jpg'),
(71, '71', '71.jpg'),
(72, '72', '72.jpg'),
(73, '73', '73.jpg'),
(74, '74', '74.jpg'),
(75, '75', '75.jpg'),
(76, '76', '76.jpg'),
(77, '77', '77.jpg'),
(78, '78', '78.jpg'),
(79, '79', '79.jpg'),
(80, '80', '80.jpg'),
(81, '81', '81.jpg'),
(82, '82', '82.jpg'),
(83, '83', '83.jpg'),
(84, '84', '84.jpg'),
(85, '85', '85.jpg'),
(86, '86', '86.jpg'),
(87, '87', '87.jpg'),
(88, '88', '88.jpg'),
(89, '89', '89.jpg'),
(90, '90', '90.jpg'),
(91, '91', '91.jpg'),
(92, '92', '92.jpg'),
(93, '93', '93.jpg'),
(94, '94', '94.jpg'),
(95, '95', '95.jpg'),
(96, '96', '96.jpg'),
(97, '97', '97.jpg'),
(98, '98', '98.jpg'),
(99, '99', '99.jpg'),
(100, '100', '100.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(15) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `ultimoAcesso` datetime NOT NULL,
  `ultimaFigurinha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `login`, `senha`, `ultimoAcesso`, `ultimaFigurinha`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', '2019-05-14 17:23:04', '2018-12-03'),
(2, 'Jose', 'jose@hotmail.com', 'jose123', '12345', '2019-05-14 17:24:08', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuariosfigurinhas`
--

CREATE TABLE `usuariosfigurinhas` (
  `id` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  `figurinha_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuariosfigurinhas`
--

INSERT INTO `usuariosfigurinhas` (`id`, `usuarios_id`, `figurinha_id`) VALUES
(102, 1, 29),
(103, 1, 11),
(104, 1, 3),
(105, 1, 15),
(106, 1, 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `figurinhas`
--
ALTER TABLE `figurinhas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuariosfigurinhas`
--
ALTER TABLE `usuariosfigurinhas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuariosfigurinhas`
--
ALTER TABLE `usuariosfigurinhas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
