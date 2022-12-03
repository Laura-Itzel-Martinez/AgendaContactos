-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2022 a las 07:14:14
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_categorias`
--

CREATE TABLE `t_categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_categorias`
--

INSERT INTO `t_categorias` (`id_categoria`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'amigos', 'amigos del tec', NULL, '2022-12-03 11:57:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_contactos`
--

CREATE TABLE `t_contactos` (
  `id_contacto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(245) DEFAULT NULL,
  `paterno` varchar(245) DEFAULT NULL,
  `materno` varchar(245) DEFAULT NULL,
  `telefono` varchar(145) DEFAULT NULL,
  `email` varchar(245) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_contactos`
--

INSERT INTO `t_contactos` (`id_contacto`, `id_categoria`, `nombre`, `paterno`, `materno`, `telefono`, `email`, `created_at`, `updated_at`) VALUES
(2, 1, 'Juan', 'Martinez', 'Zaragoza', '5521515112', 'juan@gmail.com', '2022-12-02 20:50:58', '2022-12-03 12:07:11');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_contactos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `v_contactos` (
`id_contacto` int(11)
,`id_categoria` int(11)
,`nombre_categoria` varchar(255)
,`paterno` varchar(245)
,`materno` varchar(245)
,`nombre` varchar(245)
,`telefono` varchar(145)
,`email` varchar(245)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `v_contactos`
--
DROP TABLE IF EXISTS `v_contactos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_contactos`  AS SELECT `contactos`.`id_contacto` AS `id_contacto`, `categorias`.`id_categoria` AS `id_categoria`, `categorias`.`nombre` AS `nombre_categoria`, `contactos`.`paterno` AS `paterno`, `contactos`.`materno` AS `materno`, `contactos`.`nombre` AS `nombre`, `contactos`.`telefono` AS `telefono`, `contactos`.`email` AS `email` FROM (`t_contactos` `contactos` join `t_categorias` `categorias` on(`contactos`.`id_categoria` = `categorias`.`id_categoria`))  ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_categorias`
--
ALTER TABLE `t_categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `t_contactos`
--
ALTER TABLE `t_contactos`
  ADD PRIMARY KEY (`id_contacto`),
  ADD KEY `fkContactoCategoria` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_categorias`
--
ALTER TABLE `t_categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `t_contactos`
--
ALTER TABLE `t_contactos`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t_contactos`
--
ALTER TABLE `t_contactos`
  ADD CONSTRAINT `fkContactoCategoria` FOREIGN KEY (`id_categoria`) REFERENCES `t_categorias` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
