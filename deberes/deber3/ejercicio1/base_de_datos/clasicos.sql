-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2015 a las 09:10:40
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `publicaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasicos`
--

CREATE TABLE IF NOT EXISTS `clasicos` (
`id` int(10) unsigned NOT NULL,
  `autor` varchar(128) DEFAULT NULL,
  `titulo` varchar(128) DEFAULT NULL,
  `tipo` varchar(16) DEFAULT NULL,
  `anio` char(4) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clasicos`
--

INSERT INTO `clasicos` (`id`, `autor`, `titulo`, `tipo`, `anio`) VALUES
(3, 'Stephen king', 'Under the Dome', 'Suspenso', '1990'),
(4, 'Dan Brown', 'Conspiracion', 'Accion', '1990'),
(5, 'Franck Kafca', 'Metamorfosis', 'Suspenso', '1800');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clasicos`
--
ALTER TABLE `clasicos`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clasicos`
--
ALTER TABLE `clasicos`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
