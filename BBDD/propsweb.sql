-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: localhost    Database: propsweb
-- ------------------------------------------------------
-- Server version	8.0.32-0ubuntu0.22.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id_user` int unsigned NOT NULL,
  PRIMARY KEY (`id_user`),
  CONSTRAINT `fk_admins_usuarios` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (518),(523);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id_producto` int unsigned NOT NULL AUTO_INCREMENT,
  `categoria` enum('negocio','blog','restaurante','personal') DEFAULT NULL,
  `estilo` enum('moderno','clasico','alegre','colorido','simple') NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `urlimagen` text,
  `urlarchivo` text,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (145,'blog','moderno','Webwing','Pagina perfecta para un blog personal','foto','https://plantillashtmlgratis.com/wp-content/uploads/2019/images/page280/webwing.jpeg','https://plantillashtmlgratis.com/todas-las-plantillas/plantilla/plantillas-html-css-gratis-para-descargar-webwing/'),(146,'restaurante','alegre','Klassy Cafe','Un diseño perfecta para tu cafeteria','foto','https://plantillashtmlgratis.com/wp-content/uploads/2019/images/page280/klassy-cafe.jpeg','https://plantillashtmlgratis.com/todas-las-plantillas/plantilla/plantillas-html-css-gratis-para-descargar-klassy-cafe/'),(147,'blog','simple','Rage','El mejor diseño para tu blog personal de crecimiento','foto','https://plantillashtmlgratis.com/wp-content/uploads/2019/images/page231/rage.jpeg','https://plantillashtmlgratis.com/todas-las-plantillas/plantilla/plantilla-html-gratis-rage/'),(148,'restaurante','simple','Cirpark','El diseño que necesitas si estas pensando montar una hamburgeseria','foto','https://plantillashtmlgratis.com/wp-content/uploads/2019/images/page219/cirpark.jpeg','https://plantillashtmlgratis.com/todas-las-plantillas/plantilla/plantillas-html-css-gratuita-para-descargar-cirpark/'),(169,'negocio','simple','Heustonn','Un diseño simple para tu web de servicios','1678266971heustonn.jpeg','https://plantillashtmlgratis.com/wp-content/uploads/2019/images/page280/heustonn.jpeg','https://plantillashtmlgratis.com/todas-las-plantillas/plantilla/plantilla-html-css-gratis-heustonn/'),(178,'negocio','simple','Sungla','Un diseño minimista para vender tus gafas de diseño','1678349203sungla.jpeg','https://plantillashtmlgratis.com/wp-content/uploads/2019/images/page280/sungla.jpeg','https://plantillashtmlgratis.com/todas-las-plantillas/plantilla/plantilla-web-gratuita-sungla/'),(179,'personal','moderno','Leverage','Quieres darle vida a tu curriculum y hacerte un porfolio','','https://plantillashtmlgratis.com/wp-content/uploads/2019/images/themeforest/leverage-25988106.jpeg','https://plantillashtmlgratis.com/todas-las-plantillas/plantilla/template-web-premium-profesional-leverage/'),(180,'negocio','alegre','Spa Center','¿Necesitas un diseño para tu diseño para tu centro de Spa? Este seria perfecto para ti','','https://plantillashtmlgratis.com/wp-content/uploads/2019/images/page280/spa-center.jpeg','https://plantillashtmlgratis.com/todas-las-plantillas/plantilla/plantillas-html-para-descargar-gratuita-spa-center/');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id_user` int unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `contraseña` varchar(64) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=525 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (493,'pepe','655b3384f3ea9b05bd11d236b6eed2062fef20377653ea52ccdf926bca973733','peep','ruiz'),(516,'cebriian95','655b3384f3ea9b05bd11d236b6eed2062fef20377653ea52ccdf926bca973733','raul','rodri'),(517,'pepe2','5bdaf85d042a5f540dc73faa2a0eb4fb0fe6c5b003b9e20e336fe80f48fb0b94','',''),(518,'admin','189e5db097622386c17bcf22ef721e6832ddce9e5673f3c0dcb42dece62cb4cc','raul','rodri'),(519,'Pepe','508e6ea8880a815c612b9fdb046ec9fae39aee0a64129ec9a8afd35db89314e4','Jose','Ramos'),(520,'Pepe','508e6ea8880a815c612b9fdb046ec9fae39aee0a64129ec9a8afd35db89314e4','Jose','Ramos'),(521,'admin2','a577dbb8b498514ea7e0387002146b59332ab1104948423f85509817cd2bcb74','marco','polo'),(522,'123','a577dbb8b498514ea7e0387002146b59332ab1104948423f85509817cd2bcb74','raul','rodri'),(523,'12e','ae80e31675e8ed13d93f9761f1ed1076d1ee5d02741bb0920122ba4fab676dfd','juan','jes'),(524,'1234E','26bfd0045c51fe8702ec0dbbd603238d4362debc7713ec1ab185f2a954169db6','jjua','mano');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-09 12:40:27
