-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2021 a las 00:44:12
-- Versión del servidor: 8.0.23
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comedor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(8) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `telefono`, `direccion`) VALUES
(1, 'Andrea Castellanos', '78940062', 'San Salvador'),
(2, 'Marleny Sosa', '75486932', 'Chalatenango'),
(6, 'Oscar Flores', '22745859', 'Sonsonate'),
(8, 'Alberto Fuentes', '75486932', 'San Miguel'),
(9, 'Prueba 1', '25787878', 'San Salvador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idVenta` int NOT NULL,
  `idUsuario` int NOT NULL,
  `detalle` varchar(50) NOT NULL,
  `fechaVenta` varchar(25) NOT NULL,
  `fechaPago` varchar(25) DEFAULT NULL,
  `monto` decimal(15,2) NOT NULL,
  `tipoPago` varchar(25) NOT NULL,
  `estado` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idVenta`, `idUsuario`, `detalle`, `fechaVenta`, `fechaPago`, `monto`, `tipoPago`, `estado`) VALUES
(1, 1, 'Plato de carne', '2021-07-01', '2021-07-01', '2.50', 'Contado', 'Cancelado'),
(2, 2, 'Plato de pollo', '2021-07-01', '2021-07-01', '3.00', 'Contado', 'Cancelado'),
(3, 6, 'Lasagna con ensalada', '2021-07-01', NULL, '2.75', 'Credito', 'Pendiente'),
(4, 2, 'Sandwich de pollo', '2021-07-01', NULL, '4.50', 'Credito', 'Pendiente'),
(5, 1, 'Tres leches con cafe', '2021-07-01', NULL, '2.75', 'Credito', 'Pendiente'),
(6, 1, 'PRUEBA1', '2021-07-01', NULL, '2.75', 'Credito', 'Pendiente'),
(7, 2, 'Kentuky', '2021-07-08', '2021-07-08', '5.00', 'Credito', 'Pendiente'),
(10, 1, 'Prueba25', '2021-07-03', '', '25.00', 'Credito', 'Pendiente'),
(11, 1, 'prueba de fecha dd mm aaaa', '2021-07-08', '', '25.75', 'Credito', 'Pendiente'),
(12, 2, 'Pan con cafe prueba', '2021-07-04', '2021-07-08', '2.75', 'Contado', 'Cancelado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idVenta`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idVenta` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
