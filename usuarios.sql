-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-06-2023 a las 14:49:52
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
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `usuario`, `password`) VALUES
(0, 'Agustina Benitez Cruz', 'agusbenitezc@gmail.com', 'abenit12', '4d186321c1a7f0f354b297e8914ab240'),
(0, 'Agustina Benitez Cruz', 'agusbenitezc@gmail.com', 'abenit12', '4d186321c1a7f0f354b297e8914ab240'),
(NULL, 'Agustina Benitez Cruz', 'agusbenitezc@gmail.com', 'abenit12', '4d186321c1a7f0f354b297e8914ab240'),
(NULL, 'Agustina Benitez Cruz', 'agusbenitezc@gmail.com', 'abenit12', '4d186321c1a7f0f354b297e8914ab240'),
(NULL, 'pepe', 'pepepablo@gmail.com', 'pablo', '1c1f70d4529856884d240d200887b9ae'),
(NULL, 'franco', 'fran@franny', 'Franny', 'f0af5dd950648fc729b29aade9a25d5b'),
(NULL, 'lili', 'lili@lili', 'lili', 'e67c0f9d997a1c48fc7eb677d40fc290');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
