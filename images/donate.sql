/*
SQLyog Ultimate v8.61 
MySQL - 5.5.32 : Database - donationfund
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`donationfund` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `donationfund`;

/*Table structure for table `bank` */

DROP TABLE IF EXISTS `bank`;

CREATE TABLE `bank` (
  `BankID` int(11) DEFAULT NULL,
  `BankName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bank` */

/*Table structure for table `card` */

DROP TABLE IF EXISTS `card`;

CREATE TABLE `card` (
  `CardID` int(11) DEFAULT NULL,
  `CardNumber` varchar(255) DEFAULT NULL,
  `CVVNumber` varchar(255) DEFAULT NULL,
  `ExpireDate` varchar(50) DEFAULT NULL,
  `CardTypeID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `card` */

/*Table structure for table `cardtype` */

DROP TABLE IF EXISTS `cardtype`;

CREATE TABLE `cardtype` (
  `CardTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `CardType` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CardTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cardtype` */

/*Table structure for table `check` */

DROP TABLE IF EXISTS `check`;

CREATE TABLE `check` (
  `CheckID` int(11) NOT NULL AUTO_INCREMENT,
  `BankID` int(11) DEFAULT NULL,
  `RoutingNumber` varchar(255) DEFAULT NULL,
  `AccountNumber` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CheckID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `check` */

/*Table structure for table `city` */

DROP TABLE IF EXISTS `city`;

CREATE TABLE `city` (
  `CityID` int(11) NOT NULL AUTO_INCREMENT,
  `CityName` varchar(255) DEFAULT NULL,
  `CountryID` int(11) DEFAULT NULL,
  PRIMARY KEY (`CityID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `city` */

/*Table structure for table `country` */

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `CountryID` int(11) NOT NULL AUTO_INCREMENT,
  `CountryName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CountryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `country` */

/*Table structure for table `donation` */

DROP TABLE IF EXISTS `donation`;

CREATE TABLE `donation` (
  `DonationID` int(11) NOT NULL AUTO_INCREMENT,
  `DonName` varchar(255) DEFAULT NULL,
  `ProjID` int(11) DEFAULT NULL,
  `SubProjID` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `Amount` varchar(255) DEFAULT NULL,
  `Quantity` varchar(255) DEFAULT NULL,
  `DonTypeID` int(11) DEFAULT NULL,
  PRIMARY KEY (`DonationID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `donation` */

/*Table structure for table `donationtype` */

DROP TABLE IF EXISTS `donationtype`;

CREATE TABLE `donationtype` (
  `DonTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `DonationName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`DonTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `donationtype` */

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `PaymentID` int(11) NOT NULL AUTO_INCREMENT,
  `PayMethodID` int(11) DEFAULT NULL,
  `BankID` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `CheckID` int(11) DEFAULT NULL,
  `CardID` int(11) DEFAULT NULL,
  PRIMARY KEY (`PaymentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `payment` */

/*Table structure for table `paymentmethod` */

DROP TABLE IF EXISTS `paymentmethod`;

CREATE TABLE `paymentmethod` (
  `PayMethodID` int(11) NOT NULL AUTO_INCREMENT,
  `PayMethod` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`PayMethodID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `paymentmethod` */

/*Table structure for table `program` */

DROP TABLE IF EXISTS `program`;

CREATE TABLE `program` (
  `ProgID` int(11) NOT NULL AUTO_INCREMENT,
  `ProgName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ProgID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `program` */

insert  into `program`(`ProgID`,`ProgName`) values (1,'Education Program'),(2,'Environment Program'),(3,'Health Care Program'),(4,'Information Technology Program'),(5,'Self Employment Program'),(6,'Social Welfare Program');

/*Table structure for table `project` */

DROP TABLE IF EXISTS `project`;

CREATE TABLE `project` (
  `ProjID` int(11) NOT NULL AUTO_INCREMENT,
  `ProjName` varchar(255) DEFAULT NULL,
  `ProgID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ProjID`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

/*Data for the table `project` */

insert  into `project`(`ProjID`,`ProjName`,`ProgID`) values (1,'Disaster Preparedness Team',1),(2,'General Donation',1),(3,'Hidaya Institute of Farming & Agriculture',1),(4,'Job Skills Training',1),(5,'No Orphan without Education',1),(6,'One Million Books',1),(7,'Spread Education',1),(8,'Support Hidaya Schools',1),(9,'Clean Drinking Water',2),(10,'General Donation',2),(11,'Green Energy',2),(12,'One Million Trees',2),(13,'General Donation',3),(14,'Medical Assistance',3),(15,'Medical Camps',3),(16,'Preventive Health Care Education',3),(17,'Basic Computer Skills',4),(18,'General Donation',4),(19,'Network Administration Training',4),(20,'Software Development Training',4),(21,'System Administration Training',4),(22,'Animal Farming',5),(23,'Farmer Assistance',5),(24,'General Donation',5),(25,'Small Businesses for the Poor',5),(26,'Aqiqah',6),(27,'Container Shipment',6),(28,'Disaster Relief',6),(29,'Eid Qurbani',6),(30,'Fidya',6),(31,'General Donation',6),(32,'Kaffara',6),(33,'Marriage Support',6),(34,'One Million Meals',6),(35,'Sadaqah',6),(36,'Widow / Orphan Support',6),(37,'Zakat Distribution',6),(38,NULL,6);

/*Table structure for table `receipt` */

DROP TABLE IF EXISTS `receipt`;

CREATE TABLE `receipt` (
  `ReceiptID` int(11) NOT NULL AUTO_INCREMENT,
  `ReceiptType` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ReceiptID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `receipt` */

/*Table structure for table `receipttype` */

DROP TABLE IF EXISTS `receipttype`;

CREATE TABLE `receipttype` (
  `ReceiptTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `Receipt` varchar(25) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  UNIQUE KEY `ReceiptTypeID` (`ReceiptTypeID`),
  KEY `FK_receipttypejhj` (`UserID`),
  CONSTRAINT `FK_receipttypejhj` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `receipttype` */

/*Table structure for table `recurring` */

DROP TABLE IF EXISTS `recurring`;

CREATE TABLE `recurring` (
  `RecurringID` int(11) NOT NULL AUTO_INCREMENT,
  `EndDate` varchar(50) DEFAULT NULL,
  `RepeatDuration` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`RecurringID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `recurring` */

/*Table structure for table `schedule` */

DROP TABLE IF EXISTS `schedule`;

CREATE TABLE `schedule` (
  `ScheduleID` int(11) NOT NULL AUTO_INCREMENT,
  `SchTypeStatus` varchar(255) DEFAULT NULL,
  `ScheduleName` varchar(255) DEFAULT NULL,
  `StartDate` varchar(255) DEFAULT NULL,
  `RecurringID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ScheduleID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `schedule` */

/*Table structure for table `state` */

DROP TABLE IF EXISTS `state`;

CREATE TABLE `state` (
  `StateID` int(11) NOT NULL AUTO_INCREMENT,
  `State` varchar(255) DEFAULT NULL,
  `CountryID` int(11) DEFAULT NULL,
  PRIMARY KEY (`StateID`),
  KEY `FK_state` (`CountryID`),
  CONSTRAINT `FK_state` FOREIGN KEY (`CountryID`) REFERENCES `country` (`CountryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `state` */

/*Table structure for table `subproject` */

DROP TABLE IF EXISTS `subproject`;

CREATE TABLE `subproject` (
  `SubProjID` int(11) NOT NULL AUTO_INCREMENT,
  `SprojName` varchar(255) DEFAULT NULL,
  `ProjID` int(11) DEFAULT NULL,
  PRIMARY KEY (`SubProjID`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

/*Data for the table `subproject` */

insert  into `subproject`(`SubProjID`,`SprojName`,`ProjID`) values (1,'Animal Farm Training',3),(2,'Hands-on Agriculture Training',3),(3,'Horticulture Training',3),(4,'Saline Agriculture Training',3),(5,'Timber Farm Training',3),(6,'Electrician',4),(7,'Masonry',4),(8,'Plumbing',4),(9,'Sewing',4),(10,'Adult Education',7),(11,'Female Dropout Prevention',7),(12,'Language Competency',7),(13,'Sports & Fitness Training',7),(14,'Support Poor Students',7),(15,'GIKI Alumni Fund',7),(16,'Deep Well',9),(17,'Water Tanker',9),(18,'Water Hand Pump',9),(19,'Solar Energy',11),(20,'Wind Mills',11),(21,'Bees',22),(22,'Cattle',22),(23,'Goats',22),(24,'Poultry',22),(25,'Push Carts for Street Vending',25),(26,'Retail Shop Assistance',25),(27,'Sewing Machines for Women',25),(28,'Tools for Various Professions',25),(29,'Aqiqa (Girl)',26),(30,'Aqiqa (Boy)',26),(31,'General Donation',28),(32,'Turkey Earthquake 2011',28),(33,'East Africa Drought',28),(34,'Pakistan Floods',28),(35,'Cow/Buffalo',29),(36,'Goat/Lamb',29),(37,'Zakat',34),(38,'Sadaqa',34),(39,'General Donation',34),(40,'Cash',35),(41,'Goat/Lamb',35),(42,'Cow/Buffalo',35);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `FName` varchar(255) DEFAULT NULL,
  `MName` varchar(255) DEFAULT NULL,
  `LName` varchar(255) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `ZCode` varchar(50) DEFAULT NULL,
  `CityID` int(11) DEFAULT NULL,
  `CountryID` int(11) DEFAULT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `ReceiptID` int(11) DEFAULT NULL,
  `Comments` blob,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
