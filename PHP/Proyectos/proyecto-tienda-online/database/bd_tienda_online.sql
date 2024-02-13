-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-03-2021 a las 14:42:42
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_tienda_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Cervezas'),
(2, 'Ginebra'),
(3, 'Licores'),
(4, 'Ron'),
(5, 'Refrescos'),
(6, 'Vino'),
(7, 'Vodka'),
(8, 'Whisky');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(255) NOT NULL,
  `usuario_id` int(255) NOT NULL,
  `asunto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `comentario` text COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `usuario_id`, `asunto`, `comentario`, `fecha`) VALUES
(1, 41, 'Problema de pedido', 'Bueno días,\r\nNo he recibido pedido\r\nUn saludo', '2021-03-03 18:56:43'),
(2, 41, 'Pedido recibido', 'Gracias\r\n', '2021-03-04 00:14:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infogeneral`
--

CREATE TABLE `infogeneral` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `pais` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `provincia` tinyint(4) NOT NULL,
  `localidad` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `cos_postal` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `parking` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `parking_disponible` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `acceso_minusvalidos` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `infogeneral`
--

INSERT INTO `infogeneral` (`id`, `email`, `pais`, `provincia`, `localidad`, `direccion`, `cos_postal`, `parking`, `parking_disponible`, `acceso_minusvalidos`, `telefono`) VALUES
(1, 'thebearbarrel@gmail.com', 'España', 28, 'Alcorcón', 'Av. de Europa 5', '28922', 'Público', 'Disponible', 'Parking minusválidos', '91 655 44 33 22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas_pedidos`
--

CREATE TABLE `lineas_pedidos` (
  `id` int(255) NOT NULL,
  `pedido_id` int(255) NOT NULL,
  `producto_id` int(255) NOT NULL,
  `unidades` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `lineas_pedidos`
--

INSERT INTO `lineas_pedidos` (`id`, `pedido_id`, `producto_id`, `unidades`) VALUES
(27, 49, 10, 3),
(28, 50, 12, 2),
(29, 51, 12, 1),
(30, 52, 12, 1),
(31, 53, 11, 3),
(32, 53, 10, 3),
(33, 54, 10, 3),
(34, 55, 16, 2),
(35, 55, 17, 3),
(36, 56, 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(255) NOT NULL,
  `usuario_id` int(255) NOT NULL,
  `provincia` tinyint(4) NOT NULL,
  `poblacion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `tarjeta` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `mes` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `ano` varchar(4) COLLATE utf8_spanish2_ci NOT NULL,
  `coste` float(200,2) NOT NULL,
  `estado` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `usuario_id`, `provincia`, `poblacion`, `direccion`, `telefono`, `tarjeta`, `mes`, `ano`, `coste`, `estado`, `fecha`) VALUES
(49, 41, 28, 'Alcorcón', 'C/ mayor 34,  3ºD', '644111111', '2222222222', '1', '2022', 2.97, 'seded', '2021-03-02 13:44:43'),
(50, 41, 28, 'Alcorcón', 'C/ mayor 34,  3ºD', '644111111', '2222222222', '2', '2022', 39.98, 'confirm', '2021-03-02 04:12:43'),
(51, 41, 28, 'Alcorcón', 'C/ mayor 34,  3ºD', '644111111', '2222222222', '2', '2022', 19.99, 'ready', '2021-03-02 13:44:59'),
(52, 41, 28, 'Alcorcón', 'C/ mayor 34,  3ºD', '644111111', '2222222222', '2', '2022', 19.99, 'ready', '2021-03-02 13:45:09'),
(53, 41, 28, 'Alcorcón', 'C/ mayor 34,  3ºD', '644111111', '2222222222', '2', '2022', 62.94, 'preparation', '2021-03-02 13:45:16'),
(54, 41, 28, 'Alcorcón', 'C/ mayor 34,  3ºD', '644111111', '2222222222', '2', '2022', 2.97, 'confirm', '2021-03-02 04:22:17'),
(55, 46, 28, 'Alcorcón', 'C/ mayor sn', '644 11 11 11', '1111111111', '2', '2022', 29.48, 'confirm', '2021-03-04 14:27:22'),
(56, 46, 28, 'Alcorcón', 'C/ mayor sn', '644 11 11 11', '1111111111', '2', '2022', 11.99, 'confirm', '2021-03-04 14:29:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(255) NOT NULL,
  `categoria_id` int(255) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `precio` float(100,2) NOT NULL,
  `stock` int(255) NOT NULL,
  `oferta` varchar(2) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `imagen` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `categoria_id`, `nombre`, `descripcion`, `precio`, `stock`, `oferta`, `fecha`, `imagen`) VALUES
(10, 1, 'Duff p-6', 'Cerveza rubia - americana - pack de 6', 5.99, 37, NULL, '2021-03-04 13:29:04', 'duff.jpg'),
(11, 4, 'Barcelo', 'Ron dominicano - extra añejo', 19.99, 44, NULL, '2021-03-02 03:19:08', 'barcelo.jpg'),
(12, 2, 'Bombay ', 'London dry gin', 19.99, 30, NULL, '2021-03-02 03:24:34', 'Bombay.jpg'),
(13, 8, 'Jack Daniels', 'Tennesse Whiskie', 19.99, 30, NULL, '2021-03-02 03:24:50', 'jackDaniels.jpg'),
(14, 7, 'Absolut', 'Vodka Absolut - finlandia', 16.95, 30, NULL, '2021-03-02 03:24:15', 'absolut.jpg'),
(15, 1, 'Bomonti p-6', 'Cerveza negra - italia pack de 6', 6.99, 50, NULL, '2021-03-02 12:47:13', 'bomonti.jpg'),
(16, 1, 'Fosters', 'Cerveza rubia - australia - pack de 6', 7.99, 48, NULL, '2021-03-04 13:27:23', 'fosters.jpg'),
(17, 6, 'Vino tinto', 'Vino tinto - cosecha privada - Madrid', 2.50, 47, NULL, '2021-03-04 13:27:23', 'vinoTinto.jpg'),
(18, 1, 'Miller p-6', 'Cerveza - americana- pack de 6', 7.99, 30, NULL, '2021-03-02 12:50:27', 'miller.jpg'),
(19, 5, 'Pepsi p-6', 'Refresco pepsi - pack de 6', 2.49, 50, NULL, '2021-03-02 12:53:46', 'pepsi.jpg'),
(20, 3, 'Campari p-6', 'Licor - Bitter campari - pack de 6', 3.99, 30, NULL, '2021-03-02 12:55:39', 'campari.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `codProvincia` tinyint(4) NOT NULL,
  `provincia` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`codProvincia`, `provincia`) VALUES
(1, 'Araba/Álava'),
(2, 'Albacete'),
(3, 'Alicante/Alacant'),
(4, 'Almería'),
(5, 'Ávila'),
(6, 'Badajoz'),
(7, 'Balears, Illes'),
(8, 'Barcelona'),
(9, 'Burgos'),
(10, 'Cáceres'),
(11, 'Cádiz'),
(12, 'Castellón/Castelló'),
(13, 'Ciudad Real'),
(14, 'Córdoba'),
(15, 'Coruña, A'),
(16, 'Cuenca'),
(17, 'Girona'),
(18, 'Granada'),
(19, 'Guadalajara'),
(20, 'Gipuzkoa'),
(21, 'Huelva'),
(22, 'Huesca'),
(23, 'Jaén'),
(24, 'León'),
(25, 'Lleida'),
(26, 'Rioja, La'),
(27, 'Lugo'),
(28, 'Madrid'),
(29, 'Málaga'),
(30, 'Murcia'),
(31, 'Navarra'),
(32, 'Ourense'),
(33, 'Asturias'),
(34, 'Palencia'),
(35, 'Palmas, Las'),
(36, 'Pontevedra'),
(37, 'Salamanca'),
(38, 'Santa Cruz de Tenerife'),
(39, 'Cantabria'),
(40, 'Segovia'),
(41, 'Sevilla'),
(42, 'Soria'),
(43, 'Tarragona'),
(44, 'Teruel'),
(45, 'Toledo'),
(46, 'Valencia/Valéncia'),
(47, 'Valladolid'),
(48, 'Bizkaia'),
(49, 'Zamora'),
(50, 'Zaragoza'),
(51, 'Ceuta'),
(52, 'Melilla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` tinyint(1) NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `tipo`) VALUES
(1, 'administrador'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `rol` tinyint(1) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `rol`, `fecha`) VALUES
(39, 'Pepe', 'Lopez', 'pepe@theBearBarrel.com', '$2y$04$k7F8ZZNipXcpNofEGLbaneHniBu6QzhPdR9b5bjutC0sHjlA6b442', 1, '2021-02-21 15:05:17'),
(40, 'Luis', 'Alvarez', 'luis@luis.com', '$2y$04$v3MuJ8Cmn2TFyeMEi7cER.uP4BYmzr6JqBZzMZEdaCEIC8Xq5F4L2', 2, '2021-02-21 15:06:11'),
(41, 'Ana', 'Aguilar', 'ana@ana.com', '$2y$04$lO62A6tXpmgFjXJmuRj8qebKe9ScBwpSt5btHQIjsG2lFytFh0znK', 2, '2021-02-23 00:36:27'),
(42, 'Marta', 'Ruiz', 'marta@marta.com', '$2y$04$/MX/ymKDy8NlebUQ4qRdn.Q5GS9DiUoIYhX27LsbsEUI2w4BEs6fu', 2, '2021-02-23 00:59:50'),
(45, 'Javier', 'Mejía', 'javier@javier.com', '$2y$04$q7/OjeU3BvIpUFV46XAW3OSkNnuoSQh0oCoGEjQxFNSHEvmCkNZcK', 2, '2021-02-23 01:03:01'),
(46, 'Alberto ', 'Montealegre', 'alberto@alberto.com', '$2y$04$L5uPxwk5ru6ptJwQgsWAPOOW/ZL882GNyJhjYKkeg0PoyKJb25MqW', 2, '2021-03-04 14:12:59');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_com_uid` (`usuario_id`);

--
-- Indices de la tabla `infogeneral`
--
ALTER TABLE `infogeneral`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_inf_pro` (`provincia`);

--
-- Indices de la tabla `lineas_pedidos`
--
ALTER TABLE `lineas_pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lineas_pedido` (`pedido_id`),
  ADD KEY `fk_lineas_producto` (`producto_id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pedidos_usuario` (`usuario_id`),
  ADD KEY `fk_ped_pro` (`provincia`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cat_pro` (`categoria_id`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`codProvincia`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_email` (`email`),
  ADD KEY `fk_rol_rol` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `infogeneral`
--
ALTER TABLE `infogeneral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `lineas_pedidos`
--
ALTER TABLE `lineas_pedidos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_com_uid` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `infogeneral`
--
ALTER TABLE `infogeneral`
  ADD CONSTRAINT `fk_inf_pro` FOREIGN KEY (`provincia`) REFERENCES `provincias` (`codProvincia`);

--
-- Filtros para la tabla `lineas_pedidos`
--
ALTER TABLE `lineas_pedidos`
  ADD CONSTRAINT `fk_lineas_pedido` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`),
  ADD CONSTRAINT `fk_lineas_producto` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_ped_pro` FOREIGN KEY (`provincia`) REFERENCES `provincias` (`codProvincia`),
  ADD CONSTRAINT `fk_pedidos_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_cat_pro` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_rol_rol` FOREIGN KEY (`rol`) REFERENCES `rol` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
