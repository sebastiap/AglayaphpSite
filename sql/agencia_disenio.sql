-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2022 a las 02:03:11
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agencia_disenio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `ID` tinyint(3) UNSIGNED NOT NULL,
  `NOMBRE_CAT` varchar(20) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`ID`, `NOMBRE_CAT`) VALUES
(1, 'Redes'),
(2, 'Gráfica'),
(3, 'Audiovisual'),
(4, '3D'),
(5, 'Web'),
(6, 'App');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `ID` tinyint(3) UNSIGNED NOT NULL,
  `CONTENIDO` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `ID_PRODUCCION` tinyint(3) UNSIGNED DEFAULT NULL,
  `ID_USUARIO` tinyint(3) UNSIGNED DEFAULT NULL,
  `PUNTAJE` tinyint(3) UNSIGNED DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`ID`, `CONTENIDO`, `ID_PRODUCCION`, `ID_USUARIO`, `PUNTAJE`) VALUES
(1, 'NANANANA, es Japón LITERAL', 1, 4, 3),
(2, 'AMEEEEE, me encanta mario bros :3', 2, 5, 5),
(3, 'Tremendo, nunca supe de donde se originaba el fernet! Alto laburo!', 3, 6, 3),
(4, 'La estetica es muuy única, me encanto como te quedó!', 4, 1, 5),
(5, 'Unas ganas de que esa app exista, la usaria todos los dias BREO', 5, 2, 4),
(6, 'Muy fluidas las animaciones, y me re gusta la paleta de colores!', 6, 3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producciones`
--

CREATE TABLE `producciones` (
  `ID` tinyint(3) UNSIGNED NOT NULL,
  `NOMBRE_PRODUCCION` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `URLIMAGEN` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `ID_CATEGORIA` tinyint(3) UNSIGNED DEFAULT NULL,
  `FECHA_ASIGNACION` timestamp NULL DEFAULT NULL,
  `FECHA_ENTREGA` timestamp NULL DEFAULT NULL,
  `ID_USUARIO` tinyint(3) UNSIGNED DEFAULT NULL,
  `PUNTAJE` tinyint(3) UNSIGNED DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `producciones`
--

INSERT INTO `producciones` (`ID`, `NOMBRE_PRODUCCION`, `URLIMAGEN`, `ID_CATEGORIA`, `FECHA_ASIGNACION`, `FECHA_ENTREGA`, `ID_USUARIO`, `PUNTAJE`) VALUES
(1, 'Animacion Japon', 'japon', 4, '2022-05-01 13:00:00', '2022-05-15 13:00:00', 2, 3),
(2, 'Animacion Mario Bros', 'mario', 4, '2022-04-27 13:00:00', '2022-05-11 13:00:00', 1, 5),
(3, 'El origen del Fernet', 'ciudad', 3, '2022-04-29 13:00:00', '2022-05-13 13:00:00', 2, 3),
(4, 'Pagina Gerencia Ambiental', 'eco', 5, '2022-04-25 13:00:00', '2022-05-09 13:00:00', 3, 5),
(5, 'Gamepool App', 'gameloop', 6, '2022-05-17 13:00:00', '2022-05-31 13:00:00', 1, 4),
(6, 'Post Redes Banco Macro', 'eventos', 1, '2022-05-02 11:00:00', '2022-05-15 11:00:00', 2, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` tinyint(3) UNSIGNED NOT NULL,
  `NOMBRE` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `MAIL` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `PASSWORD` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `USER` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `CATEGORIA` varchar(20) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `NOMBRE`, `MAIL`, `PASSWORD`, `USER`, `CATEGORIA`) VALUES
(1, 'Gonzalo Hernandez', 'gonhernandez98@gmail.com', 'otakuamoroso99', 'TRIPL', 'Empleado'),
(2, 'Lucia Tercic', 'lucia.tercic@hotmail.com', 'scarletwitch', 'Scar', 'Empleado'),
(3, 'Romina Montes de Oca', 'romimontes7@gmail.com', 'teamonaruto', 'Roma', 'Empleado'),
(4, 'Facundo Hernandez', 'facuuhernandez20@gmail.com', 'rengokugod', 'Rengoku', 'Cliente'),
(5, 'Rocio Tercic', 'ro.tercic.97@gmail.com', 'lamascapa97', 'Roro', 'Cliente'),
(6, 'Rodrigo Hernandez', 'J074290@gmail.com', 'sasukeloveuwu', 'J074', 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_comentan`
--

CREATE TABLE `usuarios_comentan` (
  `ID` tinyint(3) UNSIGNED NOT NULL,
  `ID_USUARIO` tinyint(3) UNSIGNED DEFAULT NULL,
  `ID_COMENTARIO` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `usuarios_comentan`
--

INSERT INTO `usuarios_comentan` (`ID`, `ID_USUARIO`, `ID_COMENTARIO`) VALUES
(1, 4, 1),
(2, 5, 2),
(3, 6, 3),
(4, 1, 4),
(5, 2, 5),
(6, 3, 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`ID`) USING BTREE,
  ADD KEY `USUARIO_COMENTARIO` (`ID_USUARIO`) USING BTREE,
  ADD KEY `PRODUCCIONES_COMENTARIOS` (`ID_PRODUCCION`) USING BTREE;

--
-- Indices de la tabla `producciones`
--
ALTER TABLE `producciones`
  ADD PRIMARY KEY (`ID`) USING BTREE,
  ADD KEY `STAFF_CREADOR` (`ID_USUARIO`) USING BTREE,
  ADD KEY `CATEGORIA_PRODUCCION` (`ID_CATEGORIA`) USING BTREE;

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indices de la tabla `usuarios_comentan`
--
ALTER TABLE `usuarios_comentan`
  ADD PRIMARY KEY (`ID`) USING BTREE,
  ADD KEY `USUARIO_COMENTA` (`ID_USUARIO`) USING BTREE,
  ADD KEY `COMENTARIO_DE_USUARIO` (`ID_COMENTARIO`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `ID` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `ID` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `producciones`
--
ALTER TABLE `producciones`
  MODIFY `ID` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `usuarios_comentan`
--
ALTER TABLE `usuarios_comentan`
  MODIFY `ID` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `PRODUCCIONES_COMENTARIOS` FOREIGN KEY (`ID_PRODUCCION`) REFERENCES `producciones` (`ID`),
  ADD CONSTRAINT `USUARIO_COMENTARIO` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID`);

--
-- Filtros para la tabla `producciones`
--
ALTER TABLE `producciones`
  ADD CONSTRAINT `CATEGORIA_PRODUCCION` FOREIGN KEY (`ID_CATEGORIA`) REFERENCES `categorias` (`ID`),
  ADD CONSTRAINT `STAFF_CREADOR` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID`);

--
-- Filtros para la tabla `usuarios_comentan`
--
ALTER TABLE `usuarios_comentan`
  ADD CONSTRAINT `COMENTARIO_DE_USUARIO` FOREIGN KEY (`ID_COMENTARIO`) REFERENCES `comentarios` (`ID`),
  ADD CONSTRAINT `USUARIO_COMENTA` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
