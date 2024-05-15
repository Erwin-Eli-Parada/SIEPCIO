CREATE DATABASE  IF NOT EXISTS `sie` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sie`;
-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: sie
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `act_economica`
--

DROP TABLE IF EXISTS `act_economica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `act_economica` (
  `id_act_econom` int NOT NULL,
  `cantidad` int DEFAULT NULL,
  `actividad_econom` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `clave_mun` int DEFAULT NULL,
  `cantidad_h` int DEFAULT NULL,
  `cantidad_m` int DEFAULT NULL,
  PRIMARY KEY (`id_act_econom`),
  KEY `clave_mun3_idx` (`clave_mun`),
  CONSTRAINT `clave_mun3` FOREIGN KEY (`clave_mun`) REFERENCES `municipio` (`clave_mun`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `act_economica`
--

LOCK TABLES `act_economica` WRITE;
/*!40000 ALTER TABLE `act_economica` DISABLE KEYS */;
INSERT INTO `act_economica` VALUES (1,1,'Agentes, representantes de ventas y vendedores por catálogo',1,0,1),(2,11,'Albañiles y otros trabajadores en la edificación de construcciones',1,11,0),(3,1,'Artistas interpretativos',1,1,0),(4,3,'Comerciantes en establecimientos',1,1,2),(5,3,'Empleados de ventas y vendedores por teléfono',1,1,2),(6,1,'Funcionarios, legisladores y autoridades gubernamentales',1,1,0),(7,2,'Herreros, cerrajeros, joyeros y artesanos en la elaboración de productos de metal',1,2,0),(8,1,'Jardineros',1,1,0),(9,2,'Ocupaciones no especificadas',1,2,0),(10,1,'Otros profesionistas y técnicos no clasificados anteriormente',1,1,0),(11,3,'Profesores de nivel básico',1,2,1),(12,1,'Secretarias, taquígrafos, mecanógrafos, capturistas de datos y operadores de máquinas de oficina',1,0,1),(13,2,'Trabajadores de apoyo en actividades agropecuarias',1,2,0),(14,6,'Trabajadores de apoyo en la construcción y la plomería',1,6,0),(15,40,'Trabajadores en actividades agrícolas',1,38,2),(16,1,'Trabajadores en actividades silvícolas y forestales',1,1,0),(17,2,'Trabajadores en la elaboración y procesamiento de alimentos, bebidas y productos de tabaco',1,0,2),(18,1,'Trabajadores en la preparación y servicio de alimentos y bebidas en establecimientos',1,0,1),(19,1,'Trabajadores en servicios de protección y vigilancia',1,1,0),(20,1,'Vendedores ambulantes de alimentos',1,0,1),(21,1,'Administradores y mercadólogos',3,0,1),(22,1,'Agentes, representantes de ventas y vendedores por catálogo',3,0,1),(23,7,'Albañiles y otros trabajadores en la edificación de construcciones',3,7,0),(24,4,'Artesanos y trabajadores en la elaboración de productos de cerámica, vidrio, azulejo y similares',3,0,4),(25,2,'Artesanos y trabajadores en la elaboración de productos de madera',3,2,0),(26,1,'Cajeros, cobradores y pagadores',3,0,1),(27,30,'Comerciantes en establecimientos',3,4,26),(28,15,'Conductores de transporte terrestre con motor',3,15,0),(29,9,'Empleados de ventas y vendedores por teléfono',3,1,8),(30,1,'Encuestadores y codificadores',3,0,1),(31,3,'Funcionarios, legisladores y autoridades gubernamentales',3,2,1),(32,2,'Herreros, cerrajeros, joyeros y artesanos en la elaboración de productos de metal',3,2,0),(33,3,'Lavanderos y planchadores',3,0,3),(34,1,'Médicos generales y dentistas',3,1,0),(35,1,'Moldeadores, soldadores, hojalateros y pintores de metales',3,1,0),(36,1,'Ocupaciones no especificadas',3,1,0),(37,1,'Operadores de máquinas en la elaboración de alimentos, bebidas y tabaco',3,0,1),(38,1,'Otros especialistas en salud',3,0,1),(39,1,'Otros profesores y especialistas en docencia, no clasificados anteriormente',3,0,1),(40,2,'Presidentes y directores generales',3,1,1),(41,26,'Profesores de nivel básico',3,11,15),(42,1,'Recepcionistas, trabajadores que brindan información y telefonistas',3,0,1),(43,20,'Trabajadores de apoyo en actividades agropecuarias',3,20,0),(44,5,'Trabajadores de apoyo en la construcción y la plomería',3,5,0),(45,1,'Trabajadores de apoyo en la industria',3,1,0),(46,1,'Trabajadores de apoyo en salud',3,0,1),(47,1,'Trabajadores de la Armada, Ejército y Fuerza Aérea',3,1,0),(48,3,'Trabajadores de limpieza, recamaristas, mozos de limpieza y limpiadores de calzado',3,3,0),(49,6,'Trabajadores domésticos',3,0,6),(50,184,'Trabajadores en actividades agrícolas',3,179,5),(51,8,'Trabajadores en actividades ganaderas y en la cría de animales',3,8,0),(52,1,'Trabajadores en actividades silvícolas y forestales',3,1,0),(53,1,'Trabajadores en el control de la operación de transporte',3,1,0),(54,22,'Trabajadores en la elaboración y procesamiento de alimentos, bebidas y productos de tabaco',3,3,19),(55,1,'Trabajadores en la preparación de fibras textiles y tejedores de fibras textiles',3,0,1),(56,14,'Trabajadores en la preparación y servicio de alimentos y bebidas en establecimientos',3,1,13),(57,10,'Trabajadores en servicios de protección y vigilancia',3,8,2),(58,4,'Vendedores ambulantes (excluyendo los de venta de alimentos)',3,1,3),(59,4,'Vendedores ambulantes de alimentos',3,2,2),(60,1,'Yeseros, instaladores de pisos, climas, impermeabilizante, vidrio, etc., plomeros y pintores',3,1,0),(61,1,'Administradores y mercadólogos',6,1,0),(62,32,'Agentes, representantes de ventas y vendedores por catálogo',6,6,16),(63,30,'Albañiles y otros trabajadores en la edificación de construcciones',6,30,0),(64,14,'Artesanos en la elaboración de productos textiles, cuero, piel y similares',6,3,11),(65,2,'Artesanos y trabajadores en la elaboración de productos de cerámica, vidrio, azulejo y similares',6,2,0),(66,4,'Artesanos y trabajadores en la elaboración de productos de hule, caucho, plásticos y de sustancias químicas',6,3,1),(67,6,'Artesanos y trabajadores en la elaboración de productos de madera',6,6,0),(68,3,'Artistas interpretativos',6,3,0),(69,4,'Auxiliares en administración, contabilidad y finanzas',6,1,3),(70,1,'Auxiliares y técnicos en ciencias físicas, matemáticas, biológicas, químicas, del medio ambiente y agronómicas',6,1,0),(71,5,'Auxiliares y técnicos en educación, instructores y capacitadores',6,3,2),(72,6,'Auxiliares y técnicos en informática y en equipos de comunicaciones y grabación',6,1,5),(73,1,'Auxiliares y técnicos industriales, topógrafos, mineros y dibujantes técnicos',6,1,0),(74,9,'Cajeros, cobradores y pagadores',6,3,6),(75,6,'Cargadores',6,6,0),(76,53,'Comerciantes en establecimientos',6,13,40);
/*!40000 ALTER TABLE `act_economica` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-15 12:49:48
