-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2020 a las 01:35:54
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `id` int(255) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Acción'),
(2, 'Rol'),
(3, 'Deportes'),
(4, 'Plataformas'),
(5, 'Terror');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `id` int(255) NOT NULL,
  `usuario_id` int(255) NOT NULL,
  `categoria_id` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` mediumtext DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id`, `usuario_id`, `categoria_id`, `titulo`, `descripcion`, `fecha`) VALUES
(1, 1, 1, 'Novedades', 'Review del GTA 5Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc massa arcu, fringilla ut massa eu, suscipit ultricies dolor. Praesent ornare vestibulum massa. Etiam luctus commodo metus at sollicitudin. Etiam consectetur pretium maximus. Curabitur luctus euismod ligula aliquam lacinia. Nullam vel velit ut nunc vulputate sodales in ac sapien. Morbi mollis purus vitae turpis tincidunt vestibulum. Aliquam nec lacus vel velit sodales condimentum. Maecenas fermentum condimentum sem, eu ullamcorper nibh elementum vestibulum. Phasellus et venenatis diam, eleifend posuere tellus.', '2020-03-06'),
(2, 2, 3, 'Review de LOL Online', 'Todo Sobre el LOLLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc massa arcu, fringilla ut massa eu, suscipit ultricies dolor. Praesent ornare vestibulum massa. Etiam luctus commodo metus at sollicitudin. Etiam consectetur pretium maximus. Curabitur luctus euismod ligula aliquam lacinia. Nullam vel velit ut nunc vulputate sodales in ac sapien. Morbi mollis purus vitae turpis tincidunt vestibulum. Aliquam nec lacus vel velit sodales condimentum. Maecenas fermentum condimentum sem, eu ullamcorper nibh elementum vestibulum. Phasellus et venenatis diam, eleifend posuere tellus.', '2020-03-06'),
(3, 6, 2, 'Principe de Persia', 'Todo Sobre el principeLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc massa arcu, fringilla ut massa eu, suscipit ultricies dolor. Praesent ornare vestibulum massa. Etiam luctus commodo metus at sollicitudin. Etiam consectetur pretium maximus. Curabitur luctus euismod ligula aliquam lacinia. Nullam vel velit ut nunc vulputate sodales in ac sapien. Morbi mollis purus vitae turpis tincidunt vestibulum. Aliquam nec lacus vel velit sodales condimentum. Maecenas fermentum condimentum sem, eu ullamcorper nibh elementum vestibulum. Phasellus et venenatis diam, eleifend posuere tellus.', '2020-03-06'),
(4, 2, 3, 'Review de DOTA', 'Todo Sobre el DOTALorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc massa arcu, fringilla ut massa eu, suscipit ultricies dolor. Praesent ornare vestibulum massa. Etiam luctus commodo metus at sollicitudin. Etiam consectetur pretium maximus. Curabitur luctus euismod ligula aliquam lacinia. Nullam vel velit ut nunc vulputate sodales in ac sapien. Morbi mollis purus vitae turpis tincidunt vestibulum. Aliquam nec lacus vel velit sodales condimentum. Maecenas fermentum condimentum sem, eu ullamcorper nibh elementum vestibulum. Phasellus et venenatis diam, eleifend posuere tellus.', '2020-03-06'),
(7, 7, 1, 'PES 2020', 'Todo PESLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc massa arcu, fringilla ut massa eu, suscipit ultricies dolor. Praesent ornare vestibulum massa. Etiam luctus commodo metus at sollicitudin. Etiam consectetur pretium maximus. Curabitur luctus euismod ligula aliquam lacinia. Nullam vel velit ut nunc vulputate sodales in ac sapien. Morbi mollis purus vitae turpis tincidunt vestibulum. Aliquam nec lacus vel velit sodales condimentum. Maecenas fermentum condimentum sem, eu ullamcorper nibh elementum vestibulum. Phasellus et venenatis diam, eleifend posuere tellus.', '2020-03-06'),
(8, 8, 4, 'Crash Car', 'Todo Sobre CrashLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc massa arcu, fringilla ut massa eu, suscipit ultricies dolor. Praesent ornare vestibulum massa. Etiam luctus commodo metus at sollicitudin. Etiam consectetur pretium maximus. Curabitur luctus euismod ligula aliquam lacinia. Nullam vel velit ut nunc vulputate sodales in ac sapien. Morbi mollis purus vitae turpis tincidunt vestibulum. Aliquam nec lacus vel velit sodales condimentum. Maecenas fermentum condimentum sem, eu ullamcorper nibh elementum vestibulum. Phasellus et venenatis diam, eleifend posuere tellus.', '2020-03-06'),
(9, 9, 3, 'Crash Bandicot', 'Todo Sobre CrashLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc massa arcu, fringilla ut massa eu, suscipit ultricies dolor. Praesent ornare vestibulum massa. Etiam luctus commodo metus at sollicitudin. Etiam consectetur pretium maximus. Curabitur luctus euismod ligula aliquam lacinia. Nullam vel velit ut nunc vulputate sodales in ac sapien. Morbi mollis purus vitae turpis tincidunt vestibulum. Aliquam nec lacus vel velit sodales condimentum. Maecenas fermentum condimentum sem, eu ullamcorper nibh elementum vestibulum. Phasellus et venenatis diam, eleifend posuere tellus.', '2020-03-06'),
(10, 10, 4, 'Tony hawk', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc massa arcu, fringilla ut massa eu, suscipit ultricies dolor. Praesent ornare vestibulum massa. Etiam luctus commodo metus at sollicitudin. Etiam consectetur pretium maximus. Curabitur luctus euismod ligula aliquam lacinia. Nullam vel velit ut nunc vulputate sodales in ac sapien. Morbi mollis purus vitae turpis tincidunt vestibulum. Aliquam nec lacus vel velit sodales condimentum. Maecenas fermentum condimentum sem, eu ullamcorper nibh elementum vestibulum. Phasellus et venenatis diam, eleifend posuere tellus.', '2020-03-06'),
(13, 22, 5, 'Resident Evil', 'wajajajaa', '2020-03-07'),
(15, 22, 5, 'La casa matusita 5', 'dasdasdsadsada', '2020-03-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `fecha`) VALUES
(1, 'harold', 'alfaro', 'harold13_98@hotmail.com', '', '2020-03-05'),
(2, 'harold', 'alfaro', 'david123@gmail.com', '', '2020-03-05'),
(6, 'harold', 'alfaro', 'harold@harold.com', '', '2020-03-05'),
(7, 'gabriel', 'rios', 'gaboma@gmail.com', '$2y$04$YCRzK9E/rEcWMftboqFaWOl3otbpbbteRAwlpVVGuxHS3VT.DF72.', '2020-03-05'),
(8, 'Oscar', 'Hoya', 'oscar@gmail.com', '$2y$04$cRmGTYs0DmJQm8LEhfK41OjZ3GsqV0JCDHuDTZNaw6TO2JLUJW0zC', '2020-03-05'),
(9, 'Pablo', 'Melendez', 'pablo@gmail.com', '$2y$04$nhklGE10M/wU96COB6ocK.Tvt4749tmgVipEL8vF7kRU62T0hK6.y', '2020-03-05'),
(10, 'Pablo', 'Palomino', 'pablito12@gmail.com', '$2y$04$KFpSjI6qrVymy7OuG8EcqO83FYyMrZwvz08/MWZq6vVzbwrHKYH1W', '2020-03-05'),
(11, 'Diego', 'Alfaro', 'diego@gmail.com', '$2y$04$t7/Wt5qcqzEvIiUFqd9sEOhVjD2GFdvvdzD/1TACXHoHKcg4og6d6', '2020-03-05'),
(12, 'pedro', 'alvez', 'pedrito@gmail.com', '$2y$04$uoS9Nl.maocsCH8nafwbAuQNV47EqI9jcKWgjo28R956w93kn25Si', '2020-03-05'),
(13, 'roxana', 'chacon', 'roxana@gmail.com', '$2y$04$Ragk6UbxOGrwZHimC9J.H.nggdF2yRwoLcG66umADhAA9L4RI41Si', '2020-03-05'),
(14, 'fred', 'alfaro', 'fred@gmail.com', '$2y$04$vAT/3wvdHftQprTd9ZzMfOpzSKiDxqvt6rcH8DvV6LyAdHFeGA3KW', '2020-03-05'),
(15, 'alonso', 'sonso', 'alonso@gmail.com', '$2y$04$tPW9UqemndXwbz8OLqQot.bBmwwWw2Kj0VM.5cc4D8ff.A.WlFXyi', '2020-03-05'),
(16, 'crisalida', 'alfaro', 'crisa@gmail.com', '$2y$04$UAPyvejRak5GDMdi0YtLS.iihAMfNqw7AVs4eQDcTujSChVrqbxcS', '2020-03-05'),
(17, 'nancy', 'chacon', 'nancy@gmail.com', '$2y$04$m5ZTW2385XuW3vNBr8FaS.xC9.EXx8.JHc07q6zw/ni0dYSPMYFdq', '2020-03-05'),
(18, 'juan', 'abencia', 'abencia@gmail.com', '$2y$04$RokVMMAgkIIMoGNXlbo4WOqx461O5Ku85gOXz.qUL96Vv6rbHcfSK', '2020-03-05'),
(19, 'federico', 'villareal', 'fede@gmail.com', '$2y$04$jT2xhV5udzAoKvM3mLdz0O2opijYMQShpMybuBsh9t4rfwYX6.rS2', '2020-03-05'),
(20, 'harold', 'chacon\"', 'alfaro@gmail.com', '$2y$04$a7nhTno1E1Ocl2dMV8NIB.UEHsEybFAbO.wbIKcdouCWE3JQ6HlE6', '2020-03-05'),
(21, 'Fidelia', 'chacon', 'fidelia@gmail.com', '$2y$04$B4c2BlGGsQt5oPng5gILAe..PrfCStvkTjXIoI2undmC0L.gtvrlq', '2020-03-05'),
(22, 'pruebita', 'prueba', 'prueba@gmail.com', '$2y$04$pJN7X/Nwtbs5ROJfENlQgelEts3DhUI23l4Z1TToGVvoGpAD8Mtq2', '2020-03-06'),
(23, 'alexander\'', 'correa', 'correa@gmail.com', '$2y$04$bkMq44mCTz/EOqAm1Zkpxeg6d2zBkGo5J2mE4szKomQzHfy/psaiO', '2020-03-06'),
(24, 'juan carlos', 'torres', 'juank@gmail.com', '$2y$04$g5hyvxTGFMzLyQ8ZmljbGukneMxi43cIfWYRuBoc0pgHyU5YcSlOW', '2020-03-15'),
(25, 'hhhh', 'lkkk221', 'ut11p@gmail.com', '$2y$04$YVJBZHJgjKWOLdI8EAo/fuZnnk0.ea6AZ.fltIaQUyezL1hAevnnO', '2020-03-19');

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
  ADD KEY `fk_entrada_usuario` (`usuario_id`),
  ADD KEY `fk_entrada_categoria` (`categoria_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `fk_entrada_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `fk_entrada_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
