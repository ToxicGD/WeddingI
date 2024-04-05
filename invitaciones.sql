-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2024 a las 12:57:25
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `invitaciones`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `PAddInv` (IN `invitado` VARCHAR(100), IN `acomp` INT(50), IN `mesa` INT(50), IN `codigo` VARCHAR(100))   INSERT INTO invitados(invitado,acompanantes,mesa,codigo) VALUES(invitado,acomp,mesa,codigo)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PDeleteInv` (IN `invID` INT)   DELETE FROM invitados WHERE id = invID$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PEditInv` (IN `idI` INT, IN `invit` VARCHAR(100), IN `acomp` INT(50), IN `mesa` INT(50))   UPDATE invitados
SET invitado = invit, acompanantes = acomp, mesa = mesa
WHERE id = idI$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PShowAllInv` ()   SELECT * FROM invitados$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PShowX` (IN `codigox` VARCHAR(100))   SELECT * FROM invitados WHERE codigo = codigox$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitados`
--

CREATE TABLE `invitados` (
  `id` int(10) NOT NULL,
  `invitado` varchar(100) NOT NULL,
  `acompanantes` int(50) DEFAULT NULL,
  `mesa` int(50) DEFAULT NULL,
  `codigo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `invitados`
--

INSERT INTO `invitados` (`id`, `invitado`, `acompanantes`, `mesa`, `codigo`) VALUES
(6, 'Luz Dary Molina', 4, 1, 'c2b3707634'),
(8, 'Mario Molina', 3, 1, 'ca33a090cd'),
(9, 'Alejandra Molina', 3, 1, 'e5b8b1effe'),
(10, 'Gloria Hernadez', 2, 2, 'cc28f0b49d'),
(11, 'Javier Hernandez', 2, 2, '38961408ff'),
(12, 'Andrea Hernandez', 4, 2, 'd6586b1fa2'),
(13, 'Humberto Hernandez', 1, 2, '79b299a8d5'),
(14, 'Alexandra Morales', 1, 2, '55a81c7adb'),
(15, 'Estefania Molina', 2, 3, '369ba96b6f'),
(16, 'Mario Sierra', 4, 3, '8b3920f8e0'),
(17, 'Leidy Acevedo', 1, 3, 'aa82160174'),
(18, 'Mary Acevedo', 2, 3, '4027f829b6'),
(19, 'Tatiana Hernandez', 2, 4, 'df78d32e25'),
(20, 'Esteban Hernandez', 2, 4, 'c4fefa9486'),
(21, 'Santiago Cardenas', 1, 4, 'fbad4f0bff'),
(22, 'Yesenia Cardenas', 4, 4, '129d01bc9a'),
(23, 'Mary ', 1, 4, 'b1ab4faf33'),
(24, 'Luz', 1, 4, '079a0987fd'),
(25, 'Edgar Gomez', 3, 5, '9741bf3bfb'),
(27, 'Luis Palacio', 2, 5, '3d05b00448'),
(28, 'Adriana Torres', 2, 5, 'cdeff01633'),
(29, 'León Torres', 1, 5, '4db45c55a8'),
(30, 'Yolanda Orozco', 1, 5, '32b26f2907'),
(31, 'Sara Palacio', 1, 5, '5115238b1d'),
(32, 'Lito Quintero', 4, 6, 'e6eec22ad3'),
(33, 'Isabel Orozco', 2, 6, '437e2fadd1'),
(34, 'Natalia Berrio', 2, 6, '20aa3cc6bc'),
(35, 'Lorena Fonegra', 1, 6, '7fa5e00de8'),
(36, 'Amparo ', 2, 6, '98eb04c44c'),
(37, 'Daniel Verdugo', 4, 7, '0df6fbabc9'),
(38, 'Arturo Londoño', 1, 7, 'bd8b4fce67'),
(39, 'Joaquin Agudelo', 2, 7, '81f297868b'),
(40, 'Nelson Vargas', 1, 7, '97b3eaa81d'),
(41, 'Nelson Maya', 2, 7, 'a886074142'),
(42, 'Luz Dary Echavarria', 1, 8, '9776123590'),
(43, 'Lucelly Cañas', 1, 8, '4e651b2bc6'),
(44, 'Orfa Rios', 1, 8, '17fe3d4e0a'),
(45, 'Dairo Saldarriaga', 2, 8, '7d0ac2ef52'),
(46, 'Patricia Ortiz', 1, 8, 'f1ec39a80c'),
(47, 'Isabel Vargas', 1, 8, 'f38b950499'),
(48, 'Nora Orozco', 1, 8, 'd8bb93245a'),
(49, 'Jaime Ruiz', 2, 8, '72584cfb02'),
(50, 'Fanny Palacio', 2, 9, '0f8830a5af'),
(51, 'Mirley Santos', 1, 9, 'a5bdd853e1'),
(52, 'Humberto Patiño', 2, 9, '6a2007a360'),
(53, 'Daniel Patiño', 2, 9, 'f56306d3de'),
(54, 'Elvia Palacio', 1, 9, '3e98c8bf35'),
(55, 'Rodrigo Palacio', 2, 9, '6fc4d84699'),
(56, 'Bercelio Torres', 2, 10, 'aaeb8a19ee'),
(57, 'Daniel Muñoz', 2, 10, 'bc79b12f30'),
(58, 'Marta Macias', 2, 10, 'ea6f12ba95'),
(59, 'Justino Duque', 2, 10, '0d1c8ec5a4'),
(60, 'Carlos Mario Duque', 2, 10, '22ff5c4ae7'),
(61, 'Javier Arboleda', 2, 11, '6678102e29'),
(62, 'Arelis Manco', 2, 11, 'bddd6fbf98'),
(63, 'Jairo ', 2, 11, '3aa5814fe2'),
(64, 'Luz Aida Posada', 1, 11, '4b57ee94b6'),
(65, 'Jose Palacios', 2, 11, '3558651aa7'),
(66, 'Paola Quintero', 1, 11, '6791ad8b7d'),
(67, 'Julio Cañas', 2, 12, 'c0c1be3ab2'),
(68, 'Esteban Cañas', 2, 12, '6bbbe9fdc4'),
(69, 'Danny Zapata', 2, 12, '3ac232203e'),
(70, 'Daniel Posada', 1, 12, '3237333c31'),
(71, 'Mirledys Abellaneda', 1, 12, 'f51227fdfe'),
(72, 'Elcy Garcia', 1, 12, '62129b9c37'),
(73, 'Angela Roldan', 1, 12, '80d0298ff6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `nombre`, `password`) VALUES
(1, 'admin', '1224');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `invitados`
--
ALTER TABLE `invitados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `invitados`
--
ALTER TABLE `invitados`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
