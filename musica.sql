-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2018 a las 00:10:07
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `musica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cantantes`
--

CREATE TABLE `cantantes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_voz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cantantes`
--

INSERT INTO `cantantes` (`id`, `nombre`, `tipo_voz`, `created_at`, `updated_at`) VALUES
(2, 'Beyoncé', 'Mezzosoprano lírica', NULL, '2018-07-26 20:05:49'),
(4, 'Taylor Swift', 'Soprano', NULL, NULL),
(5, 'Ed Sheeran', 'Tenor', NULL, NULL),
(6, 'Bruno Mars', 'Baritono', NULL, NULL),
(7, 'Marea', 'Generica', '2018-07-26 17:18:14', '2018-07-26 17:18:14'),
(8, 'Linkin Park', 'Generica', '2018-07-26 17:21:10', '2018-07-26 17:21:10'),
(9, 'Iron maiden', 'Generica', '2018-07-26 17:42:49', '2018-07-26 17:42:49'),
(10, 'Evanescence', 'Generica', '2018-07-26 17:52:59', '2018-07-26 17:52:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discos`
--

CREATE TABLE `discos` (
  `id` int(10) UNSIGNED NOT NULL,
  `cantantes_id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `discos`
--

INSERT INTO `discos` (`id`, `cantantes_id`, `nombre`, `genero`, `created_at`, `updated_at`) VALUES
(3, 4, 'Reputations', 'Electropop, indie, pop', NULL, '2018-07-26 20:04:00'),
(6, 5, 'Divide', 'Pop music', '2018-07-24 17:33:38', '2018-07-24 17:33:38'),
(8, 7, 'La luna me sabe a poco', 'Rock', '2018-07-26 17:19:01', '2018-07-26 17:19:01'),
(9, 8, 'Meteora', 'Alternative rock, Nu metal, Alternative metal', '2018-07-26 17:21:10', '2018-07-26 17:21:10'),
(10, 9, 'Killers', 'Heavy metal', '2018-07-26 17:50:22', '2018-07-26 17:50:22'),
(11, 10, 'Fallen', 'Hard Rock, Rock', '2018-07-26 17:52:59', '2018-07-26 17:52:59'),
(13, 7, 'Patera', 'Rock', '2018-07-26 20:05:38', '2018-07-26 20:05:38'),
(14, 2, 'Lemonade', 'Alternative R&B', '2018-07-26 20:06:40', '2018-07-26 20:06:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_07_23_185535_create_cantantes_table', 1),
(2, '2018_07_23_185605_create_discos_table', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cantantes`
--
ALTER TABLE `cantantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `discos`
--
ALTER TABLE `discos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `discos_cantantes_id_foreign` (`cantantes_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cantantes`
--
ALTER TABLE `cantantes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `discos`
--
ALTER TABLE `discos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `discos`
--
ALTER TABLE `discos`
  ADD CONSTRAINT `discos_cantantes_id_foreign` FOREIGN KEY (`cantantes_id`) REFERENCES `cantantes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
