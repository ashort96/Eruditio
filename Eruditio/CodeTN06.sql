-- MySQL dump 10.13  Distrib 5.5.29, for Linux (x86_64)
--
-- Host: localhost    Database: CodeTN06test
-- ------------------------------------------------------
-- Server version	5.5.29

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
-- Table structure for table `races`
--

DROP TABLE IF EXISTS `races`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `races` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `races`
--

LOCK TABLES `races` WRITE;
/*!40000 ALTER TABLE `races` DISABLE KEYS */;
/*!40000 ALTER TABLE `races` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `school_scholarships`
--

DROP TABLE IF EXISTS `school_scholarships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `school_scholarships` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ScholarshipName` varchar(50) NOT NULL,
  `SchoolId` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `gpa` decimal(10,2) NOT NULL,
  `act` int(11) NOT NULL,
  `sat` int(11) NOT NULL,
  `link` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `SchoolId` (`SchoolId`),
  KEY `Amount` (`Amount`),
  KEY `gpa` (`gpa`),
  CONSTRAINT `SchoolConstraint` FOREIGN KEY (`SchoolId`) REFERENCES `schools` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `school_scholarships`
--

LOCK TABLES `school_scholarships` WRITE;
/*!40000 ALTER TABLE `school_scholarships` DISABLE KEYS */;
INSERT INTO `school_scholarships` VALUES (1,'Volunteer Scholarship',2,6000,3.80,30,1330,'http://onestop.utk.edu/your-money/covering-costs/scholarships/volunteer-scholarship/'),(2,'Provost Scholarship',3,4000,3.50,27,1210,'http://www.etsu.edu/scholarships/aps/freshmen.aspx'),(7,'University Scholarship',6,3000,3.50,28,1250,'http://www.auburn.edu/scholarship/undergraduate/freshman.html'),(8,'Presidential Scholarship',3,5000,3.90,30,1320,'http://www.etsu.edu/scholarships/aps/freshmen.aspx'),(10,'Capstone Scholar',5,3500,3.50,27,1210,'http://scholarships.ua.edu/types/out-of-state.html'),(11,'Collegiate Scholar',5,4000,3.50,28,1250,'http://scholarships.ua.edu/types/out-of-state.html'),(12,'Foundation in Excellence Scholarship',5,12475,3.50,29,1290,'http://scholarships.ua.edu/types/out-of-state.html'),(13,'UA Scholar',5,16716,3.50,30,1330,'http://scholarships.ua.edu/types/out-of-state.html'),(14,'Presidential Scholar',5,24950,3.50,32,1400,'http://scholarships.ua.edu/types/out-of-state.html'),(15,'Foundation Fellowship',7,18180,3.80,31,2100,'https://www.admissions.uga.edu/article/foundation-fellowship-part-i.html'),(16,'Bernard Ramsey Honors Scholarship',7,9090,3.80,31,2100,'https://www.admissions.uga.edu/article/foundation-fellowship-part-i.html'),(17,'Classic Scholars',7,9105,0.00,29,1950,'https://www.admissions.uga.edu/article/scholarships-at-uga.html'),(18,'Dr. Henry King Stanford Scholarship',7,3000,3.70,31,1400,'https://www.admissions.uga.edu/article/scholarships-at-uga.html'),(19,'See Blue Scholarship',8,7000,3.00,26,1170,'http://www.uky.edu/financialaid/scholarship-incoming-freshmen'),(20,'Bluegrass Spirit Scholarship',8,8000,3.50,25,1130,'http://www.uky.edu/financialaid/scholarship-incoming-freshmen'),(21,'Kentucky Heritage Scholarship',8,10000,3.50,30,1330,'http://www.uky.edu/financialaid/scholarship-incoming-freshmen'),(23,'Mizzou Heritage Scholarship',9,1750,0.00,27,1210,'http://financialaid.missouri.edu/types-of-aid/scholarships/scholarships/mizzou-heritage-scholarship/index.php'),(24,'George C. Brooks Scholarship',9,2688,0.00,25,1130,'http://financialaid.missouri.edu/types-of-aid/scholarships/scholarships/brooks-scholarship/index.php'),(25,'Dr. Donald Suggs Scholarship',9,2063,0.00,27,1210,'http://financialaid.missouri.edu/types-of-aid/scholarships/scholarships/suggs-scholarship/index.php'),(26,'McNair Scholars',11,15000,4.79,34,1532,'http://sc.edu/admissions/apply/costs_and_aid/oosscholarships.html'),(27,'Horseshoe Scholars',11,11000,4.79,34,1532,'http://sc.edu/admissions/apply/costs_and_aid/oosscholarships.html'),(28,'Alumni Scholars',11,5000,4.79,33,1517,'http://sc.edu/admissions/apply/costs_and_aid/oosscholarships.html'),(29,'Cooper Scholars',11,4000,4.67,33,1482,'http://sc.edu/admissions/apply/costs_and_aid/oosscholarships.html'),(30,'Honors College Fellowship',13,12500,3.80,32,1400,'http://catalog.uark.edu/undergraduatecatalog/financialaidandscholarships/scholarshipsfornewstudents/'),(31,'Bodenhamer Fellowship',13,17500,3.80,32,1400,'http://catalog.uark.edu/undergraduatecatalog/financialaidandscholarships/scholarshipsfornewstudents/'),(32,'Sturgis Fellowship',13,17500,3.80,32,1400,'http://catalog.uark.edu/undergraduatecatalog/financialaidandscholarships/scholarshipsfornewstudents/'),(33,'Boyer Fellowship',13,12500,3.75,32,1400,'http://catalog.uark.edu/undergraduatecatalog/financialaidandscholarships/scholarshipsfornewstudents/'),(34,'Presidential Scholarships',16,75000,3.75,30,1330,'http://admissions.msstate.edu/scholarships/competitive/index.php'),(35,'Engineering Excellence Scholarships',16,3000,0.00,40,0,'http://admissions.msstate.edu/scholarships/competitive/index.php'),(36,'Ramsay and Elaine O\'Neal Scholarship',16,3000,0.00,28,1250,'http://admissions.msstate.edu/scholarships/competitive/index.php'),(37,'Sharp Academic Scholarships',16,3000,0.00,0,0,'http://admissions.msstate.edu/scholarships/competitive/index.php'),(38,'Toyota-Haley Barbour Scholarships',16,8000,3.00,0,0,'http://admissions.msstate.edu/scholarships/competitive/index.php'),(39,'Luckyday Scholarship',15,2000,3.20,20,940,'http://finaid.olemiss.edu/scholarships/'),(40,'Teacher Education Scholars Loan/Scholarship',15,15000,3.50,28,0,'http://education.olemiss.edu/academics/scholarships.html'),(41,'Penelope W. and E. Roe Stamps IV Leadership Schola',15,12000,0.00,0,0,'http://finaid.olemiss.edu/scholarships/');
/*!40000 ALTER TABLE `school_scholarships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schools`
--

DROP TABLE IF EXISTS `schools`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SchoolName` varchar(50) NOT NULL,
  `StateId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `StateIndex` (`StateId`),
  CONSTRAINT `StateConstraint` FOREIGN KEY (`StateId`) REFERENCES `states` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schools`
--

LOCK TABLES `schools` WRITE;
/*!40000 ALTER TABLE `schools` DISABLE KEYS */;
INSERT INTO `schools` VALUES (2,'University of Tennessee, Knoxville',42),(3,'East Tennessee State University',42),(4,'Florida University',9),(5,'University of Alabama',1),(6,'Auburn University',1),(7,'University of Georgia',10),(8,'University of Kentucky',17),(9,'University of Missouri',25),(11,'University of South Carolina',40),(12,'Vanderbilt University',42),(13,'University of Arkansas',4),(14,'Louisiana State University',18),(15,'University of Mississippi',24),(16,'Mississippi State University',24),(17,'Texas A&M University',43);
/*!40000 ALTER TABLE `schools` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(20) NOT NULL,
  `abbreviation` varchar(2) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
INSERT INTO `states` VALUES (1,'Alabama','AL',1),(2,'Alaska','AK',1),(3,'Arizona','AZ',1),(4,'Arkansas','AR',1),(5,'California','CA',1),(6,'Colorado','CO',1),(7,'Connecticut','CT',1),(8,'Delaware','DE',1),(9,'Florida','FL',1),(10,'Georgia','GA',1),(11,'Hawaii','HI',1),(12,'Idaho','ID',1),(13,'Illinois','IL',1),(14,'Indiana','IN',1),(15,'Iowa','IA',1),(16,'Kansas','KS',1),(17,'Kentucky','KY',1),(18,'Louisiana','LA',1),(19,'Maine','ME',1),(20,'Maryland','MD',1),(21,'Massachusetts','MA',1),(22,'Michigan','MI',1),(23,'Minnesota','MN',1),(24,'Mississippi','MS',1),(25,'Missouri','MO',1),(26,'Montana','MT',1),(27,'Nebraska','NE',1),(28,'Nevada','NV',1),(29,'New Hampshire','NH',1),(30,'New Jersey','NJ',1),(31,'New Mexico','NM',1),(32,'New York','NY',1),(33,'North Carolina','NC',1),(34,'North Dakota','ND',1),(35,'Ohio','OH',1),(36,'Oklahoma','OK',1),(37,'Oregon','OR',1),(38,'Pennsylvania','PA',1),(39,'Rhode Island','RI',1),(40,'South Carolina','SC',1),(41,'South Dakota','SD',1),(42,'Tennessee','TN',1),(43,'Texas','TX',1),(44,'Utah','UT',1),(45,'Vermont','VT',1),(46,'Virginia','VA',1),(47,'Washington','WA',1),(48,'West Vergina','WV',1),(49,'Wisconsin','WI',1),(50,'Wyoming','WY',1);
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-11-08 12:18:15
