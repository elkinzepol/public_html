-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-09-2022 a las 14:33:55
-- Versión del servidor: 10.5.16-MariaDB
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id19511845_bdzepol`
--
CREATE DATABASE IF NOT EXISTS `id19511845_bdzepol` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id19511845_bdzepol`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `nomb` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `asunt` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mess` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`nomb`, `email`, `asunt`, `mess`) VALUES
('sasdasd', 'sdasdas@g', 'asdasdasd', 'asdasdasd'),
('sdfasfsa', 'sdfsafsad@gmail.com', 'sdkpjdsakj', 'kjpsdajkopsdaopjkafds'),
('sadasdas', 'adasdasd@gmail.com', 'asijdaop', 'plsdpklsdls dg sdgh'),
('sdfsdf', 'sdfsdfsdf@gmail.com', 'sdplsdlflñ', ' sdfplasldf sdf sadf'),
('fgsfdgsdf', 'gsdfgsdfg@gmail.com', 'sdfgsdfgsd', 'fgsdfgsdfgfgdsfg'),
('María José Oñate', 'maryjonate@gmail.com', 'Asesoría personalizada de mi i', 'Me encanta tu pagina mi ingeniero favorito, vas a llegar muy lejos! Te quiero '),
('Elkin Lopez', 'elkinluislopez@gmail.com', 'sdsadsadsad', 'sdsafd'),
('prueba1', 'jasdjajkodjko@gmai.com', 'askaskdasjkpdlp', 'djpsjopsdogsd´fg´sdfsdg'),
('ssadf', 'sdfasdfasdf@gmail.com', 'sdaskpd', 'pasdpasdpas'),
('prueba final', 'adskdkaskd@gmail.com', 'prueba 14-12-2018', 'adfjadfjhdfadfaaf'),
('dfsf', 'fsdfsdfsdf@hotmail.com', 'afsfasf', 'sdfsdfdfsdf'),
('prueba hoy', 'dasdasd@gmail.com', 'asdasd', '20/12/2018'),
('dfsdf', 'dfsdfsd@dfgshdfskdf.com', 'fsdfsd', 'fsdfsdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `cargo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `clave`, `cargo`) VALUES
(1, 'Elkin Lopez', 'elkinluislopez@gmail.com', 'eaea3dabea7e59338a9e1d2f3f6b27f7', '1'),
(2, 'user', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', '2');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
