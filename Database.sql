-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: homecare
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adminlogin` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminlogin`
--

LOCK TABLES `adminlogin` WRITE;
/*!40000 ALTER TABLE `adminlogin` DISABLE KEYS */;
INSERT INTO `adminlogin` VALUES ('Hemang Nilesh Thakkar','hemangthakkar2801@gmail.com','1234567890');
/*!40000 ALTER TABLE `adminlogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cleaner`
--

DROP TABLE IF EXISTS `cleaner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cleaner` (
  `Email` varchar(50) NOT NULL,
  `Floor` int(5) NOT NULL,
  `Room` int(5) NOT NULL,
  `Bedroom` int(5) NOT NULL,
  `Kitchen` int(5) NOT NULL,
  `Hall` int(5) NOT NULL,
  `ExtraRoom` int(5) NOT NULL,
  `Bathroom` int(5) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cleaner`
--

LOCK TABLES `cleaner` WRITE;
/*!40000 ALTER TABLE `cleaner` DISABLE KEYS */;
INSERT INTO `cleaner` VALUES ('',0,0,0,0,0,0,0),('janki@gmail.com',2,2,2,2,2,2,2),('payal@gmail.com',5,5,5,5,5,5,5);
/*!40000 ALTER TABLE `cleaner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactpage`
--

DROP TABLE IF EXISTS `contactpage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactpage` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Mobile` bigint(15) NOT NULL,
  `Issue` varchar(150) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactpage`
--

LOCK TABLES `contactpage` WRITE;
/*!40000 ALTER TABLE `contactpage` DISABLE KEYS */;
INSERT INTO `contactpage` VALUES ('','',0,''),('harry','harry@gmail.com',7895462130,'want a maid'),('hhh','hem@gmail.com',7894561230,'hhhhh'),('janki','janki@gmail.com',4587459875,'Want everything');
/*!40000 ALTER TABLE `contactpage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `Name` varchar(50) NOT NULL,
  `Mobile` bigint(15) NOT NULL,
  `Mail` varchar(80) NOT NULL,
  `Password` varchar(30) NOT NULL,
  PRIMARY KEY (`Mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES ('',0,'',''),('janki',7894569874,'janki@gmail.com','qwerty');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maid`
--

DROP TABLE IF EXISTS `maid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maid` (
  `Email` varchar(50) NOT NULL,
  `Service` varchar(25) NOT NULL,
  `Floor` int(11) NOT NULL,
  `Rooms` int(11) NOT NULL,
  `Bedroom` int(11) NOT NULL,
  `Kitchen` int(11) NOT NULL,
  `Hall` int(11) NOT NULL,
  `ExtraRoom` int(11) NOT NULL,
  `Time` varchar(20) NOT NULL,
  `Washroom` int(11) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maid`
--

LOCK TABLES `maid` WRITE;
/*!40000 ALTER TABLE `maid` DISABLE KEYS */;
INSERT INTO `maid` VALUES ('abhishek@gmail.com','Cleaning,Cooking',1,1,1,1,1,1,'Full Time',0),('janki@gmail.com','Cleaning,Cooking',2,2,2,2,2,2,'Part Time',2),('payal@gmail.com','Cleaning,Cooking',5,5,5,5,5,5,'Full Time',5);
/*!40000 ALTER TABLE `maid` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `security`
--

DROP TABLE IF EXISTS `security`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `security` (
  `Email` varchar(50) NOT NULL,
  `HouseType` varchar(30) NOT NULL,
  `Contact` varchar(12) NOT NULL,
  `Shift` varchar(50) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `security`
--

LOCK TABLES `security` WRITE;
/*!40000 ALTER TABLE `security` DISABLE KEYS */;
INSERT INTO `security` VALUES ('','','','','0000-00-00','0000-00-00'),('janki@gmail.com','Bungalow','3 months','Full','2023-02-20','2023-03-11'),('payal@gmail.com','Bungalow','3 months','Day','2023-02-22','2023-03-11');
/*!40000 ALTER TABLE `security` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workers`
--

DROP TABLE IF EXISTS `workers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workers` (
  `Name` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Mobile` bigint(15) NOT NULL,
  `ID` varchar(20) NOT NULL,
  `IDNum` bigint(30) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `Job` varchar(20) NOT NULL,
  PRIMARY KEY (`Mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workers`
--

LOCK TABLES `workers` WRITE;
/*!40000 ALTER TABLE `workers` DISABLE KEYS */;
INSERT INTO `workers` VALUES ('',0,0,'',0,'',''),('nnn',21,1234567890,'Adhar Card',457854125478,'fjvwiefbvoiefhvboefhbv','Security'),('jhnb',55,6547893210,'Adhar Card',7854125698,'d6ifhogeufgyo','Maid'),('hhh',25,7894561230,'Adhar Card',458965781249,'djfvifjvbpiefvb','Security'),('jjj',21,8527419630,'Adhar Card',789458745216,'ioiefuvoqieoqiwujhpiu','maid'),('hytg',21,9632587410,'Adhar Card',587469853256,'yfityditsrujtruj','Security');
/*!40000 ALTER TABLE `workers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-19 16:18:46
