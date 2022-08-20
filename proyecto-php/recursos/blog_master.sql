-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2022 a las 04:09:34
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog_master`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Acci?n'),
(2, 'Aventura'),
(3, 'Romance'),
(4, 'Terror'),
(5, 'Ciencia Ficcion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` mediumtext DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id`, `usuario_id`, `categoria_id`, `titulo`, `descripcion`, `fecha`) VALUES
(6, 1, 3, 'Pijacorta', 'Pelicula chimba', '2019-06-25'),
(7, 1, 2, 'Pijacortaa', 'Pelicula chimbaa', '2022-06-13'),
(8, 3, 2, 'Almamarcelagoso', 'Pelicula re chimba', '2020-06-30'),
(10, 6, 1, 'Paraquito', 'Pelicula horrible', '2020-03-05'),
(11, 6, 2, 'Paraquitos', 'Pelicula recontrahorrible', '2022-06-13'),
(12, 2, 4, 'Petro God', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2021-10-23'),
(13, 2, 3, 'Petro Godzilla', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2022-06-13'),
(14, 6, 4, 'Aiwantu', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2021-10-31'),
(15, 6, 1, 'Iwachu', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2022-06-13'),
(16, 7, 1, 'Petro Presidente', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2022-06-14'),
(17, 13, 2, 'Nuevo Video Juego', 'El juego del año, chamo', '2022-07-31');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `seleccionar_todo`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `seleccionar_todo` (
`id` int(11)
,`usuario_id` int(11)
,`categoria_id` int(11)
,`titulo` varchar(255)
,`descripcion` mediumtext
,`fecha` date
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `fecha`) VALUES
(1, 'Besame', 'Lasnalgas', 'picos@sapos.com', '123', '2022-05-27'),
(2, 'Albajad', 'Mamad', 'holi@sapos.com', '123', '2022-06-20'),
(3, 'Eduardo', 'Vergalarga', 'aja@sapos.com', '123', '2022-06-11'),
(6, 'Elpi', 'Jalarga', 'aja@saposs.com', '1234', '2019-07-20'),
(7, 'admin', 'admin', 'admin@admin', '123', '2022-06-13'),
(8, 'Cristian', 'Cardona', 'cc1001447@gmail.com', '$2y$04$f/VyqKIrecEKmzdRP5PKi.xuM0N5SVZwwr4VvBxDcVaSguuQmrZ1a', '2022-07-20'),
(10, 'Benito', 'Camelas', 'camelastodas@gmail.com', '$2y$04$ebs5rKr3gF7w0St16.L4COdgj30FNhFnZ153tP8Bv2zW5.bv4lod.', '2022-07-20'),
(11, 'Juan', 'Carlos', 'big@gmail.com', '$2y$04$JR0uGVpwY6IAoCKdulDQDOHyuia6zNqszVPqDTJZYcTBLTrgsaXle', '2022-07-20'),
(12, 'Roberto\'', 'Mamerto', 'uribe@gmail.com', '$2y$04$gTeVodZs0PyKGyh1so2W0OO/OCaxzRsl/vLengi0tjYyom2Ojl3Zq', '2022-07-20'),
(13, 'ejemplooo', 'ejemplo', 'ejemplo@ejemplo.com', '$2y$04$Wzk.uZcPwM9b8upVbE.jsOAiekC09aeBhOe9j630.DTfJUjpMAFmS', '2022-07-20');

-- --------------------------------------------------------

--
-- Estructura para la vista `seleccionar_todo`
--
DROP TABLE IF EXISTS `seleccionar_todo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `seleccionar_todo`  AS SELECT `entradas`.`id` AS `id`, `entradas`.`usuario_id` AS `usuario_id`, `entradas`.`categoria_id` AS `categoria_id`, `entradas`.`titulo` AS `titulo`, `entradas`.`descripcion` AS `descripcion`, `entradas`.`fecha` AS `fecha` FROM `entradas` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_entradas_usuarios` (`usuario_id`),
  ADD KEY `FK_entradas_categorias` (`categoria_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UQ_email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `FK_entradas_categorias` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `FK_entradas_usuarios` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
