-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-08-2022 a las 13:42:44
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
-- Estructura de tabla para la tabla `tookan`
--

CREATE TABLE `tookan` (
  `id` int(11) NOT NULL,
  `taskid` varchar(100) NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `relationship` varchar(100) NOT NULL,
  `teamname` varchar(100) NOT NULL,
  `tasktype` varchar(100) NOT NULL,
  `notes` varchar(100) NOT NULL,
  `agentid` varchar(100) NOT NULL,
  `Agentname` varchar(100) NOT NULL,
  `Distance` varchar(100) NOT NULL,
  `totaltimetaken` varchar(100) NOT NULL,
  `pickupfrom` varchar(100) NOT NULL,
  `customername` varchar(100) NOT NULL,
  `customeraddress` varchar(100) NOT NULL,
  `customerphone` varchar(100) NOT NULL,
  `customeremail` varchar(100) NOT NULL,
  `startbefore` datetime NOT NULL,
  `completebefore` datetime NOT NULL,
  `completiontime` datetime NOT NULL,
  `taskstatus` varchar(100) NOT NULL,
  `refimages` varchar(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `review` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `promoapplied` varchar(100) NOT NULL,
  `customtemplateid` varchar(100) NOT NULL,
  `totalprice` varchar(100) NOT NULL,
  `instructions` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `restaurantphone` varchar(100) NOT NULL,
  `restaurantaddress` varchar(100) NOT NULL,
  `deliveryfee` varchar(100) NOT NULL,
  `itemsid` varchar(100) NOT NULL,
  `itemsname` varchar(100) NOT NULL,
  `itemsquantity` varchar(100) NOT NULL,
  `itemsprice` varchar(100) NOT NULL,
  `itemstaxrate` varchar(100) NOT NULL,
  `itemstaxvalue` varchar(100) NOT NULL,
  `itemsitemdiscount` varchar(100) NOT NULL,
  `itemstotalitemprice` varchar(100) NOT NULL,
  `itemsinstructions` varchar(100) NOT NULL,
  `itemsitemoptions` varchar(100) NOT NULL,
  `earning` varchar(100) NOT NULL,
  `pricing` varchar(100) NOT NULL,
  `restaurantname` varchar(100) NOT NULL,
  `clientname` varchar(100) NOT NULL,
  `phoneno` varchar(100) NOT NULL,
  `clientaddress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tookan`
--
ALTER TABLE `tookan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tookan`
--
ALTER TABLE `tookan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
