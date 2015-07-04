-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2015 a las 06:15:26
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mensaje`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE IF NOT EXISTS `mensaje` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mensaje` varchar(400) DEFAULT NULL,
  `noticias` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`id`, `nombre`, `email`, `mensaje`, `noticias`) VALUES
(1, 'ujk', 'hjnk', '', 'on'),
(2, 'dsf', 'sdf', '', 'on'),
(3, 'sad', 'asd', 'asdsad\r\n                            ', 'on'),
(4, 'dsfg', 'dfsg', 'dfg\r\n                            ', 'on'),
(5, 'dfgfd', 'dfgdfg', '\r\n                           dfgdfg ', 'on'),
(6, 'sdfsdf', 'sdfsd', '\r\n       sdfsdf                     ', 'on'),
(7, 'Lenin', 'donlino_9012@hotmail.com', 'asdsadfsdfg\r\n                            ', 'on'),
(8, 'hghg', 'h', 'ghj\r\n                            ', 'on'),
(9, 'j', 'h', 'g\r\n                            ', ''),
(10, 'fg', 'donlino_9012@hotmail.com', 'dfg\n                            ', 'on'),
(11, 'David', 'sergio1990@hotmail.es', 'asdsadasfd\n                            ', 'on'),
(12, 'David', 'sergio1990@hotmail.es', 'asdsadasfd\n                            ', 'on'),
(13, 'David', 'sergio1990@hotmail.es', 'asdsadasfd\n                            ', 'on'),
(14, 'David', 'sergio1990@hotmail.es', 'asdsadasfd\n                            ', 'on'),
(15, 'Manue', 'sergio1990@hotmail.es', 'asdasdf\n                            ', 'on'),
(16, 'Lenin', 'anto@gmail.com', 'asdasdf\n                            ', 'on');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
