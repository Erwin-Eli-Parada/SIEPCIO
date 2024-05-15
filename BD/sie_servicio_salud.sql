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
-- Table structure for table `servicio_salud`
--

DROP TABLE IF EXISTS `servicio_salud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servicio_salud` (
  `id_servicio_salud` int NOT NULL,
  `servicio_salud` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `porcentaje` double DEFAULT NULL,
  `clave_mun` int DEFAULT NULL,
  PRIMARY KEY (`id_servicio_salud`),
  KEY `clave_mun_idx` (`clave_mun`),
  CONSTRAINT `clave_mun2` FOREIGN KEY (`clave_mun`) REFERENCES `municipio` (`clave_mun`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicio_salud`
--

LOCK TABLES `servicio_salud` WRITE;
/*!40000 ALTER TABLE `servicio_salud` DISABLE KEYS */;
INSERT INTO `servicio_salud` VALUES (1,'C.S. u Hospital de la SSA, SP o ISBienestar',95.82,1),(2,'Consultorio, clínica u hospital privado',0.78,1),(3,'IMSS',1.31,1),(4,'ISSSTE',1.17,1),(5,'No se atiende',0.91,1),(6,'Centro de Salud u Hospital de la SSA, Seguro Popular o Instituto de Salud para el Bienestar',77.75,3),(7,'Consultorio de farmacia',1.12,3),(8,'Consultorio, clínica u hospital privado',13.49,3),(9,'IMSS',0.64,3),(10,'ISSSTE',4.34,3),(11,'No se atiende',0.8,3),(12,'Otro lugar',1.12,3),(13,'PEMEX, Defensa o Marina',0.72,3),(14,'Centro de Salud u Hospital de la SSA, Seguro Popular o Instituto de Salud para el Bienestar',48.05,6),(15,'Consultorio de farmacia',8,6),(16,'Consultorio, clínica u hospital privado',21.08,6),(17,'IMSS',10.84,6),(18,'IMSS-PROSPERA o IMSS-BIENESTAR',0.24,6),(19,'ISSSTE',8.61,6),(20,'ISSSTE estatal',0.08,6),(21,'No especificado',0.12,6),(22,'No se atiende',1.3,6),(23,'Otro lugar',0.32,6),(24,'PEMEX, Defensa o Marina',1.34,6);
/*!40000 ALTER TABLE `servicio_salud` ENABLE KEYS */;
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
