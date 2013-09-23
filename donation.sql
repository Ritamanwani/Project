/*
SQLyog Ultimate v8.61 
MySQL - 5.5.32 : Database - donation
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`donation` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `donation`;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `cardtype` */

insert  into `cardtype`(`CardTypeID`,`CardType`) values (1,'Visa'),(2,'Master Card'),(3,'American Express'),(4,'Discover');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `city` */

insert  into `city`(`CityID`,`CityName`,`CountryID`) values (1,'Karachi',1),(2,'Hyderabad',1),(3,'Jamshoro',1),(4,'Islamabad',1),(5,'Quetta',NULL),(6,'Peshawar',NULL);

/*Table structure for table `country` */

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `CountryID` int(11) NOT NULL AUTO_INCREMENT,
  `CountryName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CountryID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `country` */

insert  into `country`(`CountryID`,`CountryName`) values (1,'Pakistan'),(2,'India'),(3,'USA'),(4,'Bangladesh'),(5,'West Africa');

/*Table structure for table `donation` */

DROP TABLE IF EXISTS `donation`;

CREATE TABLE `donation` (
  `DonationID` int(11) NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `donationtype` */

insert  into `donationtype`(`DonTypeID`,`DonationName`) values (1,'Zakat'),(2,'Sadaqa'),(3,'General Donation');

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
  `IsDonation` int(11) DEFAULT NULL,
  `IsCountry` int(11) DEFAULT NULL,
  `IsQuantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`ProjID`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

/*Data for the table `project` */

insert  into `project`(`ProjID`,`ProjName`,`ProgID`,`IsDonation`,`IsCountry`,`IsQuantity`) values (1,'Disaster Preparedness Team',1,0,0,0),(2,'General Donation',1,1,0,0),(3,'Hidaya Institute of Farming & Agriculture',1,1,0,0),(4,'Job Skills Training',1,1,0,0),(5,'No Orphan without Education',1,1,0,0),(6,'One Million Books',1,0,0,0),(7,'Spread Education',1,1,0,0),(8,'Support Hidaya Schools',1,1,0,0),(9,'Clean Drinking Water',2,1,0,0),(10,'General Donation',2,1,0,0),(11,'Green Energy',2,0,0,0),(12,'One Million Trees',2,0,0,0),(13,'General Donation',3,1,0,0),(14,'Medical Assistance',3,1,0,0),(15,'Medical Camps',3,1,0,0),(16,'Preventive Health Care Education',3,0,0,0),(17,'Basic Computer Skills',4,1,0,0),(18,'General Donation',4,1,0,0),(19,'Network Administration Training',4,1,0,0),(20,'Software Development Training',4,1,0,0),(21,'System Administration Training',4,1,0,0),(22,'Animal Farming',5,1,0,0),(23,'Farmer Assistance',5,1,0,0),(24,'General Donation',5,1,0,0),(25,'Small Businesses for the Poor',5,1,0,0),(26,'Aqiqah',6,0,0,1),(27,'Container Shipment',6,0,0,0),(28,'Disaster Relief',6,1,0,0),(29,'Eid Qurbani',6,0,1,1),(30,'Fidya',6,0,0,0),(31,'General Donation',6,1,0,0),(32,'Kaffara',6,0,0,0),(33,'Marriage Support',6,1,0,0),(34,'One Million Meals',6,1,1,0),(35,'Sadaqah',6,0,1,0),(36,'Widow / Orphan Support',6,1,0,0),(37,'Zakat Distribution',6,1,1,0),(38,NULL,6,NULL,NULL,NULL),(39,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `receipt` */

DROP TABLE IF EXISTS `receipt`;

CREATE TABLE `receipt` (
  `ReceiptID` int(11) NOT NULL AUTO_INCREMENT,
  `ReceiptType` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ReceiptID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `receipt` */

insert  into `receipt`(`ReceiptID`,`ReceiptType`) values (1,'Email'),(2,'Post'),(3,'Email & Post');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `state` */

insert  into `state`(`StateID`,`State`,`CountryID`) values (1,'Albama',3),(2,'Alaska',3),(3,'California',3),(4,'Iowa',3),(5,'Hawaii',3);

/*Table structure for table `subproject` */

DROP TABLE IF EXISTS `subproject`;

CREATE TABLE `subproject` (
  `SubProjID` int(11) NOT NULL AUTO_INCREMENT,
  `SprojName` varchar(255) DEFAULT NULL,
  `ProjID` int(11) DEFAULT NULL,
  `IsFixAmount` int(11) DEFAULT NULL,
  PRIMARY KEY (`SubProjID`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

/*Data for the table `subproject` */

insert  into `subproject`(`SubProjID`,`SprojName`,`ProjID`,`IsFixAmount`) values (1,'Animal Farm Training',3,0),(2,'Hands-on Agriculture Training',3,0),(3,'Horticulture Training',3,0),(4,'Saline Agriculture Training',3,0),(5,'Timber Farm Training',3,0),(6,'Electrician',4,0),(7,'Masonry',4,0),(8,'Plumbing',4,0),(9,'Sewing',4,0),(10,'Adult Education',7,0),(11,'Female Dropout Prevention',7,0),(12,'Language Competency',7,0),(13,'Sports & Fitness Training',7,0),(14,'Support Poor Students',7,0),(15,'GIKI Alumni Fund',7,0),(16,'Deep Well',9,0),(17,'Water Tanker',9,0),(18,'Water Hand Pump',9,0),(19,'Solar Energy',11,0),(20,'Wind Mills',11,0),(21,'Bees',22,0),(22,'Cattle',22,0),(23,'Goats',22,0),(24,'Poultry',22,0),(25,'Push Carts for Street Vending',25,0),(26,'Retail Shop Assistance',25,0),(27,'Sewing Machines for Women',25,0),(28,'Tools for Various Professions',25,0),(29,'Aqiqa (Girl)',26,120),(30,'Aqiqa (Boy)',26,240),(31,'General Donation',28,0),(32,'Turkey Earthquake 2011',28,0),(33,'East Africa Drought',28,0),(34,'Pakistan Floods',28,0),(35,'Cow/Buffalo',29,65),(36,'Goat/Lamb',29,150),(37,'Zakat',34,0),(38,'Sadaqa',34,0),(39,'General Donation',34,0),(40,'Cash',35,0),(41,'Goat/Lamb',35,120),(42,'Cow/Buffalo',35,240);

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
