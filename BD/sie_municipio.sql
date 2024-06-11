-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2024 a las 20:26:52
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sie`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `clave_mun` int(11) NOT NULL,
  `nombre_municipio` varchar(200) NOT NULL,
  `region` varchar(50) NOT NULL,
  `pais` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `violencia_genero` tinyint(1) NOT NULL,
  `analfabetismo` double NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `gobierno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`clave_mun`, `nombre_municipio`, `region`, `pais`, `estado`, `violencia_genero`, `analfabetismo`, `tipo`, `gobierno`) VALUES
(1, 'Abejones', 'SIERRA NORTE', 'México', 'Oaxaca', 0, 15.69560048, 'Indigena', 'sni'),
(2, 'Acatlán de Pérez Figueroa', 'PAPALOAPAN', 'México', 'Oaxaca', 0, 9.294396351, '', 'partido politico'),
(3, 'Mártires de Tacubaya', 'COSTA', 'México', 'Oaxaca', 0, 9.197786999, 'Afro', 'partido politico'),
(4, 'Oaxaca de Juárez', 'VALLES CENTRALES', 'México', 'Oaxaca', 1, 2.090753077, '', 'partido politico'),
(5, 'San Pedro Mixtepec', 'COSTA', 'México', 'Oaxaca', 1, 12.96296296, ' ', 'partido politico'),
(6, 'Santiago Pinotepa Nacional', 'COSTA', 'México', 'Oaxaca', 0, 9.05265043, 'Afro', 'partido politico');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`clave_mun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
