-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: hospital
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

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
-- Table structure for table `healthCare`
--

DROP TABLE IF EXISTS `healthCare`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `healthCare` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customer` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `aadharcard` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `age` text NOT NULL,
  `gender` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `weight(Birth)` decimal(2,0) NOT NULL,
  `diagnosis` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `admission(date)` date NOT NULL,
  `admission(wt)` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `addarcard` (`aadharcard`),
  FULLTEXT KEY `age` (`age`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `healthCare`
--

LOCK TABLES `healthCare` WRITE;
/*!40000 ALTER TABLE `healthCare` DISABLE KEYS */;
INSERT INTO `healthCare` VALUES (1,'mnbvcxz','lkjhgfdsa','111122223333','20','male',2,'poiuytrewq','2022-01-27',50),(2,'Bunny','Park','444455556666','2','others',5,'Dying too much!','2022-01-25',6),(3,'Sam','Good Town','555566662222','15','male',2,'Diagnosed with asthama','2022-02-03',32),(4,'Bro of Kakarot','Chikyuu mo iruyo','555577778882','15 years','male',6,'Dying too much!','2022-01-28',61),(5,'Kakarot','Chikyuu','555577778888','','male',6,'Crying too much!','2022-01-28',60),(6,'Bro of Kakarot','Chikyuu mo','555577778889','15 years','male',6,'Dying too much!','2022-01-28',61),(7,'Gaurish','Punjab','777788889999','47','male',3,'No','2022-01-31',68),(8,'Rahul','India','444433332222','21','male',3,'Diagnosed with Infection','2022-02-02',57),(9,'Raj','Delhi','666611118888','42','male',3,'Diagnosed with Insomnia','2022-02-02',60),(10,'','','','39','others',3,'NOthing','2022-02-03',70),(11,'Ritik','','222200003333','53','female',3,'Glorious','2022-02-26',78),(12,'Randy Orton','','000011119999','42','male',3,'Diagnosed with viper attacks!','2022-02-04',84),(13,'Jatin','','555522223333','40','male',2,'Diagnosed with Insomnia','2022-02-06',72),(14,'Bro of Kakarot','Good Town','67','39','male',2,'Diagnosed with Infection','2022-02-08',72),(15,'Gaurish','Punjab','1708','23','male',25,'Supreme warrior','2022-02-09',60),(16,'John','Final','56','15','male',4,'Glorious','2022-02-08',77),(17,'Ritik','Yessss','11','15','male',6,'Glorious','2022-02-08',72),(18,'Anyone','Anywhere','222222222222','5','male',3,'Its the diagnosis','2022-02-11',32);
/*!40000 ALTER TABLE `healthCare` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'bkm','bookface'),(2,'chirag','bookface');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responseDetails`
--

