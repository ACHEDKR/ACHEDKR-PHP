-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2020 a las 21:34:47
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `nickname` varchar(30) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `cedula` varchar(12) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(10) NOT NULL,
  `contratonumero` varchar(30) NOT NULL,
  `cargo_id` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `nickname`, `correo`, `cedula`, `clave`, `direccion`, `telefono`, `contratonumero`, `cargo_id`) VALUES
(1, 'KEVIN', 'ROJAS', 'KEVIN50', 'KEVIN50@HOTMAIL.COM', '123456878', '456789', '', 12345678, 'NUEVOMUNDO', 1509),
(3, 'ANDREY', 'ROJAS', 'A12345', 'kevin@gmail.com', '12345', '$2y$12$aKxepsDCkcnbCd11IzRkEu1tUwxRm8QbqCO2KV6WGJtK2aGJoOrru', 'CALLE 6', 123456, '123', 0),
(4, 'Edgar', 'Diaz', 'Edgar50', 'Edgar50@hotmail.com', '1234567', '$2y$12$I6wU.fb5omb.ijoXPCy5TuTSIfA0CPH4zFrVoaQha749EXdociorG', 'calle 3', 789632145, 'adsi1', 0),
(5, 'kevin rojas', 'PRUEBA', 'prueba1', 'KROJAS@gmail.com', '16456513213', '$2y$12$eUEdBagE2jyElZ30NyL0nuohgvEFYdMKZ1t6SdvltZZHhck1KLIGy', 'CALLE 6', 123456, '123', 0),
(6, 'Laura', 'Becerra', 'Laura50', 'Laura50@hotmail.com', '65161561', '$2y$12$ghwn/X.Xv3iUzw2.I/jTIeybqRRgRg4Og5Xcstds53NRnITmjA/c.', 'Calle 2', 12347899, 'adsi124563', 0),
(7, 'carol', 'serrano', 'cserrano', 'cserrano@gmail.com', '613135351', '$2y$12$I7RCN5mZSHU2MG2qFAwlnuB01Nb8IhgEEKKpNKwabTW1wmHsW90N6', 'CALLE 6', 123456, '123', 0),
(8, 'carol', 'serrano', 'serrano', 'cfserrano@gmail.com', '56846513548', '$2y$12$5..pf9bAKrg61Xkx62vly.cAA40MHPsfC5.89sEzNhayCyJbWIWYq', 'CALLE 6', 15654351, '123', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
