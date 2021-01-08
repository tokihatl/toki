-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-01-2021 a las 06:05:28
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistemadual`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosalumnos`
--

CREATE TABLE IF NOT EXISTS `datosalumnos` (
  `id_dalumno` int(10) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `matricula` int(10) NOT NULL,
  `contra` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `estatus` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `semestre` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_dalumno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `datosalumnos`
--

INSERT INTO `datosalumnos` (`id_dalumno`, `nombres`, `apellidos`, `matricula`, `contra`, `estatus`, `semestre`) VALUES
(22, 'Giovanni', 'PÃ©rez Ibarra', 201632969, 'c9b733a6fe5d39c3197a5b4f7db13641', 'Regular', 'Sexto'),
(23, 'Laura', 'Ramos Gonzalez', 201632688, '5bceb561093e52f870ead9f15314708e', 'Regular', 'Sexto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosempresas`
--

CREATE TABLE IF NOT EXISTS `datosempresas` (
  `id_due` int(10) NOT NULL AUTO_INCREMENT,
  `razonsocial` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rfc` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `domicilio` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `contacto` int(15) NOT NULL,
  `correo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `empleados` int(10) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `contra` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_due`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datostutores`
--

CREATE TABLE IF NOT EXISTS `datostutores` (
  `id_dtutor` int(10) NOT NULL AUTO_INCREMENT,
  `id_trabajador` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `contra` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `carrera` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `perfil` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_dtutor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
