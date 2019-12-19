-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2019 a las 20:35:08
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `marketplace`
--
CREATE DATABASE IF NOT EXISTS `marketplace` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `marketplace`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`) VALUES
(1, 'Nuevo'),
(2, 'Usado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id_imagen` int(11) NOT NULL,
  `imagen` varchar(70) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `n_marca` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `n_marca`) VALUES
(1, 'Samsung'),
(2, 'LG'),
(3, 'Lenovo'),
(4, 'Panasonic'),
(5, 'RCA'),
(6, 'Alcatel'),
(7, 'Nissan'),
(8, 'Toyota'),
(10, 'Toshiba'),
(11, 'Puma'),
(12, 'Nikes'),
(32, 'Sony'),
(33, 'HP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propuesta`
--

CREATE TABLE `propuesta` (
  `id_propuesta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `producto` varchar(75) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_propuesta_imagen` int(11) DEFAULT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `propuesta`
--

INSERT INTO `propuesta` (`id_propuesta`, `id_usuario`, `producto`, `descripcion`, `id_estado`, `id_propuesta_imagen`, `precio`) VALUES
(1, 3, 'Samsung Galaxy s10', 'Vendo Samsung Galaxy, Excelentes Condiciones Estado 9/10, Tratos en metrocentro', 2, 1, 900),
(32, 1, 'qw', 'wq', 1, NULL, 1),
(33, 1, 'Laptop', 'Laptop Lenovo 8 GB Ram', 2, NULL, 700),
(34, 3, 'PS4', 'PS4 Semi Nuevo, ', 2, NULL, 550),
(35, 1, 'Laptop Toyota', 'En buen estado es Core i7, 32 de Ram', 2, NULL, 1300),
(36, 1, 'ttttttttt', 'hhhhhh', 1, NULL, 1000),
(37, 3, 'qqqqqqqq', 'awdadadwa', 1, NULL, 21),
(38, 3, 'rudy', 'rudy', 1, NULL, 100),
(39, 1, 'eeee', 'te lo vendo barato', 1, NULL, 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propuesta_imagen`
--

CREATE TABLE `propuesta_imagen` (
  `id_propuesta_imagen` int(11) NOT NULL,
  `id_propuesta` int(11) NOT NULL,
  `id_imagen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requerimiento`
--

CREATE TABLE `requerimiento` (
  `id_requerimiento` int(11) NOT NULL,
  `nombre_producto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `id_tipo_producto` int(11) NOT NULL,
  `id_marca` int(11) DEFAULT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` double NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_transaccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `requerimiento`
--

INSERT INTO `requerimiento` (`id_requerimiento`, `nombre_producto`, `id_tipo_producto`, `id_marca`, `descripcion`, `precio`, `id_usuario`, `id_transaccion`) VALUES
(2, 'Laptop', 6, 3, 'Compro laptop lenovo i7, 4 gb Ram,tratos solo en S.S', 800, 3, 2),
(3, 'PS4', 6, 4, 'Compro ps4 excelentes condiciones, Para ahora en metro', 600, 2, 2),
(4, 'Laptop', 6, 8, 'Super chiva en buen estado xd', 1500, 1, 1),
(5, 'Lenovo K10 Lemon', 5, 3, 'Compró Lenovo, Modelo K10 Lemon, Tratos Serios y solo en el Área de S.S', 100, 1, 2),
(18, 'eeeee', 4, 4, 'eeeee', 1000, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requerimiento_propuesta`
--

CREATE TABLE `requerimiento_propuesta` (
  `id_requerimiento_propuesta` int(11) NOT NULL,
  `id_requerimiento` int(11) NOT NULL,
  `id_propuesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `requerimiento_propuesta`
--

INSERT INTO `requerimiento_propuesta` (`id_requerimiento_propuesta`, `id_requerimiento`, `id_propuesta`) VALUES
(8, 2, 1),
(11, 2, 33),
(13, 4, 35),
(14, 5, 36),
(15, 5, 37),
(17, 18, 39);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`) VALUES
(1, 'administrador'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `id_tipo_producto` int(11) NOT NULL,
  `tipo_producto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`id_tipo_producto`, `tipo_producto`) VALUES
(3, 'Vehiculos'),
(4, 'Propiedades-Inmuebles'),
(5, 'Teléfonos-Tablets'),
(6, 'Informática y Electrónicos'),
(7, 'Muebles-Oficina'),
(8, 'Moda y Belleza'),
(9, 'Hobbies-Arte-Belleza'),
(10, 'Mascotas-Animales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion`
--

CREATE TABLE `transaccion` (
  `id_transaccion` int(11) NOT NULL,
  `transaccion` varchar(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `transaccion`
--

INSERT INTO `transaccion` (`id_transaccion`, `transaccion`) VALUES
(1, 'Venta'),
(2, 'Compra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(35) COLLATE utf8_spanish2_ci NOT NULL,
  `id_rol` int(11) NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `contacto` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `edad`, `usuario`, `password`, `id_rol`, `correo`, `contacto`) VALUES
(1, 'Rigoberto', 'Hernández', 27, 'rhernandez', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'rigobertohr92@gmail.com', '6420-6009'),
(2, 'Jose Antonio', 'Torres', 19, 'jtorres', '8d5e957f297893487bd98fa830fa6413', 2, 'antontorricm00@gmail.com', '5957-7985'),
(3, 'Harry', 'Potter', 25, 'harringui', '827ccb0eea8a706c4c34a16891f84e7b', 2, 'harry69_potter@gmail.com', '6545-6694');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `propuesta`
--
ALTER TABLE `propuesta`
  ADD PRIMARY KEY (`id_propuesta`),
  ADD KEY `propuesta_estado` (`id_estado`),
  ADD KEY `propuesta_usuario` (`id_usuario`);

--
-- Indices de la tabla `propuesta_imagen`
--
ALTER TABLE `propuesta_imagen`
  ADD PRIMARY KEY (`id_propuesta_imagen`),
  ADD KEY `propuesta_imagen` (`id_imagen`),
  ADD KEY `propuesta_propuesta` (`id_propuesta`);

--
-- Indices de la tabla `requerimiento`
--
ALTER TABLE `requerimiento`
  ADD PRIMARY KEY (`id_requerimiento`),
  ADD KEY `usuario_propuesta` (`id_usuario`),
  ADD KEY `requerimiento_tipo_producto` (`id_tipo_producto`),
  ADD KEY `requerimiento_transaccion` (`id_transaccion`),
  ADD KEY `marca_requerimiento` (`id_marca`);

--
-- Indices de la tabla `requerimiento_propuesta`
--
ALTER TABLE `requerimiento_propuesta`
  ADD PRIMARY KEY (`id_requerimiento_propuesta`),
  ADD KEY `requerimiento_propuesta_propuesta` (`id_propuesta`),
  ADD KEY `requerimiento_propuesta_requerimiento` (`id_requerimiento`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`id_tipo_producto`);

--
-- Indices de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD PRIMARY KEY (`id_transaccion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `usuario_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `propuesta`
--
ALTER TABLE `propuesta`
  MODIFY `id_propuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `propuesta_imagen`
--
ALTER TABLE `propuesta_imagen`
  MODIFY `id_propuesta_imagen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `requerimiento`
--
ALTER TABLE `requerimiento`
  MODIFY `id_requerimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `requerimiento_propuesta`
--
ALTER TABLE `requerimiento_propuesta`
  MODIFY `id_requerimiento_propuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `id_tipo_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  MODIFY `id_transaccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `propuesta`
--
ALTER TABLE `propuesta`
  ADD CONSTRAINT `propuesta_estado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `propuesta_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `propuesta_imagen`
--
ALTER TABLE `propuesta_imagen`
  ADD CONSTRAINT `propuesta_imagen` FOREIGN KEY (`id_imagen`) REFERENCES `imagenes` (`id_imagen`),
  ADD CONSTRAINT `propuesta_propuesta` FOREIGN KEY (`id_propuesta`) REFERENCES `propuesta` (`id_propuesta`);

--
-- Filtros para la tabla `requerimiento`
--
ALTER TABLE `requerimiento`
  ADD CONSTRAINT `marca_requerimiento` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`),
  ADD CONSTRAINT `requerimiento_tipo_producto` FOREIGN KEY (`id_tipo_producto`) REFERENCES `tipo_producto` (`id_tipo_producto`),
  ADD CONSTRAINT `requerimiento_transaccion` FOREIGN KEY (`id_transaccion`) REFERENCES `transaccion` (`id_transaccion`),
  ADD CONSTRAINT `usuario_propuesta` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `usuario_requerimiento` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `requerimiento_propuesta`
--
ALTER TABLE `requerimiento_propuesta`
  ADD CONSTRAINT `requerimiento_propuesta_propuesta` FOREIGN KEY (`id_propuesta`) REFERENCES `propuesta` (`id_propuesta`) ON DELETE CASCADE,
  ADD CONSTRAINT `requerimiento_propuesta_requerimiento` FOREIGN KEY (`id_requerimiento`) REFERENCES `requerimiento` (`id_requerimiento`) ON DELETE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuario_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
