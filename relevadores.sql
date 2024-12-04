-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2024 a las 18:41:24
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
-- Base de datos: `relevadores`
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
(1, 'Relevador 1', 'Embasado', '4/02/24', '4/02/25'),
(2, 'Relevador 2', 'Embasado', '4/02/24', '4/02/25'),
(3, 'Relevador 3', 'Embasado', '4/02/24', '4/02/25'),
(4, 'Relevador 4', 'Embasado', '4/02/24', '4/02/25'),
(5, 'Relevador 5', 'Inspección', '17/09/24', '17/09/25'),
(6, 'Relevador 6', 'Inspección', '17/09/24', '17/09/25'),
(7, 'Relevador 7', 'Inspección', '17/09/24', '17/09/25'),
(8, 'Relevador 8', 'Inspección', '17/09/24', '17/09/25'),
(9, 'Relevador 9', 'Tolvas', '25/07/24', '25/07/25'),
(10, 'Relevador 10', 'Tolvas', '25/07/24', '25/07/25'),
(11, 'Relevador 11', 'Tolvas', '25/07/24', '25/07/25'),
(12, 'Relevador 12', 'Tolvas', '25/07/24', '25/07/25'),
(13, 'Relevador 13', 'Laboratorios', '19/10/24', '19/10/25'),
(14, 'Relevador 14', 'Laboratorios', '19/10/24', '19/10/25'),
(15, 'Relevador 15', 'Laboratorios', '19/10/24', '19/10/25'),
(16, 'Relevador 16', 'Laboratorios', '19/10/24', '19/10/25'),
(17, 'Relevador 17', 'Talleres', '14/12/24', '14/12/25'),
(18, 'Relevador 18', 'Talleres', '14/12/24', '14/12/25'),
(19, 'Relevador 19', 'Talleres', '14/12/24', '14/12/25'),
(20, 'Relevador 20', 'Talleres', '14/12/24', '14/12/25');

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
