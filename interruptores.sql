-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2024 a las 18:41:33
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
-- Base de datos: `interruptores`
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
(1, 'Interruptor 1', 'Embasado', '12/09/24', '12/09/25'),
(2, 'Interruptor 2', 'Embasado', '12/09/24', '12/09/25'),
(3, 'Interruptor 3', 'Embasado', '12/09/24', '12/09/25'),
(4, 'Interruptor 4', 'Embasado', '12/09/24', '12/09/25'),
(5, 'Interruptor 5', 'Inspección', '7/10/24', '7/10/25'),
(6, 'Interruptor 6', 'Inspección', '7/10/24', '7/10/25'),
(7, 'Interruptor 7', 'Inspección', '7/10/24', '7/10/25'),
(8, 'Interruptor 8', 'Inspección', '7/10/24', '7/10/25'),
(9, 'Interruptor 9', 'Tolvas', '22/07/24', '22/07/25'),
(10, 'Interruptor 10', 'Tolvas', '22/07/24', '22/07/25'),
(11, 'Interruptor 11', 'Tolvas', '22/07/24', '22/07/25'),
(12, 'Interruptor 12', 'Tolvas', '22/07/24', '22/07/25'),
(13, 'Interruptor 13', 'Laboratorios', '14/04/24', '14/04/25'),
(14, 'Interruptor 14', 'Laboratorios', '14/04/24', '14/04/25'),
(15, 'Interruptor 15', 'Tolvas', '14/04/24', '14/04/25'),
(16, 'Interruptor 16', 'Tolvas', '14/04/24', '14/04/25'),
(17, 'Interruptor 17', 'Talleres', '9/10/24', '9/10/25'),
(23, 'Interruptor 18', 'Talleres', '18/10/24', '18/10/25'),
(24, 'Interruptor 19', 'Talleres', '18/10/24', '18/10/25'),
(25, 'Interruptor 20', 'Talleres', '18/10/24', '18/10/25');

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
