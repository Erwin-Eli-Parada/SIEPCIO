-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2024 a las 20:29:04
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
-- Estructura de tabla para la tabla `act_economica`
--

CREATE TABLE `act_economica` (
  `id_act_econom` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `actividad_econom` varchar(200) DEFAULT NULL,
  `clave_mun` int(11) DEFAULT NULL,
  `cantidad_h` int(11) DEFAULT NULL,
  `cantidad_m` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `act_economica`
--

INSERT INTO `act_economica` (`id_act_econom`, `cantidad`, `actividad_econom`, `clave_mun`, `cantidad_h`, `cantidad_m`) VALUES
(1, 1, 'Agentes, representantes de ventas y vendedores por catálogo', 1, 0, 1),
(2, 11, 'Albañiles y otros trabajadores en la edificación de construcciones', 1, 11, 0),
(3, 1, 'Artistas interpretativos', 1, 1, 0),
(4, 3, 'Comerciantes en establecimientos', 1, 1, 2),
(5, 3, 'Empleados de ventas y vendedores por teléfono', 1, 1, 2),
(6, 1, 'Funcionarios, legisladores y autoridades gubernamentales', 1, 1, 0),
(7, 2, 'Herreros, cerrajeros, joyeros y artesanos en la elaboración de productos de metal', 1, 2, 0),
(8, 1, 'Jardineros', 1, 1, 0),
(9, 2, 'Ocupaciones no especificadas', 1, 2, 0),
(10, 1, 'Otros profesionistas y técnicos no clasificados anteriormente', 1, 1, 0),
(11, 3, 'Profesores de nivel básico', 1, 2, 1),
(12, 1, 'Secretarias, taquígrafos, mecanógrafos, capturistas de datos y operadores de máquinas de oficina', 1, 0, 1),
(13, 2, 'Trabajadores de apoyo en actividades agropecuarias', 1, 2, 0),
(14, 6, 'Trabajadores de apoyo en la construcción y la plomería', 1, 6, 0),
(15, 40, 'Trabajadores en actividades agrícolas', 1, 38, 2),
(16, 1, 'Trabajadores en actividades silvícolas y forestales', 1, 1, 0),
(17, 2, 'Trabajadores en la elaboración y procesamiento de alimentos, bebidas y productos de tabaco', 1, 0, 2),
(18, 1, 'Trabajadores en la preparación y servicio de alimentos y bebidas en establecimientos', 1, 0, 1),
(19, 1, 'Trabajadores en servicios de protección y vigilancia', 1, 1, 0),
(20, 1, 'Vendedores ambulantes de alimentos', 1, 0, 1),
(21, 1, 'Administradores y mercadólogos', 3, 0, 1),
(22, 1, 'Agentes, representantes de ventas y vendedores por catálogo', 3, 0, 1),
(23, 7, 'Albañiles y otros trabajadores en la edificación de construcciones', 3, 7, 0),
(24, 4, 'Artesanos y trabajadores en la elaboración de productos de cerámica, vidrio, azulejo y similares', 3, 0, 4),
(25, 2, 'Artesanos y trabajadores en la elaboración de productos de madera', 3, 2, 0),
(26, 1, 'Cajeros, cobradores y pagadores', 3, 0, 1),
(27, 30, 'Comerciantes en establecimientos', 3, 4, 26),
(28, 15, 'Conductores de transporte terrestre con motor', 3, 15, 0),
(29, 9, 'Empleados de ventas y vendedores por teléfono', 3, 1, 8),
(30, 1, 'Encuestadores y codificadores', 3, 0, 1),
(31, 3, 'Funcionarios, legisladores y autoridades gubernamentales', 3, 2, 1),
(32, 2, 'Herreros, cerrajeros, joyeros y artesanos en la elaboración de productos de metal', 3, 2, 0),
(33, 3, 'Lavanderos y planchadores', 3, 0, 3),
(34, 1, 'Médicos generales y dentistas', 3, 1, 0),
(35, 1, 'Moldeadores, soldadores, hojalateros y pintores de metales', 3, 1, 0),
(36, 1, 'Ocupaciones no especificadas', 3, 1, 0),
(37, 1, 'Operadores de máquinas en la elaboración de alimentos, bebidas y tabaco', 3, 0, 1),
(38, 1, 'Otros especialistas en salud', 3, 0, 1),
(39, 1, 'Otros profesores y especialistas en docencia, no clasificados anteriormente', 3, 0, 1),
(40, 2, 'Presidentes y directores generales', 3, 1, 1),
(41, 26, 'Profesores de nivel básico', 3, 11, 15),
(42, 1, 'Recepcionistas, trabajadores que brindan información y telefonistas', 3, 0, 1),
(43, 20, 'Trabajadores de apoyo en actividades agropecuarias', 3, 20, 0),
(44, 5, 'Trabajadores de apoyo en la construcción y la plomería', 3, 5, 0),
(45, 1, 'Trabajadores de apoyo en la industria', 3, 1, 0),
(46, 1, 'Trabajadores de apoyo en salud', 3, 0, 1),
(47, 1, 'Trabajadores de la Armada, Ejército y Fuerza Aérea', 3, 1, 0),
(48, 3, 'Trabajadores de limpieza, recamaristas, mozos de limpieza y limpiadores de calzado', 3, 3, 0),
(49, 6, 'Trabajadores domésticos', 3, 0, 6),
(50, 184, 'Trabajadores en actividades agrícolas', 3, 179, 5),
(51, 8, 'Trabajadores en actividades ganaderas y en la cría de animales', 3, 8, 0),
(52, 1, 'Trabajadores en actividades silvícolas y forestales', 3, 1, 0),
(53, 1, 'Trabajadores en el control de la operación de transporte', 3, 1, 0),
(54, 22, 'Trabajadores en la elaboración y procesamiento de alimentos, bebidas y productos de tabaco', 3, 3, 19),
(55, 1, 'Trabajadores en la preparación de fibras textiles y tejedores de fibras textiles', 3, 0, 1),
(56, 14, 'Trabajadores en la preparación y servicio de alimentos y bebidas en establecimientos', 3, 1, 13),
(57, 10, 'Trabajadores en servicios de protección y vigilancia', 3, 8, 2),
(58, 4, 'Vendedores ambulantes (excluyendo los de venta de alimentos)', 3, 1, 3),
(59, 4, 'Vendedores ambulantes de alimentos', 3, 2, 2),
(60, 1, 'Yeseros, instaladores de pisos, climas, impermeabilizante, vidrio, etc., plomeros y pintores', 3, 1, 0),
(61, 1, 'Administradores y mercadólogos', 6, 1, 0),
(62, 32, 'Agentes, representantes de ventas y vendedores por catálogo', 6, 6, 16),
(63, 30, 'Albañiles y otros trabajadores en la edificación de construcciones', 6, 30, 0),
(64, 14, 'Artesanos en la elaboración de productos textiles, cuero, piel y similares', 6, 3, 11),
(65, 2, 'Artesanos y trabajadores en la elaboración de productos de cerámica, vidrio, azulejo y similares', 6, 2, 0),
(66, 4, 'Artesanos y trabajadores en la elaboración de productos de hule, caucho, plásticos y de sustancias químicas', 6, 3, 1),
(67, 6, 'Artesanos y trabajadores en la elaboración de productos de madera', 6, 6, 0),
(68, 3, 'Artistas interpretativos', 6, 3, 0),
(69, 4, 'Auxiliares en administración, contabilidad y finanzas', 6, 1, 3),
(70, 1, 'Auxiliares y técnicos en ciencias físicas, matemáticas, biológicas, químicas, del medio ambiente y agronómicas', 6, 1, 0),
(71, 5, 'Auxiliares y técnicos en educación, instructores y capacitadores', 6, 3, 2),
(72, 6, 'Auxiliares y técnicos en informática y en equipos de comunicaciones y grabación', 6, 1, 5),
(73, 1, 'Auxiliares y técnicos industriales, topógrafos, mineros y dibujantes técnicos', 6, 1, 0),
(74, 9, 'Cajeros, cobradores y pagadores', 6, 3, 6),
(75, 6, 'Cargadores', 6, 6, 0),
(76, 53, 'Comerciantes en establecimientos', 6, 13, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autoadscripcion`
--

CREATE TABLE `autoadscripcion` (
  `id_autoadscripcion` int(11) NOT NULL,
  `clave_mun` int(11) DEFAULT NULL,
  `porcentaje_ads_ind` double NOT NULL,
  `ads_ind` tinyint(1) GENERATED ALWAYS AS (case when `porcentaje_ads_ind` >= 40 then 1 else 0 end) STORED,
  `porcentaje_ads_afro` double NOT NULL,
  `ads_afro` tinyint(1) GENERATED ALWAYS AS (case when `porcentaje_ads_afro` >= 40 then 1 else 0 end) STORED
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autoadscripcion`
--

INSERT INTO `autoadscripcion` (`id_autoadscripcion`, `clave_mun`, `porcentaje_ads_ind`, `porcentaje_ads_afro`) VALUES
(1, 1, 92, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `idcarrera` int(11) NOT NULL,
  `carrera` varchar(200) DEFAULT NULL,
  `porcentaje` double DEFAULT NULL,
  `clave_mun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`idcarrera`, `carrera`, `porcentaje`, `clave_mun`) VALUES
(1, 'Administración turística y de restaurantes', 0.38, 1),
(2, 'Arquitectura y urbanismo', 0.38, 1),
(3, 'Biología', 0.38, 1),
(4, 'Contabilidad y fiscalización', 0.19, 1),
(5, 'Derecho', 0.56, 1),
(6, 'Diseño curricular y pedagogía', 0.75, 1),
(7, 'Electricidad y generación de energía', 0.38, 1),
(8, 'Enfermería general y obstetricia', 0.56, 1),
(9, 'Gastronomía y servicios de alimentos', 0.38, 1),
(10, 'Ingeniería Industrial', 0.19, 1),
(11, 'Mecánica y profesiones afines al trabajo metálico', 0.19, 1),
(12, 'Música', 0.19, 1),
(13, 'Planes multidisciplinarios o generales del campo de administración y gestión', 0.19, 1),
(14, 'Producción y explotación agrícola y ganadera', 0.38, 1),
(15, 'Sin carrera', 94.56, 1),
(16, 'Sociología y antropología', 0.38, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educacion`
--

CREATE TABLE `educacion` (
  `id_educacion` int(11) NOT NULL,
  `asistencia` varchar(45) DEFAULT NULL,
  `porcentaje` double DEFAULT NULL,
  `clave_mun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `educacion`
--

INSERT INTO `educacion` (`id_educacion`, `asistencia`, `porcentaje`, `clave_mun`) VALUES
(1, 'Asiste', 95.28, 1),
(2, 'No asiste', 4.72, 1),
(3, 'Asiste', 91.6, 3),
(4, 'No asiste', 8.4, 3),
(5, 'Asiste', 89.46, 6),
(6, 'No asiste', 10.54, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `clave_loc` int(11) NOT NULL,
  `nombre_localidad` varchar(100) NOT NULL,
  `poblacion_total` int(11) NOT NULL,
  `poblacion_ind` int(11) NOT NULL,
  `poblacion_afro` int(11) NOT NULL,
  `numero_hablantes` int(11) NOT NULL,
  `clave_num` int(11) NOT NULL,
  `altitud` varchar(100) NOT NULL,
  `longitud` varchar(100) NOT NULL,
  `latitud` varchar(100) NOT NULL,
  `poblacion_fem` int(11) NOT NULL,
  `poblacion_mas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`clave_loc`, `nombre_localidad`, `poblacion_total`, `poblacion_ind`, `poblacion_afro`, `numero_hablantes`, `clave_num`, `altitud`, `longitud`, `latitud`, `poblacion_fem`, `poblacion_mas`) VALUES
(1, 'Abejones', 841, 815, 1, 767, 1, '2254', ' 96°36\'29.427\" W', '17°26\'08.708\" N', 481, 360),
(2, 'Acatlán de Pérez Figueroa', 6341, 570, 59, 223, 2, '131', ' 96°36\'27.396\" W', '18°32\'18.828\" N', 3343, 2998),
(3, 'Agua Escondida', 10, 0, 0, 0, 2, '240', ' 96°35\'26.486\" W', '18°28\'42.040\" N', 3, 7),
(4, 'Santiago Pinotepa Nacional', 33726, 12040, 10112, 4940, 6, '205', ' 98°03\'01.251\" W', '16°20\'20.433\" N', 17513, 16213);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mujeres`
--

CREATE TABLE `mujeres` (
  `id_mujeres` int(11) NOT NULL,
  `poblacion_fem_3_5` int(11) NOT NULL,
  `poblacion_fem_6_11` int(11) NOT NULL,
  `poblacion_fem_12_14` int(11) NOT NULL,
  `poblacion_fem_15_49` int(11) NOT NULL,
  `poblacion_fem_60_mas` int(11) NOT NULL,
  `clave_loc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mujeres`
--

INSERT INTO `mujeres` (`id_mujeres`, `poblacion_fem_3_5`, `poblacion_fem_6_11`, `poblacion_fem_12_14`, `poblacion_fem_15_49`, `poblacion_fem_60_mas`, `clave_loc`) VALUES
(1, 21, 45, 40, 234, 76, 1),
(2, 169, 350, 161, 1670, 473, 2),
(3, 0, 0, 0, 1, 0, 3);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_educativo`
--

CREATE TABLE `nivel_educativo` (
  `id_nivel_edu` int(11) NOT NULL,
  `nivel_edu` varchar(45) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `clave_mun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nivel_educativo`
--

INSERT INTO `nivel_educativo` (`id_nivel_edu`, `nivel_edu`, `cantidad`, `clave_mun`) VALUES
(1, 'Primaria', 96, 1),
(2, 'Secundaria', 108, 1),
(3, 'Posbasico', 161, 1),
(4, 'Primaria', 5112, 2),
(5, 'Secundaria', 7186, 2),
(6, 'Posbasico', 8124, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_salud`
--

CREATE TABLE `servicio_salud` (
  `id_servicio_salud` int(11) NOT NULL,
  `servicio_salud` varchar(200) DEFAULT NULL,
  `porcentaje` double DEFAULT NULL,
  `clave_mun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicio_salud`
--

INSERT INTO `servicio_salud` (`id_servicio_salud`, `servicio_salud`, `porcentaje`, `clave_mun`) VALUES
(1, 'C.S. u Hospital de la SSA, SP o ISBienestar', 95.82, 1),
(2, 'Consultorio, clínica u hospital privado', 0.78, 1),
(3, 'IMSS', 1.31, 1),
(4, 'ISSSTE', 1.17, 1),
(5, 'No se atiende', 0.91, 1),
(6, 'Centro de Salud u Hospital de la SSA, Seguro Popular o Instituto de Salud para el Bienestar', 77.75, 3),
(7, 'Consultorio de farmacia', 1.12, 3),
(8, 'Consultorio, clínica u hospital privado', 13.49, 3),
(9, 'IMSS', 0.64, 3),
(10, 'ISSSTE', 4.34, 3),
(11, 'No se atiende', 0.8, 3),
(12, 'Otro lugar', 1.12, 3),
(13, 'PEMEX, Defensa o Marina', 0.72, 3),
(14, 'Centro de Salud u Hospital de la SSA, Seguro Popular o Instituto de Salud para el Bienestar', 48.05, 6),
(15, 'Consultorio de farmacia', 8, 6),
(16, 'Consultorio, clínica u hospital privado', 21.08, 6),
(17, 'IMSS', 10.84, 6),
(18, 'IMSS-PROSPERA o IMSS-BIENESTAR', 0.24, 6),
(19, 'ISSSTE', 8.61, 6),
(20, 'ISSSTE estatal', 0.08, 6),
(21, 'No especificado', 0.12, 6),
(22, 'No se atiende', 1.3, 6),
(23, 'Otro lugar', 0.32, 6),
(24, 'PEMEX, Defensa o Marina', 1.34, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `situacion_pob`
--

CREATE TABLE `situacion_pob` (
  `acceso_serv_salud` int(11) NOT NULL,
  `econo_activos` int(11) NOT NULL,
  `viviendas_hab` int(11) NOT NULL,
  `viviendas_hab_sin_serv` int(11) NOT NULL,
  `clave_loc` int(11) NOT NULL,
  `id_spi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `situacion_pob`
--

INSERT INTO `situacion_pob` (`acceso_serv_salud`, `econo_activos`, `viviendas_hab`, `viviendas_hab_sin_serv`, `clave_loc`, `id_spi`) VALUES
(793, 95, 216, 1, 1, 1),
(4320, 2979, 1859, 4, 2, 2),
(7, 10, 6, 6, 3, 3),
(793, 95, 216, 1, 4, 4),
(4320, 2979, 1859, 4, 2, 5),
(7, 10, 6, 6, 3, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transporte_escolar`
--

CREATE TABLE `transporte_escolar` (
  `id_transporte` int(11) NOT NULL,
  `transporte` varchar(45) DEFAULT NULL,
  `porcentaje` double DEFAULT NULL,
  `clave_mun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `transporte_escolar`
--

INSERT INTO `transporte_escolar` (`id_transporte`, `transporte`, `porcentaje`, `clave_mun`) VALUES
(1, 'Caminar', 100, 1),
(2, 'Automóvil o camioneta', 5.03, 3),
(3, 'Caminar', 89.05, 3),
(4, 'Camión, autobús, combi, colectivo', 2.07, 3),
(5, 'Motocicleta o motoneta', 2.66, 3),
(6, 'No contestado', 0.89, 3),
(7, 'Taxi (sitio, calle, otro)', 0.3, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `act_economica`
--
ALTER TABLE `act_economica`
  ADD PRIMARY KEY (`id_act_econom`),
  ADD KEY `clave_mun3_idx` (`clave_mun`);

--
-- Indices de la tabla `autoadscripcion`
--
ALTER TABLE `autoadscripcion`
  ADD PRIMARY KEY (`id_autoadscripcion`),
  ADD KEY `clave_mun` (`clave_mun`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`idcarrera`),
  ADD KEY `clave_mun_idx` (`clave_mun`);

--
-- Indices de la tabla `educacion`
--
ALTER TABLE `educacion`
  ADD PRIMARY KEY (`id_educacion`),
  ADD KEY `clave_mun4_idx` (`clave_mun`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`clave_loc`),
  ADD KEY `clave_num` (`clave_num`);

--
-- Indices de la tabla `mujeres`
--
ALTER TABLE `mujeres`
  ADD PRIMARY KEY (`id_mujeres`),
  ADD KEY `clave_loc` (`clave_loc`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`clave_mun`);

--
-- Indices de la tabla `nivel_educativo`
--
ALTER TABLE `nivel_educativo`
  ADD PRIMARY KEY (`id_nivel_edu`),
  ADD KEY `clave_mun_idx` (`clave_mun`);

--
-- Indices de la tabla `servicio_salud`
--
ALTER TABLE `servicio_salud`
  ADD PRIMARY KEY (`id_servicio_salud`),
  ADD KEY `clave_mun_idx` (`clave_mun`);

--
-- Indices de la tabla `situacion_pob`
--
ALTER TABLE `situacion_pob`
  ADD PRIMARY KEY (`id_spi`),
  ADD KEY `clave_loc` (`clave_loc`);

--
-- Indices de la tabla `transporte_escolar`
--
ALTER TABLE `transporte_escolar`
  ADD PRIMARY KEY (`id_transporte`),
  ADD KEY `clave_mun5_idx` (`clave_mun`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `act_economica`
--
ALTER TABLE `act_economica`
  ADD CONSTRAINT `clave_mun3` FOREIGN KEY (`clave_mun`) REFERENCES `municipio` (`clave_mun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `autoadscripcion`
--
ALTER TABLE `autoadscripcion`
  ADD CONSTRAINT `autoadscripcion_ibfk_1` FOREIGN KEY (`clave_mun`) REFERENCES `municipio` (`clave_mun`);

--
-- Filtros para la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD CONSTRAINT `clave_mun` FOREIGN KEY (`clave_mun`) REFERENCES `municipio` (`clave_mun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `educacion`
--
ALTER TABLE `educacion`
  ADD CONSTRAINT `clave_mun4` FOREIGN KEY (`clave_mun`) REFERENCES `municipio` (`clave_mun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD CONSTRAINT `localidad_ibfk_1` FOREIGN KEY (`clave_num`) REFERENCES `municipio` (`clave_mun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mujeres`
--
ALTER TABLE `mujeres`
  ADD CONSTRAINT `mujeres_ibfk_1` FOREIGN KEY (`clave_loc`) REFERENCES `localidad` (`clave_loc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `nivel_educativo`
--
ALTER TABLE `nivel_educativo`
  ADD CONSTRAINT `clave_mun6` FOREIGN KEY (`clave_mun`) REFERENCES `municipio` (`clave_mun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `servicio_salud`
--
ALTER TABLE `servicio_salud`
  ADD CONSTRAINT `clave_mun2` FOREIGN KEY (`clave_mun`) REFERENCES `municipio` (`clave_mun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `situacion_pob`
--
ALTER TABLE `situacion_pob`
  ADD CONSTRAINT `situacion_pob_ibfk_1` FOREIGN KEY (`clave_loc`) REFERENCES `localidad` (`clave_loc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `transporte_escolar`
--
ALTER TABLE `transporte_escolar`
  ADD CONSTRAINT `clave_mun5` FOREIGN KEY (`clave_mun`) REFERENCES `municipio` (`clave_mun`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
