-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-04-2019 a las 05:55:48
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eventosImer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ei_carrera`
--

CREATE TABLE `ei_carrera` (
  `ca_id` int(4) NOT NULL,
  `ca_nombre` varchar(250) NOT NULL,
  `ca_fechaRealizacion` date NOT NULL,
  `ca_fechaLimiteInscripcion` date NOT NULL,
  `ca_categoria` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ei_carrera`
--

INSERT INTO `ei_carrera` (`ca_id`, `ca_nombre`, `ca_fechaRealizacion`, `ca_fechaLimiteInscripcion`, `ca_categoria`) VALUES
(1, 'Carrera de la mujer', '2019-04-27', '2019-04-26', 1),
(4, 'prueba', '2019-04-28', '2019-04-27', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ei_genero`
--

CREATE TABLE `ei_genero` (
  `ge_id` int(11) NOT NULL,
  `ge_nombre` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ei_inscripcion`
--

CREATE TABLE `ei_inscripcion` (
  `ins_id` int(11) NOT NULL,
  `ins_carrera` int(4) NOT NULL,
  `ins_rama` int(2) NOT NULL,
  `ins_usuario` int(11) NOT NULL,
  `ins_equipo` varchar(80) NOT NULL,
  `ins_eps` varchar(80) NOT NULL,
  `ins_nombreContactoEmergencia` varchar(80) NOT NULL,
  `ins_telefonoContactoEmergencia` varchar(20) NOT NULL,
  `ins_tallaCamisa` varchar(2) NOT NULL,
  `ins_terminos` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ei_inscripcion`
--

INSERT INTO `ei_inscripcion` (`ins_id`, `ins_carrera`, `ins_rama`, `ins_usuario`, `ins_equipo`, `ins_eps`, `ins_nombreContactoEmergencia`, `ins_telefonoContactoEmergencia`, `ins_tallaCamisa`, `ins_terminos`) VALUES
(1, 1, 13, 1234567890, 'Los Ganadores', 'Sura', 'Juan', 'Ossa', 'M', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ei_pagos`
--

CREATE TABLE `ei_pagos` (
  `pa_id` int(11) NOT NULL,
  `pa_inscripcion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ei_ramas`
--

CREATE TABLE `ei_ramas` (
  `rm_id` int(11) NOT NULL,
  `rm_genero` int(1) NOT NULL,
  `rm_categoria` int(2) NOT NULL,
  `rm_subcat` int(1) NOT NULL,
  `rm_nombre` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ei_ramas`
--

INSERT INTO `ei_ramas` (`rm_id`, `rm_genero`, `rm_categoria`, `rm_subcat`, `rm_nombre`) VALUES
(1, 1, 21, 0, 'Elite de 20 a 39'),
(2, 1, 21, 0, 'Discapacitado'),
(3, 1, 21, 0, 'Estimulos'),
(4, 1, 21, 1, 'Veteranos 40 a 49'),
(5, 1, 21, 1, 'Veteranos 50 o mas'),
(6, 2, 21, 0, 'Elite 20 a 39'),
(7, 2, 21, 0, 'Estimulos'),
(8, 2, 21, 0, 'Discapacitado'),
(9, 2, 21, 0, 'Veteranos'),
(10, 2, 10, 0, 'Abierta'),
(11, 2, 5, 0, 'Abierta'),
(12, 1, 10, 0, 'Abierta'),
(13, 1, 5, 0, 'Abierta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ei_rol`
--

CREATE TABLE `ei_rol` (
  `rol_id` int(11) NOT NULL,
  `rol_nombre` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ei_rol`
--

INSERT INTO `ei_rol` (`rol_id`, `rol_nombre`) VALUES
(1, 'Corredor'),
(2, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ei_tipoDocumento`
--

CREATE TABLE `ei_tipoDocumento` (
  `td_id` int(11) NOT NULL,
  `td_nombre` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ei_tipoSangre`
--

CREATE TABLE `ei_tipoSangre` (
  `ts_id` int(11) NOT NULL,
  `ts_nombre` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ei_usuarios`
--

CREATE TABLE `ei_usuarios` (
  `usu_id` int(11) NOT NULL,
  `usu_tipoDocumento` int(1) NOT NULL,
  `usu_documento` varchar(25) NOT NULL,
  `usu_nombres` varchar(500) NOT NULL,
  `usu_apellidos` varchar(500) NOT NULL,
  `usu_genero` int(1) NOT NULL,
  `usu_fechaNacimiento` date NOT NULL,
  `usu_tipoSangre` int(1) NOT NULL,
  `usu_paisResidencia` varchar(40) NOT NULL,
  `usu_ciudadResidencia` varchar(40) NOT NULL,
  `usu_direccionResidencia` varchar(40) NOT NULL,
  `usu_celular` varchar(20) NOT NULL,
  `usu_correoElectronico` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ei_usuarios`
--

INSERT INTO `ei_usuarios` (`usu_id`, `usu_tipoDocumento`, `usu_documento`, `usu_nombres`, `usu_apellidos`, `usu_genero`, `usu_fechaNacimiento`, `usu_tipoSangre`, `usu_paisResidencia`, `usu_ciudadResidencia`, `usu_direccionResidencia`, `usu_celular`, `usu_correoElectronico`) VALUES
(1, 1, '1234567890', 'Maria', 'Orozco', 2, '1993-12-18', 1, 'Colombia', 'La Ceja', 'Calle 24', ' 3146780987', 'marifeorozco.dom@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ei_usuarioXRol`
--

CREATE TABLE `ei_usuarioXRol` (
  `uxr_id` int(11) NOT NULL,
  `uxr_rol` varchar(25) NOT NULL,
  `uxr_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ei_usuarioXRol`
--

INSERT INTO `ei_usuarioXRol` (`uxr_id`, `uxr_rol`, `uxr_usuario`) VALUES
(1, '1', 1053831204),
(2, '1', 1234567890),
(3, '1', 103757673),
(4, '1', 656757),
(5, '1', 89786),
(6, '1', 1234567890),
(7, '1', 1234567890),
(8, '1', 0),
(9, '1', 1234567890),
(10, '1', 1234567890);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ei_carrera`
--
ALTER TABLE `ei_carrera`
  ADD PRIMARY KEY (`ca_id`),
  ADD KEY `ca_categoria` (`ca_categoria`);

--
-- Indices de la tabla `ei_genero`
--
ALTER TABLE `ei_genero`
  ADD PRIMARY KEY (`ge_id`),
  ADD UNIQUE KEY `ge_nombre` (`ge_nombre`);

--
-- Indices de la tabla `ei_inscripcion`
--
ALTER TABLE `ei_inscripcion`
  ADD PRIMARY KEY (`ins_id`,`ins_carrera`,`ins_usuario`),
  ADD KEY `ins_carrera` (`ins_carrera`),
  ADD KEY `ins_usuario` (`ins_usuario`);

--
-- Indices de la tabla `ei_pagos`
--
ALTER TABLE `ei_pagos`
  ADD PRIMARY KEY (`pa_id`,`pa_inscripcion`),
  ADD KEY `pa_inscripcion` (`pa_inscripcion`);

--
-- Indices de la tabla `ei_ramas`
--
ALTER TABLE `ei_ramas`
  ADD PRIMARY KEY (`rm_id`,`rm_genero`,`rm_categoria`,`rm_subcat`,`rm_nombre`);

--
-- Indices de la tabla `ei_rol`
--
ALTER TABLE `ei_rol`
  ADD PRIMARY KEY (`rol_id`,`rol_nombre`);

--
-- Indices de la tabla `ei_tipoDocumento`
--
ALTER TABLE `ei_tipoDocumento`
  ADD PRIMARY KEY (`td_id`),
  ADD UNIQUE KEY `td_nombre` (`td_nombre`);

--
-- Indices de la tabla `ei_tipoSangre`
--
ALTER TABLE `ei_tipoSangre`
  ADD PRIMARY KEY (`ts_id`),
  ADD UNIQUE KEY `ts_nombre` (`ts_nombre`);

--
-- Indices de la tabla `ei_usuarios`
--
ALTER TABLE `ei_usuarios`
  ADD PRIMARY KEY (`usu_id`),
  ADD UNIQUE KEY `usu_documento` (`usu_documento`),
  ADD UNIQUE KEY `usu_correoElectronico` (`usu_correoElectronico`),
  ADD KEY `usu_tipoDocumento` (`usu_tipoDocumento`),
  ADD KEY `usu_genero` (`usu_genero`),
  ADD KEY `usu_tipoSangre` (`usu_tipoSangre`),
  ADD KEY `usu_tipoDocumento_2` (`usu_tipoDocumento`);

--
-- Indices de la tabla `ei_usuarioXRol`
--
ALTER TABLE `ei_usuarioXRol`
  ADD PRIMARY KEY (`uxr_id`,`uxr_rol`,`uxr_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ei_carrera`
--
ALTER TABLE `ei_carrera`
  MODIFY `ca_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ei_genero`
--
ALTER TABLE `ei_genero`
  MODIFY `ge_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ei_inscripcion`
--
ALTER TABLE `ei_inscripcion`
  MODIFY `ins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ei_pagos`
--
ALTER TABLE `ei_pagos`
  MODIFY `pa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ei_ramas`
--
ALTER TABLE `ei_ramas`
  MODIFY `rm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `ei_rol`
--
ALTER TABLE `ei_rol`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ei_tipoDocumento`
--
ALTER TABLE `ei_tipoDocumento`
  MODIFY `td_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ei_tipoSangre`
--
ALTER TABLE `ei_tipoSangre`
  MODIFY `ts_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ei_usuarios`
--
ALTER TABLE `ei_usuarios`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ei_usuarioXRol`
--
ALTER TABLE `ei_usuarioXRol`
  MODIFY `uxr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ei_carrera`
--
ALTER TABLE `ei_carrera`
  ADD CONSTRAINT `ei_carrera_ibfk_1` FOREIGN KEY (`ca_categoria`) REFERENCES `ei_categoria` (`ca_id`);

--
-- Filtros para la tabla `ei_pagos`
--
ALTER TABLE `ei_pagos`
  ADD CONSTRAINT `ei_pagos_ibfk_1` FOREIGN KEY (`pa_inscripcion`) REFERENCES `ei_inscripcion` (`ins_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
