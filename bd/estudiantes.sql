-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-03-2021 a las 00:26:07
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estudiante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `IDE_ESTUDIANTE` int(100) NOT NULL COMMENT 'Este es el código del estudiante',
  `DSC_NOMBRE` varchar(20) COLLATE utf8mb4_spanish2_ci DEFAULT NULL COMMENT 'Este es el nombre del estudiante',
  `DSC_APELLIDOS` varchar(20) COLLATE utf8mb4_spanish2_ci DEFAULT NULL COMMENT 'Estos son los apellidos del estudiante',
  `NUM_EDAD` int(11) NOT NULL COMMENT 'Este es la edad del estudiante',
  `NUM_TELEFONO` varchar(15) COLLATE utf8mb4_spanish2_ci DEFAULT NULL COMMENT 'Es el número de teléfono del estudiante',
  `DSC_CORREO` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL COMMENT 'Este es el correo eléctronico del estudiante',
  `DSC_CURSO` varchar(30) COLLATE utf8mb4_spanish2_ci DEFAULT NULL COMMENT 'Este es el curso del estudiante',
  `NUM_NOTA` int(11) NOT NULL COMMENT 'Esta es la nota del estudiante'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`IDE_ESTUDIANTE`, `DSC_NOMBRE`, `DSC_APELLIDOS`, `NUM_EDAD`, `NUM_TELEFONO`, `DSC_CORREO`, `DSC_CURSO`, `NUM_NOTA`) VALUES
(1, 'Fabricio', 'Hernandez', 19, '63261312', 'fabriciomario01@gmail.com', 'Desarrollo Web II', 100),
(4, 'Bryan', 'Ruiz', 0, '88888888', 'brayitanruiz10@gmail.com', 'Interfaces Gráficas', 0),
(6, 'Marcel ', 'Hernandez', 0, '1111111111', 'marcelgoleador@gmail.com', 'Programación III', 0),
(7, 'Arly', 'Hernandez', 18, '1111111111', 'arlyhernandez@gmail.com', 'Lógica Computacional', 0),
(8, 'Fernando', 'Valverde', 28, '118384849', 'fernandovalverde@gmail.com', 'Interfaces Gráficas', 95),
(9, 'Fernando', 'Torres', 0, '1111111111', 'elninotorres@gmail.com', 'Sociedad del conocimiento', 0),
(10, 'Rodney', 'Herrera', 0, '2334334924', 'rodherrera@gmail.com', 'Inteligencia Artificial', 0),
(11, 'Lorenzo', 'Insigne', 40, '23883223', 'lorenzo@gmail.com', 'Estadistica y Probabilidad', 99),
(12, 'Ronald', 'De Leon Marin', 0, '455966965', 'ronald123@gmail.com', 'Optativa I', 0),
(13, 'Madelyn', 'Maceo', 20, '84738912', 'maceojimenez@gmail.com', 'Desarrollo Web II', 84),
(14, 'Cristian ', 'Gamboa', 0, '847447483', 'gamboa@gmail.com', 'Programación I', 0),
(15, 'Cristian ', 'Oviedo', 33, '843444783', 'coviedo@gmail.com', 'Programación IV', 75),
(16, 'Christian ', 'Bolaños', 0, '345585898', 'culebola@gmail.com', 'Administración de Proyectos', 0),
(17, 'Nicole', 'Contreras', 19, '66588421', 'nicolecon@gmail.com', 'Documentación de Software', 70),
(18, 'Keylor', 'Navas', 0, '644667787', 'sanavas@hotmail.com', 'Métodos de investigación', 0),
(19, 'Debby', 'Arce', 21, '64698787', 'grabrielaarce@hotmail.com', 'Métodos de investigación', 93),
(20, 'Lazaro', 'Campos', 19, '455848292', 'lazarocampos@gmail.com', 'Inteligencia Artificial', 70),
(21, 'Yerson', 'Serrano Carpio', 20, '45748921', 'yersonserranouca@gmail.com', 'Optativa I', 89),
(23, 'Nicole', 'de la O', 21, '283338288', 'nicoledelao@gmail.com', 'Sociedad del conocimiento', 89);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`IDE_ESTUDIANTE`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `IDE_ESTUDIANTE` int(100) NOT NULL AUTO_INCREMENT COMMENT 'Este es el código del estudiante', AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
