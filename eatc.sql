-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: EATC
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Current Database: `EATC`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `EATC` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `EATC`;

--
-- Table structure for table `Animals`
--

DROP TABLE IF EXISTS `Animals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Animals` (
  `Species_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Species_Type` varchar(255) NOT NULL,
  UNIQUE KEY `Species_ID` (`Species_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Animals`
--

LOCK TABLES `Animals` WRITE;
/*!40000 ALTER TABLE `Animals` DISABLE KEYS */;
/*!40000 ALTER TABLE `Animals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Offers`
--

DROP TABLE IF EXISTS `Offers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Offers` (
  `Offer_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Amount` int(11) NOT NULL,
  `Buyer_ID` int(11) DEFAULT NULL,
  `Seller_ID` int(11) DEFAULT NULL,
  `Post_ID` int(255) DEFAULT NULL,
  `Accepted` tinyint(1) DEFAULT NULL,
  UNIQUE KEY `Offer_ID` (`Offer_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Offers`
--

LOCK TABLES `Offers` WRITE;
/*!40000 ALTER TABLE `Offers` DISABLE KEYS */;
/*!40000 ALTER TABLE `Offers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Post`
--

DROP TABLE IF EXISTS `Post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Post` (
  `Post_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Animal_Name` varchar(255) DEFAULT NULL,
  `Diet` varchar(255) DEFAULT NULL,
  `Age` int(4) DEFAULT NULL,
  `Picture` varchar(255) DEFAULT NULL,
  `Weight` varchar(255) DEFAULT NULL,
  `Height` varchar(255) DEFAULT NULL,
  `Status_of_Sale` tinyint(1) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Owner_ID` int(11) DEFAULT NULL,
  `Species_ID` int(11) DEFAULT NULL,
  UNIQUE KEY `Post_ID` (`Post_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Post`
--

LOCK TABLES `Post` WRITE;
/*!40000 ALTER TABLE `Post` DISABLE KEYS */;
/*!40000 ALTER TABLE `Post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Users` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `Username` varchar(255) NOT NULL,
  `Salt` varchar(255) NOT NULL,
  `PassHash` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone_number` varchar(10) DEFAULT NULL,
  `Zip_Code` varchar(5) DEFAULT NULL,
  `UserRole` enum('Administrator','Consumer') DEFAULT NULL,
  `Logged_in` int(1) DEFAULT NULL,
  UNIQUE KEY `User_ID` (`User_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES (7,'Wilson','Hulme','wlhulme','3kgPD6crIrJgjsK','a8231fac8bd62506230e652ce59a6341c4e905e94c975370a32cec0be1fa6bcf8f31caed6c895dedd2d91f1740fe238330312d398c18d0fa68836f483b230165','wlhulme@gmail.com','8013199001','84097','Administrator',0),(8,'eildon','hulm','eildon','5niBc7YwzW1s0PR','6189da2b52146ca817f831fee462b0b4c4b43285806cf3704917d89519020e586818d70e957227218858108d6314bdbfe83de6bf28962f10e5e2c5d241432fa3','test@test','8013152','51253','Administrator',0),(10,'test','test','testa','QxZFTgXccWekWZ0','7740554333532eedcbe346a59ab643d7d0ac9798527073833df150dbdedf2129d015ce076d9450799903478483cff8b0b5e31839376caba1eed2ae6e3924bd15','test@sdfas','test','26546','Administrator',1);
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-15  9:24:33
