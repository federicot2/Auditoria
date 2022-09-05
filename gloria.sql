-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-08-2022 a las 13:41:16
-- Versión del servidor: 10.5.16-MariaDB-cll-lve
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tamitutc_paya`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gloria`
--

CREATE TABLE `gloria` (
  `id` int(11) NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `deliveryfee` varchar(100) NOT NULL,
  `subtotal` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `paymentmethod` varchar(100) NOT NULL,
  `confirmeddate` varchar(100) NOT NULL,
  `confirmedtime` varchar(100) NOT NULL,
  `deliveryfeetax` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gloria`
--
ALTER TABLE `gloria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gloria`
--
ALTER TABLE `gloria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
