-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2017 a las 21:01:45
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `account` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `titulo`, `content`, `account`) VALUES
(1, 'djghz', 'zdndgjdjsdj', 'milopalma@hotmail.com'),
(2, 'asdgasdgasdgasdg', 'asdgasdgasdgasdg', 'milopalma@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comms`
--

CREATE TABLE `comms` (
  `identidad` int(100) NOT NULL,
  `comentario` varchar(200) NOT NULL,
  `cuenta` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comms`
--

INSERT INTO `comms` (`identidad`, `comentario`, `cuenta`) VALUES
(1, '', 'milopalma@hotmail.com'),
(1, ' asfgasfg', 'milopalma@hotmail.com'),
(1, ' asgasgsadg', 'milopalma@hotmail.com'),
(1, ' asdgasdgda', 'milopalma@hotmail.com'),
(1, '', 'milopalma@hotmail.com'),
(1, '', 'milopalma@hotmail.com'),
(1, ' asdgsadg', 'milopalma@hotmail.com'),
(1, ' asdgasg', 'milopalma@hotmail.com'),
(1, '', 'milopalma@hotmail.com'),
(1, ' adsgasdgas', 'milopalma@hotmail.com');

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
(19, 'sara', 'lo', 'lop@hotmail.com', '$2y$10$5dOaarBh3IuJqJf0mkr4o.2vuB9ufXAPF.r9y95RXZ1RqvstOvHK2', '1141938ba2c2b13f5505d7c424ebae5f', 0),
(20, 'alo', 'pel0o', 'er@hotmail.com', '$2y$10$x.yF0jB2NOb30CIn7RHyEOM6Jjg2q/..R3W.KxMs2./3s0QbwQaNq', '6da9003b743b65f4c0ccd295cc484e57', 0),
(21, 'asf', 'adf', 'adf@hotmail.com', '$2y$10$B7ADoVr0sxyRPGN3k8mh7eRtByr8va1SZzPy96WXTdh03s7WAzA06', '013a006f03dbc5392effeb8f18fda755', 0),
(22, 'Carlos', 'Gonzalez', 'cgonzalez9054@gmail.com', '$2y$10$upnOP8.kam3hfyNVJ/e8tuxHLx7Sx8W.K5l.28pY1yka1EWxr/ZUi', '6ea9ab1baa0efb9e19094440c317e21b', 0),
(23, 'asdf', 'asdfas', 'asdf@h.cpm', '$2y$10$R.njK8ewE3IOSEzUdWj84eQQ/zF1Ha0cXJkQwtlQS8MH0U5ZbcVzi', '26dd0dbc6e3f4c8043749885523d6a25', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
