-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2015 a las 16:49:39
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `s5e3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE IF NOT EXISTS `datos` (
  `cod_provincia` int(3) NOT NULL,
  `nom_provincia` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cod_canton` int(4) NOT NULL,
  `nom_canton` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cod_parroquia` int(6) NOT NULL,
  `nom_parroquia` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`cod_provincia`, `nom_provincia`, `cod_canton`, `nom_canton`, `cod_parroquia`, `nom_parroquia`) VALUES
(1, 'AZUAY', 101, 'CUENCA', 10101, 'BELLAVISTA'),
(1, 'AZUAY', 101, 'CUENCA', 10101, 'BELLAVISTA'),
(20, 'GALAPAGOS', 2001, 'SAN CRISTÃ“BAL', 200150, 'PUERTO BAQUERIZO MORENO'),
(20, 'GALAPAGOS', 2001, 'SAN CRISTÃ“BAL', 200150, 'PUERTO BAQUERIZO MORENO'),
(17, 'PICHINCHA', 1701, 'QUITO', 170108, 'CHILLOGALLO'),
(8, 'ESMERALDAS', 803, 'MUISNE', 80351, 'BOLÃVAR'),
(18, 'TUNGURAHUA', 1805, 'PATATE', 180550, 'PATATE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
