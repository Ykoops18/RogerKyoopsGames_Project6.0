-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-04-2023 a las 06:49:51
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_02_28_014514_create_posts_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `descripcion`, `imagen`, `user_id`, `created_at`, `updated_at`) VALUES
(10, 'Resident Evil 4', 'El mejor de la saga de resident evil', '45a776f8-2cc4-4d28-b362-d50159fd1af0.webp', 32, '2023-04-02 10:38:12', '2023-04-02 10:38:12'),
(11, 'Assassin\'s Creed conspirations', '（‐＾▽＾‐）', '455a895c-6a60-4c3a-87c5-dfcb5da6d7a5.webp', 32, '2023-04-02 10:41:40', '2023-04-02 10:41:40'),
(12, 'Doom 3', 'Lo jugaba por la noche para entrar en ambiente!  (＾▽＾)', '16675eab-8678-4d2b-9e39-2685b2382bd4.png', 32, '2023-04-02 10:45:12', '2023-04-02 10:45:12'),
(13, 'League of Legends', 'Ashe', '9430e68c-cf8c-4a68-a8a1-189053909707.webp', 32, '2023-04-02 10:57:34', '2023-04-02 10:57:34'),
(14, 'Zelda', '（⌒▽⌒）', '82d39aee-089a-4feb-a73e-4fa44b82b65c.webp', 32, '2023-04-02 10:58:57', '2023-04-02 10:58:57'),
(18, 'Rain World', 'Rain...', 'd654649e-0b15-4410-b531-b615badbfdf2.jpg', 32, '2023-04-02 11:23:33', '2023-04-02 11:23:33'),
(19, 'El demonio de la opulencia', 'Obra reciente', 'a3d4a353-38ba-46f6-aa3a-53b58e69d824.jpg', 33, '2023-04-05 13:11:50', '2023-04-05 13:11:50'),
(20, 'Mois', '26 mois', '6a134b2a-549c-4ff2-a770-58e31733c28c.webp', 34, '2023-04-05 13:23:50', '2023-04-05 13:23:50'),
(21, 'Delirio en el desierto', 'Deliraras', 'e091a6ed-5523-4fb5-a0ac-64bdca3ef99c.jpg', 34, '2023-04-05 13:24:39', '2023-04-05 13:24:39'),
(22, 'La pixca', 'arte moderno', 'c7e3e77e-32f5-4e93-b96f-9d8fd6bc6961.png', 34, '2023-04-05 13:25:09', '2023-04-05 13:25:09'),
(23, 'Cafeteria', 'Una inspiración', '3013cf8d-94e0-43c9-b15f-f46b739336a3.jpg', 34, '2023-04-05 13:25:53', '2023-04-05 13:25:53'),
(24, 'Process', 'prdd', 'c7a941d2-60c2-40e7-b2c3-20f0989310ae.webp', 34, '2023-04-05 13:28:51', '2023-04-05 13:28:51'),
(25, 'GG POS', 'MUJER AD', 'a64115d4-57fb-442c-b05f-105bc3977232.jpg', 34, '2023-04-05 13:40:38', '2023-04-05 13:40:38'),
(26, 'Ashe', 'lol', '921e1cc1-82f5-48cc-b786-605ff32a6aa9.webp', 32, '2023-04-06 01:43:45', '2023-04-06 01:43:45'),
(27, 'Logo', 'lol', '253d8e36-b5e3-4e80-be80-f755f1be87cf.png', 35, '2023-04-06 01:46:26', '2023-04-06 01:46:26'),
(28, 'Primer post del poninas', 'hloa', 'bcac6693-45eb-4ea4-948f-7bb11fc28743.jpg', 36, '2023-04-06 06:07:22', '2023-04-06 06:07:22'),
(29, 'Titulo', 'Mi post', 'c4855cbe-b9fd-49ec-b514-958fd32c6c22.jpg', 37, '2023-04-06 06:14:33', '2023-04-06 06:14:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(32, 'Rogelio Emanuel', 'Roger', 'osoriorogelio780@gmail.com', NULL, '$2y$10$mIcfnK/8pFqb5giuBnL7huj6vj0YgFKqMJpel/9jfjSndq9Z82jxO', NULL, '2023-04-02 10:36:27', '2023-04-02 10:36:27'),
(33, 'Ana Maria', 'Ana', 'ana__99@hotmail.com', NULL, '$2y$10$3g3NqaZpVbixDuadzbSazOkduKhB55PlIZYi0qf2NZgDrPLHJcerS', NULL, '2023-04-05 13:09:22', '2023-04-05 13:09:22'),
(34, 'Kevin Murillo', 'Kevin', 'kevin@Gmail.com', NULL, '$2y$10$Qski3bp0KWzjLl3GjlzGE.rSZrlG4znWM0.nsRiaXLHk2KqCN.NYS', NULL, '2023-04-05 13:22:49', '2023-04-05 13:22:49'),
(35, 'Omar Flores', 'Omar', 'omar__98@hotmail.com', NULL, '$2y$10$kGl3osQEnlK9Gaony2QpxuKiCoeqtyYhNWadlSVCTpBcrs5GdW9tW', NULL, '2023-04-06 01:45:40', '2023-04-06 01:45:40'),
(36, 'Poninas', 'El gallo Poninas', 'poninas10@gmail.com', NULL, '$2y$10$dhh.cq3KiOXNYbB2ZdCqXOjSKhneMXwbHOgx6b6dvggTYKiLP391O', NULL, '2023-04-06 06:05:57', '2023-04-06 06:05:57'),
(37, 'ejemplo', 'ejemplo', 'ejemplo10@gmail.com', NULL, '$2y$10$CBzws5wT3syySJowOmoRy.o8d37q4KMqFxwX8Gp7niv5jQQrP9tga', NULL, '2023-04-06 06:13:48', '2023-04-06 06:13:48');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
