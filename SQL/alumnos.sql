-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2022 a las 16:32:59
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alumnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `ID_Alumno` int(11) NOT NULL,
  `Nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido_Paterno` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido_Materno` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Edad` int(3) NOT NULL,
  `Fecha_Nto` date NOT NULL,
  `Sexo` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `Campus` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ID_Alumno`, `Nombre`, `Apellido_Paterno`, `Apellido_Materno`, `Edad`, `Fecha_Nto`, `Sexo`, `Campus`) VALUES
(1, 'Ulises', 'Navarro', 'Ruiz', 25, '1997-01-30', 'Masculino', 'Electronica'),
(2, 'Lucia', 'Hernandez', 'Vï¿½squez', 23, '1999-04-13', 'Femenino', 'Sistemas'),
(4, 'Jose', 'CastaÃ±eda', 'Martinez', 32, '2018-02-01', 'Masculino', 'Sistemas'),
(5, 'Maria Fernanda', 'Villarreal', 'Fernandez', 21, '2022-07-07', 'Masculino', 'Administracion'),
(6, 'Luis', 'CastaÃ±eda', 'Solis', 34, '2022-07-01', 'Masculino', ''),
(7, 'fgjhfg', 'fgh', 'fghfg', 76, '2022-07-01', 'Masculino', 'Mecatronica'),
(9, 'vbnvbn', 'vbnvbn', 'tghj', 6, '2022-07-07', 'Masculino', 'Administracion'),
(10, 'hjk', 'hjk', 'hjk', 8, '2022-07-06', '', 'Administracion'),
(11, 'hjghj', 'ghjghj', 'ghjghj', 6, '2022-05-12', 'Masculino', 'Administracion'),
(13, 'Ana', 'Adame', 'Campos', 55, '2022-03-10', 'Femenino', 'Sistemas'),
(14, 'Jonhatan', 'Gamez', 'Portillo', 29, '1993-03-10', 'Masculino', 'Sistemas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID_Alumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `ID_Alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
