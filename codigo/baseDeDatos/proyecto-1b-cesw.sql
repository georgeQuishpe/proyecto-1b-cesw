-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-01-2024 a las 13:38:29
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
-- Base de datos: `proyecto-1b-cesw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones`
--

CREATE TABLE `acciones` (
  `nombre` varchar(100) NOT NULL,
  `fechaCompra` date NOT NULL,
  `precioUnitario` double NOT NULL,
  `cantidad` int(3) NOT NULL,
  `costoTotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `acciones`
--

INSERT INTO `acciones` (`nombre`, `fechaCompra`, `precioUnitario`, `cantidad`, `costoTotal`) VALUES
('Amazon', '2024-01-04', 10, 5, 50),
('Apple', '2024-01-02', 50, 2, 100),
('Meta', '2024-01-28', 140.5, 100, 14050),
('Youtube', '2024-01-28', 1500, 2, 3000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD PRIMARY KEY (`nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
