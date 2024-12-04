-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2024 a las 18:41:04
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
-- Base de datos: `guardamotores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivos`
--

CREATE TABLE `dispositivos` (
  `id` int(11) NOT NULL,
  `codigo_dispositivo` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `fecha_compra` varchar(50) NOT NULL,
  `fecha_mantto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dispositivos`
--

INSERT INTO `dispositivos` (`id`, `codigo_dispositivo`, `area`, `fecha_compra`, `fecha_mantto`) VALUES
(1, 'Guardamotor 1', 'Embasado', '14/11/024', '14/11/25'),
(2, 'Guardamotor 2', 'Embasado', '14/11/024', '14/11/25'),
(3, 'Guardamotor 3', 'Embasado', '14/11/024', '14/11/25'),
(4, 'Guardamotor 4', 'Embasado', '14/11/024', '14/11/25'),
(5, 'Guardamotor 5', 'Inspección', '12/04/24', '12/04/25'),
(6, 'Guardamotor 6', 'Inspección', '12/04/24', '12/04/25'),
(7, 'Guardamotor 7', 'Inspección', '12/04/24', '12/04/25'),
(8, 'Guardamotor 8', 'Inspección', '12/04/24', '12/04/25'),
(9, 'Guardamotor 9', 'Tolvas', '14/05/24', '14/05/25'),
(10, 'Guardamotor 10', 'Tolvas', '14/05/24', '14/05/25'),
(11, 'Guardamotor 11', 'Tolvas', '14/05/24', '14/05/25'),
(12, 'Guardamotor 12', 'Tolvas', '14/05/24', '14/05/25'),
(13, 'Guardamotor 13', 'Laboratorios', '1/06/24', '1/06/25'),
(14, 'Guardamotor 14', 'Laboratorios', '1/06/24', '1/06/25'),
(15, 'Guardamotor 15', 'Laboratorios', '1/06/24', '1/06/25'),
(16, 'Guardamotor 16', 'Laboratorios', '1/06/24', '1/06/25'),
(17, 'Guardamotor 17', 'Talleres', '6/11/24', '6/11/25'),
(18, 'Guardamotor 18', 'Talleres', '6/11/24', '6/11/25'),
(19, 'Guardamotor 19', 'Talleres', '6/11/24', '6/11/25'),
(20, 'Guardamotor 20', 'Talleres', '6/11/24', '6/11/25');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
