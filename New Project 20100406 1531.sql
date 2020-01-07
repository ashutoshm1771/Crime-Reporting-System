-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.24a-community-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema crs
--

CREATE DATABASE IF NOT EXISTS crs;
USE crs;

--
-- Definition of table `fir_details`
--

DROP TABLE IF EXISTS `fir_details`;
CREATE TABLE `fir_details` (
  `F_id` int(10) unsigned NOT NULL auto_increment,
  `date` datetime NOT NULL,
  `time` datetime NOT NULL,
  `description` varchar(45) NOT NULL,
  `status` varchar(15) NOT NULL,
  `crime_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`F_id`),
  KEY `FK_fir_details_1` (`crime_id`),
  CONSTRAINT `FK_fir_details_1` FOREIGN KEY (`crime_id`) REFERENCES `mstr_crimetype` (`crime_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fir_details`
--

/*!40000 ALTER TABLE `fir_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `fir_details` ENABLE KEYS */;


--
-- Definition of table `fir_forward`
--

DROP TABLE IF EXISTS `fir_forward`;
CREATE TABLE `fir_forward` (
  `F_id` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(45) NOT NULL,
  `define` varchar(45) NOT NULL,
  `status` varchar(15) NOT NULL,
  `description` varchar(45) NOT NULL,
  PRIMARY KEY  (`F_id`),
  KEY `FK_fir_forward_1` (`username`),
  CONSTRAINT `FK_fir_forward_1` FOREIGN KEY (`username`) REFERENCES `mstr_login` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fir_forward`
--

/*!40000 ALTER TABLE `fir_forward` DISABLE KEYS */;
/*!40000 ALTER TABLE `fir_forward` ENABLE KEYS */;


--
-- Definition of table `mstr_area`
--

DROP TABLE IF EXISTS `mstr_area`;
CREATE TABLE `mstr_area` (
  `area_id` int(10) unsigned NOT NULL auto_increment,
  `area_name` varchar(45) NOT NULL,
  `pincode` int(10) unsigned NOT NULL,
  `city_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`area_id`),
  KEY `FK_mstr_area_1` (`city_id`),
  CONSTRAINT `FK_mstr_area_1` FOREIGN KEY (`city_id`) REFERENCES `mstr_city` (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_area`
--

/*!40000 ALTER TABLE `mstr_area` DISABLE KEYS */;
/*!40000 ALTER TABLE `mstr_area` ENABLE KEYS */;


--
-- Definition of table `mstr_city`
--

DROP TABLE IF EXISTS `mstr_city`;
CREATE TABLE `mstr_city` (
  `city_id` int(10) unsigned NOT NULL auto_increment,
  `city_name` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `pincode` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_city`
--

/*!40000 ALTER TABLE `mstr_city` DISABLE KEYS */;
/*!40000 ALTER TABLE `mstr_city` ENABLE KEYS */;


--
-- Definition of table `mstr_crimetype`
--

DROP TABLE IF EXISTS `mstr_crimetype`;
CREATE TABLE `mstr_crimetype` (
  `crime_id` int(10) unsigned NOT NULL auto_increment,
  `crime_type` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  PRIMARY KEY  (`crime_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_crimetype`
--

/*!40000 ALTER TABLE `mstr_crimetype` DISABLE KEYS */;
/*!40000 ALTER TABLE `mstr_crimetype` ENABLE KEYS */;


--
-- Definition of table `mstr_designation`
--

DROP TABLE IF EXISTS `mstr_designation`;
CREATE TABLE `mstr_designation` (
  `desi_id` int(10) unsigned NOT NULL auto_increment,
  `desi_name` varchar(45) NOT NULL,
  PRIMARY KEY  (`desi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_designation`
--

/*!40000 ALTER TABLE `mstr_designation` DISABLE KEYS */;
/*!40000 ALTER TABLE `mstr_designation` ENABLE KEYS */;


--
-- Definition of table `mstr_login`
--

DROP TABLE IF EXISTS `mstr_login`;
CREATE TABLE `mstr_login` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `type` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `last_logindatetime` datetime NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_login`
--

/*!40000 ALTER TABLE `mstr_login` DISABLE KEYS */;
INSERT INTO `mstr_login` (`username`,`password`,`type`,`status`,`last_logindatetime`) VALUES 
 ('shyam','maheta','user','1','2010-04-05 10:10:00'),
 ('viral','thakkar','victim','1','2010-04-03 08:15:00');
/*!40000 ALTER TABLE `mstr_login` ENABLE KEYS */;


--
-- Definition of table `mstr_officer`
--

DROP TABLE IF EXISTS `mstr_officer`;
CREATE TABLE `mstr_officer` (
  `username` varchar(45) NOT NULL,
  `Jdate` datetime NOT NULL,
  `Ldate` datetime NOT NULL,
  `desi_id` int(10) unsigned NOT NULL,
  `police_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`username`),
  KEY `FK_mstr_officer_1` (`police_id`),
  KEY `FK_mstr_officer_2` (`desi_id`),
  CONSTRAINT `FK_mstr_officer_1` FOREIGN KEY (`police_id`) REFERENCES `mstr_police` (`police_id`),
  CONSTRAINT `FK_mstr_officer_2` FOREIGN KEY (`desi_id`) REFERENCES `mstr_designation` (`desi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_officer`
--

/*!40000 ALTER TABLE `mstr_officer` DISABLE KEYS */;
/*!40000 ALTER TABLE `mstr_officer` ENABLE KEYS */;


--
-- Definition of table `mstr_police`
--

DROP TABLE IF EXISTS `mstr_police`;
CREATE TABLE `mstr_police` (
  `police_id` int(10) unsigned zerofill NOT NULL auto_increment,
  `area_id` int(10) unsigned NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` decimal(10,0) NOT NULL,
  `Email_id` varchar(45) NOT NULL,
  `contact_person` varchar(45) NOT NULL,
  `starting_date` datetime NOT NULL,
  PRIMARY KEY  (`police_id`),
  KEY `FK_mstr_police_1` (`area_id`),
  CONSTRAINT `FK_mstr_police_1` FOREIGN KEY (`area_id`) REFERENCES `mstr_area` (`area_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_police`
--

/*!40000 ALTER TABLE `mstr_police` DISABLE KEYS */;
/*!40000 ALTER TABLE `mstr_police` ENABLE KEYS */;


--
-- Definition of table `mstr_profile`
--

DROP TABLE IF EXISTS `mstr_profile`;
CREATE TABLE `mstr_profile` (
  `first_name` varchar(45) NOT NULL,
  `middle_name` varchar(5) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `Dob` datetime NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` decimal(10,0) NOT NULL,
  `emailid` varchar(45) NOT NULL,
  `profile_photo` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  PRIMARY KEY  (`first_name`),
  KEY `FK_mstr_profile_1` (`username`),
  CONSTRAINT `FK_mstr_profile_1` FOREIGN KEY (`username`) REFERENCES `mstr_login` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_profile`
--

/*!40000 ALTER TABLE `mstr_profile` DISABLE KEYS */;
/*!40000 ALTER TABLE `mstr_profile` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
