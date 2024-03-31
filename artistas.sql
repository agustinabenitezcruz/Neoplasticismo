-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-06-2023 a las 14:50:20
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Neoplasticismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `id` int(1) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `nacionalidad` varchar(255) DEFAULT NULL,
  `nacimiento` int(5) DEFAULT NULL,
  `fallecimiento` int(5) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`id`, `nombre`, `apellido`, `nacionalidad`, `nacimiento`, `fallecimiento`, `descripcion`, `imagen`) VALUES
(0, 'Theo', 'van Doesburg', 'Holandés', 1883, 1931, 'Pintor, poeta, teórico y arquitecto fundador del grupo, hasta su alejamiento en 1924 tras su ruptura con Mondrian.', 'theoVanDoesburg'),
(1, 'Piet', 'Mondrian', 'Neerlandés', 1872, 1944, 'Pintor fundador junto con van Doesburg de De Stijl en 1917', 'pietMondrian'),
(2, 'Bart', 'van der Leck', 'Neerlandés', 1876, 1958, 'Pintor, diseñador y ceramista fundador de De Stijl junto con van Doesburg y Piet Mondrian en 1917', 'bartVanDerLeck'),
(3, 'Vilmos', 'Huzsár', 'Húngaro', 1884, 1960, 'Fue el diseñador de la portada del primer número de la revista, pero abandonó el grupo en 1923 y se dedicó a colaborar con Gerrit Rietveld en la Exposición de Arte de Berlín.', 'vilmosHuzsar'),
(4, 'Gerrit', 'Rietveld', 'Neerlandés', 1888, 1964, 'Carpintero y arquitecto, diseñador vanguardista de mobiliario y de piezas arquitectónicas, fue miembro de De Stijl desde 1924 a 1928. Fue uno de los arquitectos más importantes de Holanda.', 'gerritRietveld'),
(5, 'Jacobus Johannes', 'Pieter Oud', 'Neerlandés', 1890, 1963, 'Arquitecto y modelista, fuertemente influenciado por la filosofía neoplasticista. Formó parte del grupo De Stijl desde 1915 y persiguió la integración de la arquitectura y la pintura de la mano de Mondrian y Rietveld.', 'jocabusJohannesPieterOud');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
