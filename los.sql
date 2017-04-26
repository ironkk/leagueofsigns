-- MySQL dump 10.13  Distrib 5.7.9, for osx10.9 (x86_64)
--
-- Host: localhost    Database: leagueofsigns
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.16-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `liga`
--

DROP TABLE IF EXISTS `liga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `liga` (
  `nombre_liga` varchar(20) NOT NULL,
  `duracion` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `importe` int(11) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`nombre_liga`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `liga`
--

LOCK TABLES `liga` WRITE;
/*!40000 ALTER TABLE `liga` DISABLE KEYS */;
/*!40000 ALTER TABLE `liga` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensaje`
--

DROP TABLE IF EXISTS `mensaje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensaje` (
  `idMensaje` int(11) NOT NULL,
  `fechahora` datetime NOT NULL,
  `emisor` varchar(45) NOT NULL,
  `receptor` varchar(45) NOT NULL,
  `texto` varchar(45) NOT NULL,
  KEY `fk_mensaje_1_idx` (`emisor`),
  KEY `fk_mensaje_2_idx` (`receptor`),
  CONSTRAINT `fk_mensaje_1` FOREIGN KEY (`emisor`) REFERENCES `usuario` (`nombre_usu`) ON UPDATE CASCADE,
  CONSTRAINT `fk_mensaje_2` FOREIGN KEY (`receptor`) REFERENCES `usuario` (`nombre_usu`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensaje`
--

LOCK TABLES `mensaje` WRITE;
/*!40000 ALTER TABLE `mensaje` DISABLE KEYS */;
/*!40000 ALTER TABLE `mensaje` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movimiento`
--

DROP TABLE IF EXISTS `movimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movimiento` (
  `idmovimiento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usu` varchar(45) NOT NULL,
  `tipo` int(11) NOT NULL,
  `importe` int(11) NOT NULL,
  `retiros` int(11) NOT NULL,
  PRIMARY KEY (`idmovimiento`),
  KEY `nombre_usuario_idx` (`nombre_usu`),
  CONSTRAINT `nombre_usuario` FOREIGN KEY (`nombre_usu`) REFERENCES `usuario` (`nombre_usu`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movimiento`
--

LOCK TABLES `movimiento` WRITE;
/*!40000 ALTER TABLE `movimiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `movimiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `nombre_usu` varchar(20) NOT NULL,
  `pass_usu` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `localidad` varchar(15) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `tipo` int(1) NOT NULL,
  `puntuacion` int(10) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `postal` varchar(5) NOT NULL,
  `domicilio` varchar(48) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `provincia` varchar(20) NOT NULL,
  `numero` int(3) NOT NULL,
  `bloque` int(3) NOT NULL,
  `puerta` int(3) NOT NULL,
  `piso` int(3) NOT NULL,
  `cash` int(10) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `estado` int(1) NOT NULL,
  `cookie` varchar(45) DEFAULT NULL,
  `imagenes` blob NOT NULL,
  PRIMARY KEY (`nombre_usu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES ('Jam','huQ2FaUgAN0qg','Jose','Antonio','Igualada','h','jam08700@gmail.com','938053052',1,0,'35122654','08700','Av.montserrat','EspaÃ±a','Barcelona',21,21,2,1,0,'0000-00-00',0,NULL,''),('prueba','','Prueba','pruebApellido','Igualada','h','xavi.manzano5@gmail.com','938053052',1,0,'47112440','08700','wqwwq','EspaÃ±a','Barcelona',3,4,5,6,0,'0000-00-00',0,NULL,''),('prueba2','','Prueba','pruebApellido','Igualada','h','xavi.manzano6@gmail.com','938053052',1,0,'47112440','08700','wqwwq','EspaÃ±a','Barcelona',3,4,5,6,0,'0000-00-00',0,NULL,''),('sasasa','hu0E.l1dCAttI','Xavi','Manzano','Igualada','h','xavi.manzano1@gmail.com','938053052',1,0,'47112440','08700','salndk','EspaÃ±a','Barcelona',3,0,3,4,0,'0000-00-00',0,NULL,''),('xabstyle','hu0E.l1dCAttI','Xavi','Manzano','Igualada','h','xavi.manzano1@gmail.com','938053052',1,0,'47112440','08700','salndk','EspaÃ±a','Barcelona',3,4,5,6,0,'0000-00-00',0,NULL,''),('xabstyle2','huaOl1A/LsPRQ','Xavi','Manzano','Igualada','h','xavi.manzano2@gmail.com','938053052',1,0,'47112440','08700','salndk','EspaÃ±a','Barcelona',3,0,4,5,0,'0000-00-00',0,NULL,''),('xabstyle23','','Xavi','Manzano','Igualada','h','xavi.manzano12@gmail.com','938053052',1,0,'47112440E','08700','wqwwq','EspaÃ±a','Barcelona',2,3,4,5,0,'0000-00-00',0,NULL,''),('xabstyle24','','Xavi','Manzano','Igualada','h','xavi.manzano15@gmail.com','938053052',1,0,'47112440C','08700','wqwwq','EspaÃ±a','Barcelona',2,3,4,5,0,'0000-00-00',0,NULL,''),('xabstyle29','','Xavi','Manzano','Igualada','h','xavi.manzano16@gmail.com','938053052',1,0,'47112440D','08700','wqwwq','EspaÃ±a','Barcelona',2,3,4,5,0,'0000-00-00',0,NULL,'');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario_liga`
--

DROP TABLE IF EXISTS `usuario_liga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario_liga` (
  `usuario` varchar(20) NOT NULL,
  `liga` varchar(45) NOT NULL,
  `relacion` varchar(45) NOT NULL,
  PRIMARY KEY (`usuario`,`liga`),
  KEY `fk_usuario_liga_2_idx` (`liga`),
  CONSTRAINT `fk_usuario_liga_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`nombre_usu`) ON UPDATE CASCADE,
  CONSTRAINT `fk_usuario_liga_2` FOREIGN KEY (`liga`) REFERENCES `liga` (`nombre_liga`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_liga`
--

LOCK TABLES `usuario_liga` WRITE;
/*!40000 ALTER TABLE `usuario_liga` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario_liga` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-26 15:27:38
