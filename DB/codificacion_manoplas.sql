-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2021 a las 22:19:55
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `codificacion_manoplas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacidad`
--

CREATE TABLE `capacidad` (
  `id_cap` int(11) NOT NULL,
  `cap_codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `cap_nombre` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `capacidad`
--

INSERT INTO `capacidad` (`id_cap`, `cap_codigo`, `cap_nombre`) VALUES
(1, 'C00', '9k'),
(2, 'C01', '12k'),
(3, 'C02', '18k'),
(4, 'C03', '24k'),
(5, 'C04', '9k-12k'),
(6, 'C05', '12k-18k'),
(7, 'C06', '18k-24k'),
(8, 'C07', '9k-12k-18k'),
(9, 'C08', '9k-12k-24k'),
(10, 'C09', '9k-12k-18k-24k'),
(11, 'C10', '9k-24k'),
(12, 'C11', '9k-18k'),
(13, 'C12', '9k-18k-24k'),
(14, 'C13', '12k-18k-24k'),
(15, 'C14', '12k-24k');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destino`
--

CREATE TABLE `destino` (
  `id_des` int(11) NOT NULL,
  `des_codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `des_nombre` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `destino`
--

INSERT INTO `destino` (`id_des`, `des_codigo`, `des_nombre`) VALUES
(1, 'FS', 'p/Frío solo'),
(2, 'FC', 'p/Frío-Calor'),
(3, 'AM', 'p/Ambos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcion`
--

CREATE TABLE `funcion` (
  `id_fun` int(11) NOT NULL,
  `fun_codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `fun_nombre` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `funcion`
--

INSERT INTO `funcion` (`id_fun`, `fun_codigo`, `fun_nombre`) VALUES
(1, 'UE', 'Unidad Exterior'),
(2, 'UI', 'Unidad Interior');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca_kit`
--

CREATE TABLE `marca_kit` (
  `id_mk` int(11) NOT NULL,
  `mk_codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `mk_nombre` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marca_kit`
--

INSERT INTO `marca_kit` (`id_mk`, `mk_codigo`, `mk_nombre`) VALUES
(1, 'HS', 'Hisense'),
(2, 'MD', 'Midea'),
(3, 'AX', 'Aux'),
(4, 'SM', 'Samsung');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnologia`
--

CREATE TABLE `tecnologia` (
  `id_tec` int(11) NOT NULL,
  `tec_codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `tec_nombre` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tecnologia`
--

INSERT INTO `tecnologia` (`id_tec`, `tec_codigo`, `tec_nombre`) VALUES
(1, 'IV', 'Inverter'),
(2, 'ON', 'On/Off');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_prueba`
--

CREATE TABLE `tipo_prueba` (
  `id_tp` int(11) NOT NULL,
  `tp_codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `tp_nombre` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_prueba`
--

INSERT INTO `tipo_prueba` (`id_tp`, `tp_codigo`, `tp_nombre`) VALUES
(1, 'F', 'Funcional'),
(2, 'S', 'Seg. Eléctrica');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `capacidad`
--
ALTER TABLE `capacidad`
  ADD PRIMARY KEY (`id_cap`);

--
-- Indices de la tabla `destino`
--
ALTER TABLE `destino`
  ADD PRIMARY KEY (`id_des`);

--
-- Indices de la tabla `funcion`
--
ALTER TABLE `funcion`
  ADD PRIMARY KEY (`id_fun`);

--
-- Indices de la tabla `marca_kit`
--
ALTER TABLE `marca_kit`
  ADD PRIMARY KEY (`id_mk`);

--
-- Indices de la tabla `tecnologia`
--
ALTER TABLE `tecnologia`
  ADD PRIMARY KEY (`id_tec`);

--
-- Indices de la tabla `tipo_prueba`
--
ALTER TABLE `tipo_prueba`
  ADD PRIMARY KEY (`id_tp`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `capacidad`
--
ALTER TABLE `capacidad`
  MODIFY `id_cap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `destino`
--
ALTER TABLE `destino`
  MODIFY `id_des` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `funcion`
--
ALTER TABLE `funcion`
  MODIFY `id_fun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `marca_kit`
--
ALTER TABLE `marca_kit`
  MODIFY `id_mk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tecnologia`
--
ALTER TABLE `tecnologia`
  MODIFY `id_tec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_prueba`
--
ALTER TABLE `tipo_prueba`
  MODIFY `id_tp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
