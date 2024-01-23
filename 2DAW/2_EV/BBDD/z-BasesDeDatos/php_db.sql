-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-01-2024 a las 12:48:39
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `especie` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `animal`
--

INSERT INTO `animal` (`id`, `nombre`, `especie`, `edad`) VALUES
(1, 'javier', 'humano', 25),
(2, 'perro', 'bulldog', 2),
(3, 'gato', 'Murko', 4),
(6, 'Elefante', 'Grande', 33),
(7, 'Elefante', 'Grande', 33),
(8, 'Elefante', 'Grande', 33),
(37, 'asdf', 'asdf', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `credits` int(11) NOT NULL,
  `ref` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `subject`
--

INSERT INTO `subject` (`id`, `name`, `credits`, `ref`) VALUES
(1, 'Inglés', 30, 'E01'),
(2, 'Empresa', 70, 'E02'),
(3, 'Entorno Servidor', 270, 'E03'),
(4, 'Entorno Cliente', 250, 'E04'),
(5, 'Despliegue', 30, 'E05'),
(6, 'Infaces', 150, 'E06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lastname` varchar(80) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `birthday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `username`, `password`, `email`, `created_at`, `birthday`) VALUES
(12, 'Denys', 'Angulo', 'denys04', '827ccb0eea8a706c4c34a16891f84e', 'denys.msi04@gmail.com', '2024-01-10 13:12:05', '2004-01-08'),
(13, 'Vasyl', 'Bliat', 'vasy2', '6786f3c62fbf9021694f6e51cc07fe', 'vasyl.msi04@gmail.com', '2024-01-10 13:17:17', '2003-01-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_calification`
--

CREATE TABLE `user_calification` (
  `id_user` int(11) NOT NULL,
  `id_subject` int(11) NOT NULL,
  `score` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user_calification`
--

INSERT INTO `user_calification` (`id_user`, `id_subject`, `score`, `date`) VALUES
(12, 1, 10, '2024-01-16 12:22:03'),
(12, 2, 7, '2024-01-16 12:19:10'),
(12, 3, 10, '2024-01-16 12:21:47'),
(12, 4, 9, '2024-01-16 12:21:36'),
(12, 5, 10, '2024-01-16 12:21:02'),
(12, 6, 10, '2024-01-16 12:21:56'),
(13, 2, 2, '2024-01-16 12:22:18'),
(13, 4, 8, '2024-01-16 12:22:27'),
(13, 5, 9, '2024-01-16 12:22:11'),
(13, 6, 6, '2024-01-16 12:22:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `ref` (`ref`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `user_calification`
--
ALTER TABLE `user_calification`
  ADD PRIMARY KEY (`id_user`,`id_subject`),
  ADD UNIQUE KEY `id_user` (`id_user`,`id_subject`),
  ADD KEY `id_subject` (`id_subject`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `user_calification`
--
ALTER TABLE `user_calification`
  ADD CONSTRAINT `user_calification_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_calification_ibfk_2` FOREIGN KEY (`id_subject`) REFERENCES `subject` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
