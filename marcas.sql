-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2018 a las 18:05:35
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
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `caracteristica` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `created_at`, `updated_at`, `deleted_at`, `caracteristica`) VALUES
(1, 'Abarth', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '497 Concesionarios'),
(2, 'Alfa Romeo', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '398 Concesionarios'),
(3, 'Aro', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '399 Concesionarios'),
(4, 'Asia', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '299 Concesionarios'),
(5, 'Asia Motors', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '200 Concesionarios'),
(6, 'Aston Martin', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '403 Concesionarios'),
(7, 'Audi', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '112 Concesionarios'),
(8, 'Austin', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '454 Concesionarios'),
(9, 'Auverland', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '230 Concesionarios'),
(10, 'Bentley', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '493 Concesionarios'),
(11, 'Bertone', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '471 Concesionarios'),
(12, 'Bmw', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '374 Concesionarios'),
(13, 'Cadillac', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '359 Concesionarios'),
(14, 'Chevrolet', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '174 Concesionarios'),
(15, 'Chrysler', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '495 Concesionarios'),
(16, 'Citroen', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '249 Concesionarios'),
(17, 'Corvette', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '464 Concesionarios'),
(18, 'Dacia', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '269 Concesionarios'),
(19, 'Daewoo', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '254 Concesionarios'),
(20, 'Daf', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '363 Concesionarios'),
(21, 'Daihatsu', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '153 Concesionarios'),
(22, 'Daimler', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '377 Concesionarios'),
(23, 'Dodge', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '124 Concesionarios'),
(24, 'Ferrari', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '191 Concesionarios'),
(25, 'Fiat', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '486 Concesionarios'),
(26, 'Ford', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '150 Concesionarios'),
(27, 'Galloper', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '398 Concesionarios'),
(28, 'Gmc', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '237 Concesionarios'),
(29, 'Honda', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '291 Concesionarios'),
(30, 'Hummer', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '244 Concesionarios'),
(31, 'Hyundai', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '249 Concesionarios'),
(32, 'Infiniti', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '413 Concesionarios'),
(33, 'Innocenti', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '418 Concesionarios'),
(34, 'Isuzu', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '348 Concesionarios'),
(35, 'Iveco', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '387 Concesionarios'),
(36, 'Iveco-pegaso', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '389 Concesionarios'),
(37, 'Jaguar', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '286 Concesionarios'),
(38, 'Jeep', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '164 Concesionarios'),
(39, 'Kia', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '262 Concesionarios'),
(40, 'Lada', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '318 Concesionarios'),
(41, 'Lamborghini', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '301 Concesionarios'),
(42, 'Lancia', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '455 Concesionarios'),
(43, 'Land-rover', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '470 Concesionarios'),
(44, 'Ldv', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '483 Concesionarios'),
(45, 'Lexus', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '106 Concesionarios'),
(46, 'Lotus', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '183 Concesionarios'),
(47, 'Mahindra', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '499 Concesionarios'),
(48, 'Maserati', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '242 Concesionarios'),
(49, 'Maybach', '2018-07-12 20:00:32', '2018-07-12 20:00:32', NULL, '416 Concesionarios'),
(50, 'Mazda', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '454 Concesionarios'),
(51, 'Mercedes-benz', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '118 Concesionarios'),
(52, 'Mg', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '333 Concesionarios'),
(53, 'Mini', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '410 Concesionarios'),
(54, 'Mitsubishi', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '151 Concesionarios'),
(55, 'Morgan', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '225 Concesionarios'),
(56, 'Nissan', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '172 Concesionarios'),
(57, 'Opel', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '487 Concesionarios'),
(58, 'Peugeot', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '217 Concesionarios'),
(59, 'Pontiac', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '324 Concesionarios'),
(60, 'Porsche', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '467 Concesionarios'),
(61, 'Renault', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '465 Concesionarios'),
(62, 'Rolls-royce', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '423 Concesionarios'),
(63, 'Rover', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '218 Concesionarios'),
(64, 'Saab', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '123 Concesionarios'),
(65, 'Santana', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '262 Concesionarios'),
(66, 'Seat', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '439 Concesionarios'),
(67, 'Skoda', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '109 Concesionarios'),
(68, 'Smart', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '333 Concesionarios'),
(69, 'Ssangyong', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '434 Concesionarios'),
(70, 'Subaru', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '270 Concesionarios'),
(71, 'Suzuki', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '350 Concesionarios'),
(72, 'Talbot', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '440 Concesionarios'),
(73, 'Tata', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '247 Concesionarios'),
(74, 'Toyota', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '219 Concesionarios'),
(75, 'Umm', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '254 Concesionarios'),
(76, 'Vaz', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '110 Concesionarios'),
(77, 'Volkswagen', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '493 Concesionarios'),
(78, 'Volvo', '2018-07-12 20:00:33', '2018-07-12 20:00:33', NULL, '430 Concesionarios'),
(79, 'Wartburg', '2018-07-12 20:00:34', '2018-07-12 20:00:34', NULL, '171 Concesionarios');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
