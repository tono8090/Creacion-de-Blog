-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2017 a las 18:33:30
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `accounts`
--
CREATE DATABASE IF NOT EXISTS `accounts` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `accounts`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `hash`, `active`) VALUES
(9, 'Emilio', 'PALMA', 'milopalma@hotmail.com', '$2y$10$ta6ji2jYxd3RjW0n20hI8OWPXxDqoZijDKVkXvb0FcCFrZkAhTWL6', 'dd458505749b2941217ddd59394240e8', 0),
(18, 'Tu', 'Kola UwU', 'carlosmonasteriona@gmail.com', '$2y$10$HmZYiEC8IcfUIqNwgq/f..DKrZAZKS3A2yBDVciMNYR5UUm2OHkeW', 'c81e728d9d4c2f636f067f89cc14862c', 0),
(17, 'Carlos', 'GonzÃ¡lez', 'carlos.jgc14@gmail.com', '$2y$10$Vv.snPEohmU0MTZXIylCN.IDQOSkpIJ.R.u/zBJrjN6.i1/LkKMEm', '82489c9737cc245530c7a6ebef3753ec', 0),
(16, 'perez', 'boba', 'boba@hotmail.com', '$2y$10$SFp9SEiezvFvR2lKk4X/ZOUkANvznEtz2W8.j87kRPfusycyrghfa', '1efa39bcaec6f3900149160693694536', 0),
(15, 'sancho', 'pelado', 'san@hotmail.com', '$2y$10$VvkkQ03md6CbHPL7Vt3Fs.4xSHUhpYoFlHbFVegafTEbDU.N6sQnu', '30bb3825e8f631cc6075c0f87bb4978c', 0),
(19, 'sara', 'lo', 'lop@hotmail.com', '$2y$10$5dOaarBh3IuJqJf0mkr4o.2vuB9ufXAPF.r9y95RXZ1RqvstOvHK2', '1141938ba2c2b13f5505d7c424ebae5f', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;--
-- Base de datos: `salas`
--
CREATE DATABASE IF NOT EXISTS `salas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `salas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `content` varchar(8000) NOT NULL,
  `account` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `titulo`, `content`, `account`) VALUES
(5, 'mi cola', '132412341234', 'milopalma@hotmail.com'),
(3, 'tu cola', 'tengo sueÃ±o', 'milopalma@hotmail.com'),
(4, 'tengo sue;o', 'hay cosas que probar', 'milopalma@hotmail.com'),
(22, 'hola', 'este es un post de prueba XD xd', 'milopalma@hotmail.com'),
(8, 'hola ', 'el hola es un saludo amistoso', 'milopalma@hotmail.com'),
(9, '123', 'este no se tiene que mostrar', 'san@hotmail.com'),
(10, 'este no se muestra', 'este no se tiene que mostrar', 'san@hotmail.com'),
(11, 'mis nalgas', 'XD ', 'milopalma@hotmail.com'),
(21, 'hola', 'este es un post de prueba XD xd', 'milopalma@hotmail.com'),
(13, 'asdfg', 'sdagfasfgasfdg', 'milopalma@hotmail.com'),
(14, 'tengo que irme', 'asdfasdasfgasgasfgasfgasgasfgasfgasdg', 'milopalma@hotmail.com'),
(15, '', '', 'milopalma@hotmail.com'),
(16, 'estoy creando un post', 'cxreando el post de prueba desde perez', 'boba@hotmail.com'),
(17, 'Tu tata soy yo', 'Puto el que lo lea...', 'carlos.jgc14@gmail.com'),
(18, 'Tu tata soy yo', 'Puto el que lo lea...', 'carlos.jgc14@gmail.com'),
(19, 'tu cola', 'tengo hambre', 'milopalma@hotmail.com'),
(20, ':v', '>:v', 'carlosmonasteriona@gmail.com'),
(23, 'prueba', 'pora aasdgasdg', 'lop@hotmail.com'),
(24, 'estoy creando un post ', 'uno nuebo', 'milopalma@hotmail.com'),
(25, 'estoy creando otro post XD', 'lo que quiero decir es que est', 'milopalma@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comms`
--

CREATE TABLE `comms` (
  `identidad` int(50) NOT NULL,
  `comentario` varchar(3000) NOT NULL,
  `cuenta` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comms`
--

INSERT INTO `comms` (`identidad`, `comentario`, `cuenta`) VALUES
(3, 'hola', 'milopalma@hotmail.com'),
(3, 'hola', 'milopalma@hotmail.com'),
(3, 'hola', 'milopalma@hotmail.com'),
(3, 'hola', 'milopalma@hotmail.com'),
(3, 'que tal como estas', 'milopalma@hotmail.com'),
(4, 'tengo que mostrar esto', 'milopalma@hotmail.com'),
(4, 'si funciona', 'milopalma@hotmail.com'),
(4, 'tu topico es interesante', 'milopalma@hotmail.com'),
(4, 'estoy mostrando los comentarios', 'milopalma@hotmail.com'),
(3, 'hola', 'milopalma@hotmail.com'),
(23, 'hola', 'milopalma@hotmail.com'),
(22, 'hola', 'milopalma@hotmail.com'),
(22, 'hola', 'milopalma@hotmail.com'),
(22, 'que hay como estan', 'milopalma@hotmail.com'),
(4, ' ', 'milopalma@hotmail.com'),
(4, ' hola que tal', 'milopalma@hotmail.com'),
(5, '', 'milopalma@hotmail.com'),
(5, ' que hay', 'milopalma@hotmail.com'),
(20, '', ''),
(4, '', 'milopalma@hotmail.com'),
(4, ' HOLA COMO ESTAS', 'milopalma@hotmail.com'),
(4, '', 'milopalma@hotmail.com'),
(4, ' que onda', 'milopalma@hotmail.com'),
(13, '', 'milopalma@hotmail.com'),
(13, ' que onda', 'milopalma@hotmail.com'),
(13, ' como estas', 'milopalma@hotmail.com'),
(13, ' bien y vos', 'milopalma@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
