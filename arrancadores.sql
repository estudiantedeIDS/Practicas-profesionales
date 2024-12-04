-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2024 a las 18:39:49
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `arrancadores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivos`
--

CREATE TABLE `dispositivos` (
  `id` int(50) NOT NULL,
  `codigo_dispositivo` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `fecha_compra` varchar(50) NOT NULL,
  `fecha_mantto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dispositivos`
--

INSERT INTO `dispositivos` (`id`, `codigo_dispositivo`, `area`, `fecha_compra`, `fecha_mantto`) VALUES
(1, 'Arrancador 1', 'Embasado', '5/05/24', '5/05/25'),
(2, 'Arrancador 2', 'Embasado', '5/05/24', '5/05/25'),
(3, 'Arrancador 3', 'Embasado', '5/05/24', '5/05/25'),
(4, 'Arrancador 4', 'Embasado', '5/05/24', '5/05/25'),
(5, 'Arrancador 5', 'Inspección', '10/03/24', '10/03/25'),
(6, 'Arrancador 6', 'Inspección', '10/03/24', '10/03/25'),
(7, 'Arrancador 7', 'Inspección', '10/03/24', '10/03/25'),
(8, 'Arrancador 8', 'Inspección', '10/03/24', '10/03/25'),
(9, 'Arrancador 9', 'Tolvas', '15/09/24', '15/09/25'),
(10, 'Arrancador 10', 'Tolvas', '15/09/24', '15/09/25'),
(11, 'Arrancador 11', 'Tolvas', '15/09/24', '15/09/25'),
(12, 'Arrancador 12', 'Tolvas', '15/09/24', '15/09/25'),
(13, 'Arrancador 13', 'Laboratorios', '6/11/24', '6/11/25'),
(14, 'Arrancador 14', 'Laboratorios', '6/11/24', '6/11/25'),
(15, 'Arrancador 15', 'Laboratorios', '6/11/24', '6/11/25'),
(16, 'Arrancador 16', 'Laboratorios', '6/11/24', '6/11/25'),
(27, 'Arrancador 17', 'Talleres', '13/03/24', '13/03/25'),
(28, 'Arrancador 18', 'Talleres', '13/03/24', '13/03/25'),
(29, 'Arrancador 19', 'Talleres', '13/03/24', '13/03/25'),
(30, 'Arrancador 20', 'Talleres', '13/03/24', '13/03/25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
