-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2021 a las 05:02:15
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ConnectionsManager`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Connections`
--

CREATE TABLE `Connections` (
  `id` int(11) NOT NULL,
  `connection_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `server` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_database` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `databaseEngine` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Connections`
--

INSERT INTO `Connections` (`id`, `connection_name`, `server`, `user_name`, `password`, `name_database`, `databaseEngine`) VALUES
(5, 'Luis2ss', 'localhost', 'root', 'd41d8cd98f00b204e9800998ecf8427e', 'todolist', 'MySQL'),
(9, 'asdasdadsas', 'DESKTOP-367H2EA\\SQLEXPRESS', 'luis', '81dc9bdb52d04dc20036dbd8313ed055', 'Users', 'MSSQL'),
(10, 'adaaaaaaaaaaaaaaaaaasssss', 'DESKTOP-367H2EA\\SQLEXPRESS', 'luis', '926cKI8ASnQh/JL/dzGvjw==', 'Users', 'MySQL'),
(11, 'nuevaaassssss', 'DESKTOP-367H2EA\\SQLEXPRESS', 'luis', '1234', 'Users', 'MSSQL'),
(12, 'la verdadera', 'DESKTOP-367H2EA\\SQLEXPRESS', 'luis', '926cKI8ASnQh/JL/dzGvjw==', 'Users', 'MSSQL'),
(13, 'asdassdaasd', 'DESKTOP-367H2EA\\SQLEXPRESS', 'luis', '926cKI8ASnQh/JL/dzGvjw==', 'Users', 'MSSQL'),
(14, 'Luis2ss', 'DESKTOP-367H2EA\\SQLEXPRESS', 'luis', 'juCd0gIDDndc/mgebbHtHQ==', 'Users', 'MSSQL'),
(15, 'Luis2ssss', 'localhost', 'root', '', 'todolist', 'MySQL'),
(16, 'nueva conexion', 'DESKTOP-367H2EA\\SQLEXPRESS', 'luisss', '926cKI8ASnQh/JL/dzGvjw==', 'Users', 'MSSQL');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Connections`
--
ALTER TABLE `Connections`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Connections`
--
ALTER TABLE `Connections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
