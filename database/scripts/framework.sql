-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 08-06-2020 a las 21:04:32
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `framework`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_06_182840_create_servicios_table', 1),
(5, '2020_06_06_185555_create_pagos_table', 1),
(6, '2020_06_06_200936_create_suscripciones_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `concepto` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monto` decimal(5,2) DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  `suscriptor_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `concepto`, `desc`, `monto`, `fecha_pago`, `suscriptor_id`) VALUES
(1, 'con', 'desc', '12.00', '2020-06-08', 1),
(2, '2', '2', '2.00', '2018-02-02', 2),
(3, 'TRE', 'TRE', '3.00', '2019-09-17', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` decimal(8,2) DEFAULT NULL,
  `recargo` decimal(8,2) DEFAULT NULL,
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `desc`, `precio`, `recargo`, `img1`, `img2`, `img3`, `deleted_at`) VALUES
(1, 'El libro', '1', '1.00', '1.00', '1591642614Sin título.png', '1591642614Sin título.png', '1591642614Sin título.png', '2020-06-09 01:28:39'),
(2, 'El libro', '1', '1.00', '1.00', '1591643730luna-colores-nuevo.png', '1591643730luna-colores-nuevo.png', '1591643730luna-colores-nuevo.png', '2020-06-09 00:21:31'),
(3, 'NUEVO', 'DESCRIPCIÓN', '99.00', '99.00', '1591647883luna-colores-nuevo.png', '1591647883Sin título.png', '1591647883luna-colores-nuevo.png', '2020-06-09 01:28:39'),
(4, 'El libro - Versión nueva', 'Descripción nueva', '11111.00', '111111.00', '1591648049Captura de pantalla (212).png', '1591648049Captura de pantalla (212).png', '1591648049Captura de pantalla (212).png', '2020-06-09 01:28:37'),
(5, 'SERVICIO1', 'DESCRIPCIÓN', '1.00', '1.00', '1591648674Captura de pantalla (212).png', '1591648674Captura de pantalla (212).png', '1591648674Captura de pantalla (212).png', NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'El libro', '123212', '31.00', '111.00', '1591648702Captura de pantalla (262).png', '1591648702Captura de pantalla (262).png', '1591648702Captura de pantalla (262).png', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripciones`
--

CREATE TABLE `suscripciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha_insc` date DEFAULT NULL,
  `servicio_id` bigint(20) UNSIGNED DEFAULT NULL,
  `suscriptor_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `suscripciones`
--

INSERT INTO `suscripciones` (`id`, `fecha_insc`, `servicio_id`, `suscriptor_id`) VALUES
(2, '2020-06-02', 1, 2),
(3, '2020-06-02', 4, 1),
(5, '2020-06-02', 5, 5),
(6, '2020-06-16', 7, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rfc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rol` enum('cobrador','suscriptor') COLLATE utf8mb4_unicode_ci DEFAULT 'suscriptor',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `rfc`, `dir`, `email`, `password`, `remember_token`, `rol`, `created_at`, `updated_at`) VALUES
(1, 'Nombre', 'RFC', 'Dir', 'dir@dir.com', '$2y$10$iPE4ahvbI1rzbS.SsD6CxO5mYS6ep3Cszg3GfkZw71Ppy3f5uZDpi', NULL, 'suscriptor', '2020-06-08 19:02:00', '2020-06-08 19:02:00'),
(2, 'a', 'a', 'a', 'a', 'pasopaso', NULL, 'suscriptor', '2020-06-08 05:00:00', '2020-06-08 05:00:00'),
(3, 'Tre', 'Tre', 'Tre', 'tre', '$2y$10$iPE4ahvbI1rzbS.SsD6CxO5mYS6ep3Cszg3GfkZw71Ppy3f5uZDpi', NULL, 'suscriptor', '2020-06-08 19:02:00', '2020-06-08 19:02:00'),
(4, 'Nombre', 'RFC', 'Dir', 'dirrrr@dirrr.com', '$2y$10$iPE4ahvbI1rzbS.SsD6CxO5mYS6ep3Cszg3GfkZw71Ppy3f5uZDpi', NULL, 'cobrador', '2020-06-08 19:02:00', '2020-06-08 19:02:00'),
(5, 'Nombre', 'RFC', 'Dir', 'dirrrrr@dirrrr.com', '$2y$10$iPE4ahvbI1rzbS.SsD6CxO5mYS6ep3Cszg3GfkZw71Ppy3f5uZDpi', NULL, 'cobrador', '2020-06-08 19:02:00', '2020-06-08 19:02:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pagos_users1_idx` (`suscriptor_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_suscripciones_users1_idx` (`suscriptor_id`),
  ADD KEY `fk_suscripciones_servicios1_idx` (`servicio_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `fk_pagos_users1_idx` FOREIGN KEY (`suscriptor_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `suscripciones`
--
ALTER TABLE `suscripciones`
  ADD CONSTRAINT `fk_suscripciones_servicios1_idx` FOREIGN KEY (`servicio_id`) REFERENCES `servicios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_suscripciones_users1_idx` FOREIGN KEY (`suscriptor_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
