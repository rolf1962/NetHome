CREATE DATABASE  IF NOT EXISTS `housemanagement` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `housemanagement`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: lnxsrv    Database: housemanagement
-- ------------------------------------------------------
-- Server version	5.7.25

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `floor`
--

DROP TABLE IF EXISTS `floor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `floor` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `floor`
--

LOCK TABLES `floor` WRITE;
/*!40000 ALTER TABLE `floor` DISABLE KEYS */;
INSERT INTO `floor` VALUES (1,'Erdgeschoss'),(2,'Erstes Obergesc'),(3,'Dachboden');
/*!40000 ALTER TABLE `floor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `household`
--

DROP TABLE IF EXISTS `household`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `household` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Position` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`UserID`),
  CONSTRAINT `FK_UserHousehold` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `household`
--

LOCK TABLES `household` WRITE;
/*!40000 ALTER TABLE `household` DISABLE KEYS */;
INSERT INTO `household` VALUES (4,'links unten'),(5,'links oben');
/*!40000 ALTER TABLE `household` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(40) DEFAULT NULL,
  `FloorID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_RoomFloor` (`FloorID`),
  CONSTRAINT `FK_RoomFloor` FOREIGN KEY (`FloorID`) REFERENCES `floor` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room`
--

LOCK TABLES `room` WRITE;
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
INSERT INTO `room` VALUES (1,'Küche',1),(2,'Badezimmer (Erdgeschoss)',1),(3,'Wohnzimmer',1),(4,'Esszimmer',1),(5,'Hobbyraum',1),(6,'Badezimmer(erstes Obergeschoss)',2),(7,'Schlafzimmer 1',2),(8,'Schlafzimmer 2',2),(9,'Büro',2),(10,'Dachboden',3),(11,'Garage',1),(12,'Garten',1);
/*!40000 ALTER TABLE `room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roominventory`
--

DROP TABLE IF EXISTS `roominventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roominventory` (
  `RoomID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `Description` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`RoomID`,`CategoryID`),
  KEY `FK_Category` (`CategoryID`),
  CONSTRAINT `FK_Category` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`id`),
  CONSTRAINT `FK_Room` FOREIGN KEY (`RoomID`) REFERENCES `room` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roominventory`
--

LOCK TABLES `roominventory` WRITE;
/*!40000 ALTER TABLE `roominventory` DISABLE KEYS */;
/*!40000 ALTER TABLE `roominventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(40) DEFAULT NULL,
  `LastName` varchar(30) DEFAULT NULL,
  `Birthdate` datetime DEFAULT NULL,
  `EMail` varchar(40) DEFAULT NULL,
  `Workplace` varchar(40) DEFAULT NULL,
  `RoomID` int(11) DEFAULT NULL,
  `Money` double(16,2) DEFAULT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_UserRoom` (`RoomID`),
  CONSTRAINT `FK_UserRoom` FOREIGN KEY (`RoomID`) REFERENCES `room` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (4,'Rolf','Jansen','1962-02-24 00:00:00','jansen.rolf@t-online.de','Polizei',NULL,NULL,'rolf','Mittern8',1),(5,'Max','Jansen','2000-04-08 00:00:00','maximilian.jansen@gmx.de','Schule',NULL,0.00,'max','Mittern8',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userwork`
--

DROP TABLE IF EXISTS `userwork`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userwork` (
  `UserID` int(11) NOT NULL,
  `WorkID` int(11) NOT NULL,
  `Date` datetime DEFAULT NULL,
  PRIMARY KEY (`UserID`,`WorkID`),
  KEY `FK_Works` (`WorkID`),
  CONSTRAINT `FK_UsersWork` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`),
  CONSTRAINT `FK_Works` FOREIGN KEY (`WorkID`) REFERENCES `work` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userwork`
--

LOCK TABLES `userwork` WRITE;
/*!40000 ALTER TABLE `userwork` DISABLE KEYS */;
/*!40000 ALTER TABLE `userwork` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `work`
--

DROP TABLE IF EXISTS `work`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `work` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work`
--

LOCK TABLES `work` WRITE;
/*!40000 ALTER TABLE `work` DISABLE KEYS */;
/*!40000 ALTER TABLE `work` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-11 22:50:01
