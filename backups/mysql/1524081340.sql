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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES (7,'Wilson','Hulme','wlhulme','3kgPD6crIrJgjsK','a8231fac8bd62506230e652ce59a6341c4e905e94c975370a32cec0be1fa6bcf8f31caed6c895dedd2d91f1740fe238330312d398c18d0fa68836f483b230165','wlhulme@gmail.com','8013199001','84097','Administrator',0),(8,'eildon','hulm','eildon','5niBc7YwzW1s0PR','6189da2b52146ca817f831fee462b0b4c4b43285806cf3704917d89519020e586818d70e957227218858108d6314bdbfe83de6bf28962f10e5e2c5d241432fa3','test@test','8013152','51253','Administrator',0),(10,'test','test','testa','QxZFTgXccWekWZ0','7740554333532eedcbe346a59ab643d7d0ac9798527073833df150dbdedf2129d015ce076d9450799903478483cff8b0b5e31839376caba1eed2ae6e3924bd15','test@sdfas','test','26546','Administrator',1),(11,'asdf','asdf','asdf','dwhSZqkTrZzR4Aw','9caa3bc28d0d873406ea9c7fffcbbf29fed5a2af45c95200dae4045cba76c0e925095142abf31ab5d88bf205583630dd591ea29aab607bf71ab2b0f9cee7c7d8','asdf@asdf','asdf','asdf','Consumer',1);
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER agecheck Before INSERT ON Users FOR EACH ROW IF NEW.Zip_Code < 0 THEN Set NEW.Zip_Code=0; END IF */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER logincheck Before INSERT ON Users FOR EACH ROW IF NEW.Logged_in < 0 THEN Set NEW.Logged_in=0; END IF */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Temporary table structure for view `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!50001 DROP VIEW IF EXISTS `admins`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `admins` AS SELECT 
 1 AS `User_ID`,
 1 AS `First_Name`,
 1 AS `Last_Name`,
 1 AS `Username`,
 1 AS `Salt`,
 1 AS `PassHash`,
 1 AS `Email`,
 1 AS `Phone_number`,
 1 AS `Zip_Code`,
 1 AS `UserRole`,
 1 AS `Logged_in`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `admins`
--

/*!50001 DROP VIEW IF EXISTS `admins`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `admins` AS select `Users`.`User_ID` AS `User_ID`,`Users`.`First_Name` AS `First_Name`,`Users`.`Last_Name` AS `Last_Name`,`Users`.`Username` AS `Username`,`Users`.`Salt` AS `Salt`,`Users`.`PassHash` AS `PassHash`,`Users`.`Email` AS `Email`,`Users`.`Phone_number` AS `Phone_number`,`Users`.`Zip_Code` AS `Zip_Code`,`Users`.`UserRole` AS `UserRole`,`Users`.`Logged_in` AS `Logged_in` from `Users` where (`Users`.`UserRole` = 'Administrator') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-18 12:55:40
