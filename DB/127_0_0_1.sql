-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2018 a las 07:58:46
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mcitransport`
--
CREATE DATABASE IF NOT EXISTS `mcitransport` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mcitransport`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `dominio` varchar(500) NOT NULL,
  `clave` varchar(500) NOT NULL,
  `contenido` text NOT NULL,
  `creacion` datetime NOT NULL,
  `modificacion` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contents`
--

INSERT INTO `contents` (`id`, `dominio`, `clave`, `contenido`, `creacion`, `modificacion`) VALUES
(1, 'home', 'seccion_1_titulo', 'M.C. Int''l Transportation Inc', '2018-04-23 23:27:44', '2018-04-23 23:27:44'),
(2, 'home', 'seccion_1_subtitulo', '"Transportation Specialist"', '2018-04-23 23:28:34', '2018-04-23 23:28:34'),
(3, 'home', 'seccion_1_contenido', 'M.C. Int''l Transportation Inc has been providing creative solutions for our customers since 1993. Our customers'' satisfaction has always been measured by our exceptional growth and the commitment of our employees to be the most innovative industry leader in the marketplace.\r\n\r\nWe are an Intermodal Carrier having 48 state authority, servicing the international markets and specializing in the transportation and storage of ocean marine containers.\r\n\r\nWe are committed to our task of being the best Intermodal trucking company in the Southeast. We take great pride in our work and understand what it takes to be the best.\r\n\r\nWe have worked hard to attract experienced professionals, obtain the latest technology, acquire the physical facility as well as put into place all of the necessary control procedures to insure professional service from start to finish.', '2018-04-23 23:29:07', '2018-04-23 23:29:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `email`, `pass`) VALUES
(1, 'Ángel Veloz', 'vlzangel91@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
