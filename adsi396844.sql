-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-12-2013 a las 04:20:08
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `adsi396844`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ide_usuario` varchar(64) NOT NULL,
  `nom_usuario` varchar(64) NOT NULL,
  `ape_usuario` varchar(64) NOT NULL,
  `nick_usuario` varchar(64) NOT NULL,
  `eda_usuario` int(2) NOT NULL,
  `cor_usuario` varchar(64) NOT NULL,
  `cla_usuario` varchar(64) NOT NULL,
  `rol_usuario` varchar(64) NOT NULL,
  `est_usuario` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ide_usuario`, `nom_usuario`, `ape_usuario`, `nick_usuario`, `eda_usuario`, `cor_usuario`, `cla_usuario`, `rol_usuario`, `est_usuario`) VALUES
('1053797940', 'Jhonathan Fernando', 'Beltran Gonzalez', 'Jonanfer', 24, 'jfdobg-18@hotmail.com', '123456', '', ''),
('1053456789', 'Dayana Andrea ', 'Marin Gallego', 'Dayaan', 20, 'dayaan20@hotmail.com', '123456', 'Aprendiz', 'Activo'),
('1053790456', 'Xiomara', 'Marin Gallego', 'Xiomi', 21, 'xiom456@hotmail.com', '123456', 'Aprendiz', 'Activo'),
('1053456942', 'Alejandra', 'Alzate Marin', 'Aleja', 19, 'alej458@hotmail.com', '123456', 'Aprendiz', 'Activo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
