-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 18-06-2021 a las 17:12:22
-- Versión del servidor: 10.3.23-MariaDB-0+deb10u1
-- Versión de PHP: 7.3.19-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ProyectoModelacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_dept`
--

CREATE TABLE `datos_dept` (
  `Departamento` varchar(100) NOT NULL,
  `InfluenciaPoblacionFallecidos` float NOT NULL,
  `InfluenciaSintomasFallecidos` float NOT NULL,
  `InfluenciaMuestrasFallecidos` float NOT NULL,
  `InfluenciaVacunadosFallecidos` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_dept`
--

INSERT INTO `datos_dept` (`Departamento`, `InfluenciaPoblacionFallecidos`, `InfluenciaSintomasFallecidos`, `InfluenciaMuestrasFallecidos`, `InfluenciaVacunadosFallecidos`) VALUES
('Sololá', 55.13, 94.71, 95.54, 82.39),
('Totonicapan', 29.9, 95.9, 98.21, 97.91),
('Jalapa', 88.52, 92.21, 99.05, 96.7),
('Baja Verapaz', 12.86, 88.95, 90.73, 64.06),
('Izabal', 54.46, 97.35, 99.3, 99.3),
('Quetzaltenango', 84.14, 94.72, 99.32, 98.46),
('Alta Verapaz', 56.62, 93.29, 93.64, 90.02),
('San Marcos', 23.6, 87.17, 80.76, 69.68),
('Guatemala', 94.23, 98.78, 99.72, 99.26),
('Petén', 20.72, 75.54, 74.83, 51.74);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
