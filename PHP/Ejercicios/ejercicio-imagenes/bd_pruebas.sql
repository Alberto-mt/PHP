-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-01-2021 a las 22:31:41
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
-- Base de datos: `bd_pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `departamento` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `edad` tinyint(4) NOT NULL,
  `foto` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `apellidos`, `direccion`, `telefono`, `departamento`, `email`, `edad`, `foto`) VALUES
(1, 'Pepe', 'Perez Lopez', 'Dir-1', '666666661', 'derp-1', 'pepe@pepe.es', 20, 'chico.png'),
(2, 'Luis', 'Ruiz Lopez', 'Dir-2', '666666662', 'derp-2', 'luis@luis.es', 20, 'chico.png'),
(3, 'Marta', 'Ruiz Sanz', 'Dir-3', '666666663', 'derp-2', 'marta@marta.es', 20, 'chica.png'),
(4, 'Esther', 'Sanchez Mejía', 'Dir-4', '666666664', 'derp-1', 'esther@esther.es', 20, 'chica.png'),
(6, 'Sergio', 'Estebez Salas', 'Dir-6', '666666666', 'dep-6', 'serigio@sergio.es', 30, 'chico.png'),
(7, 'Cesar', 'Roldan Contreras', 'Dir-7', '666666667', 'dep-7', 'cesar@cesar.com', 30, 'chico.png'),
(8, 'Javier', 'Aguilar Santos', 'Dir-8', '666666668', 'dep-8', 'javier@javier.com', 30, 'chico.png'),
(12, 'Silvia', 'Sanchez Cespede', 'Dir9', '666666669', 'dep-1', 'antonio@antonio.com', 39, 'chica.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