DROP TABLE IF EXISTS `responseDetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `responseDetails` (
  `aadharcard` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `summary` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `treatment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `investigate` text NOT NULL,
  `discharge(date)` timestamp NOT NULL,
  `discharge(wt)` int NOT NULL,
  KEY `aadharcard` (`aadharcard`),
  CONSTRAINT `responseDetails_ibfk_1` FOREIGN KEY (`aadharcard`) REFERENCES `healthCare` (`aadharcard`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responseDetails`
--

LOCK TABLES `responseDetails` WRITE;
/*!40000 ALTER TABLE `responseDetails` DISABLE KEYS */;
INSERT INTO `responseDetails` VALUES ('777788889999','Everything good','Just made him laugh excessively','Nothing here','2022-01-31 18:30:00',69),('444433332222','Infection is under control now.','Proper treatment is given.','Nothing left to investigate now.','2022-02-03 18:30:00',58),('444433332222','Good','Okay','Done','2022-02-09 18:30:00',78),('444433332222','Good','Okay','Done','2022-02-09 18:30:00',78),('444433332222','YES','YES','YES','2022-02-01 18:30:00',70),('444433332222','This is summary','Okay!','Nothing required her!','2022-02-06 18:30:00',72),('000011119999','RKO','RKO','RKO','2022-02-07 18:30:00',75),('444433332222','Yessssssss','Treatment yoooo','Investttttttttttttttttttttt','2022-02-08 18:30:00',88),('000011119999','lppokij','mnbvcx','kjhgahsd','2022-02-08 18:30:00',70),('000011119999','v','c','x','2022-02-08 18:30:00',78),('000011119999','d','d','d','2022-02-22 18:30:00',70),('000011119999','g','g','g','2022-02-15 18:30:00',78),('000011119999','u','y','h','2022-02-25 18:30:00',45),('67','f','f','f','2022-02-07 18:30:00',78),('67','a','a','a','2022-02-23 18:30:00',70),('67','l','j','v','2022-02-22 18:30:00',70),('67','f','c','g','2022-02-22 18:30:00',70),('67','v','c','x','2022-02-22 18:30:00',70),('1708','AllGood','Yes Given','Nothing','2022-02-08 18:30:00',70),('000011119999','s','c','d','2022-02-22 18:30:00',78),('444433332222','s','s','s','2022-02-24 18:30:00',88),('000011119999','This is a parahgraph\r\nThis is a parahgraph\r\nThis is a parahgraph\r\nThis is a parahgraph\r\nThis is a parahgraphThis is a parahgraph\r\n','This is a parahgraph\r\nThis is a parahgraph\r\nThis is a parahgraph\r\nThis is a parahgraph\r\nThis is a parahgraphThis is a parahgraph\r\n','This is a parahgraph\r\nThis is a parahgraph\r\nThis is a parahgraph\r\nThis is a parahgraph\r\nThis is a parahgraphThis is a parahgraph\r\n','2022-02-22 18:30:00',54),('000011119999','$pdf->Cell(0, 5, \',0,1);\r\n$pdf->Cell(0, 5, \',0,1);\r\n$pdf->Cell(0, 5, \',0,1);\r\n$pdf->Cell(0, 5, \',0,1);\r\n$pdf->Cell(0, 5, \',0,1);$pdf->Cell(0, 5, \',0,1);$pdf->Cell(0, 5, \',0,1);$pdf->Cell(0, 5, \',0,1);$pdf->Cell(0, 5, \',0,1);$pdf->Cell(0, 5, \',0,1);$pdf->Cell(0, 5, \',0,1);$pdf->Cell(0, 5, \',0,1);$pdf->Cell(0, 5, \',0,1);','$pdf->Cell(0, 5, \',0,1);$pdf->Cell(0, 5, \',0,1);$pdf->Cell(0, 5, \',0,1);$pdf->Cell(0, 5, \',0,1);$pdf->Cell(0, 5, \',0,1);$pdf->Cell(0, 5, \',0,1);$pdf->Cell(0, 5, \',0,','$pdf->Cell(0, 5, \',0,1);$pdf->Cell(0, 5, \',0,1);$pdf->Cell(0, 5, \',0,1);$pdf->Cell(0, 5, \',0,1);$pdf->Cell(0, 5, \',0,1);','2022-02-22 18:30:00',78),('000011119999','\r\nLONGTEXT - MariaDB Knowledge Base\r\nhttps://mariadb.com › longtext\r\nA TEXT column with a maximum length of 4,294,967,295 or 4GB ( 232 - 1 ) characters. The effective maximum length is less if the value contains multi-byte ...','\r\nLONGTEXT - MariaDB Knowledge Base\r\nhttps://mariadb.com › longtext\r\nA TEXT column with a maximum length of 4,294,967,295 or 4GB ( 232 - 1 ) characters. The effective maximum length is less if the value contains multi-byte ...','\r\nLONGTEXT - MariaDB Knowledge Base\r\nhttps://mariadb.com › longtext\r\nA TEXT column with a maximum length of 4,294,967,295 or 4GB ( 232 - 1 ) characters. The effective maximum length is less if the value contains multi-byte ...','2022-02-15 18:30:00',80),('000011119999','MultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultivvvv','MultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultivvvv','MultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultiMultivvvv','2022-02-15 18:30:00',55),('000011119999','$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);','$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);','$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);$pdf->Cell(0, 2, \', 0, 1);','2022-02-22 18:30:00',78),('11','qwertyuioplkjhgfdsxcvghjkmnb','qwertyuioplkjhgfdsxcvghjkmnb','qwertyuioplkjhgfdsxcvghjkmnb','2022-02-16 18:30:00',70),('222222222222','This is case summary','This is Treatment given','This is Investigation','2022-02-19 18:30:00',34);
/*!40000 ALTER TABLE `responseDetails` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-23 13:46:56
