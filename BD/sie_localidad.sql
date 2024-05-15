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
-- Table structure for table `localidad`
--

DROP TABLE IF EXISTS `localidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `localidad` (
  `clave_loc` int NOT NULL,
  `nombre_localidad` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `poblacion_total` int NOT NULL,
  `poblacion_ind` int NOT NULL,
  `poblacion_afro` int NOT NULL,
  `numero_hablantes` int NOT NULL,
  `clave_num` int NOT NULL,
  `altitud` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `longitud` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `latitud` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `poblacion_fem` int NOT NULL,
  `poblacion_mas` int NOT NULL,
  PRIMARY KEY (`clave_loc`),
  KEY `clave_num` (`clave_num`),
  CONSTRAINT `localidad_ibfk_1` FOREIGN KEY (`clave_num`) REFERENCES `municipio` (`clave_mun`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `localidad`
--

LOCK TABLES `localidad` WRITE;
/*!40000 ALTER TABLE `localidad` DISABLE KEYS */;
INSERT INTO `localidad` VALUES (1,'Abejones',841,815,1,767,1,'2254',' 96°36\'29.427\" W','17°26\'08.708\" N',481,360),(2,'Acatlán de Pérez Figueroa',6341,570,59,223,2,'131',' 96°36\'27.396\" W','18°32\'18.828\" N',3343,2998),(3,'Agua Escondida',10,0,0,0,2,'240',' 96°35\'26.486\" W','18°28\'42.040\" N',3,7),(4,'Santiago Pinotepa Nacional',33726,12040,10112,4940,6,'205',' 98°03\'01.251\" W','16°20\'20.433\" N',17513,16213);
/*!40000 ALTER TABLE `localidad` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-15 12:49:47
