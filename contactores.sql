-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2024 a las 18:40:54
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
-- Base de datos: `contactores`
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
(1, 'Contactor 1', 'Embasado', '15/12/24', '15/12/25'),
(2, 'Contactor 2', 'Embasado', '15/12/24', '15/12/25'),
(3, 'Contactor 3', 'Embasado', '15/12/24', '15/12/25'),
(4, 'Contactor 4', 'Embasado', '15/12/24', '15/12/25'),
(5, 'Contactor 5', 'Inspección', '16/02/24', '16/02/25'),
(6, 'Contactor 6', 'Inspección', '16/02/24', '16/02/25'),
(7, 'Contactor 7', 'Inspección', '16/02/24', '16/02/25'),
(8, 'Contactor 8', 'Inspección', '16/02/24', '16/02/25'),
(9, 'Contactor 9', 'Tolvas', '11/01/24', '11/01/25'),
(10, 'Contactor 10', 'Inspección', '11/01/24', '11/01/25'),
(11, 'Contactor 11', 'Tolvas', '11/01/24', '11/01/25'),
(12, 'Contactor 12', 'Inspección', '11/01/24', '11/01/25'),
(13, 'Contactor 13', 'Laboratorios', '27/08/24', '27/08/25'),
(14, 'Contactor 14', 'Laboratorios', '27/08/24', '27/08/25'),
(15, 'Contactor 15', 'Laboratorios', '27/08/24', '27/08/25'),
(16, 'Contactor 16', 'Laboratorios', '27/08/24', '27/08/25'),
(17, 'Contactor 17', 'Talleres', '5/12/24', '5/12/25'),
(18, 'Contactor 18', 'Talleres', '5/12/24', '5/12/25'),
(19, 'Contactor 19', 'Talleres', '5/12/24', '5/12/25'),
(20, 'Contactor 20', 'Talleres', '5/12/24', '5/12/25');

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
