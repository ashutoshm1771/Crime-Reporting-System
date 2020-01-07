-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.41


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
  `F_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `time` datetime NOT NULL,
  `description` varchar(45) NOT NULL,
  `status` varchar(15) NOT NULL,
  `crime_id` int(10) unsigned NOT NULL,
  `id_proof` varchar(45) NOT NULL,
  `id_proof_no` int(10) unsigned NOT NULL,
  `crimephoto1` varchar(255) DEFAULT NULL,
  `crimephoto2` varchar(255) DEFAULT NULL,
  `crimelocation` varchar(45) NOT NULL,
  `reg_id` int(10) unsigned NOT NULL,
  `claim_id` int(10) unsigned NOT NULL,
  `victim_id` int(10) unsigned NOT NULL,
  `sysdate` datetime NOT NULL,
  `systime` datetime NOT NULL,
  PRIMARY KEY (`F_id`) USING BTREE,
  KEY `FK_fir_details_1` (`crime_id`),
  KEY `FK_fir_details_2` (`reg_id`),
  KEY `FK_fir_details_3` (`claim_id`),
  KEY `FK_fir_details_4` (`victim_id`),
  CONSTRAINT `FK_fir_details_1` FOREIGN KEY (`crime_id`) REFERENCES `mstr_crimetype` (`crime_id`),
  CONSTRAINT `FK_fir_details_2` FOREIGN KEY (`reg_id`) REFERENCES `mstr_profile` (`id`),
  CONSTRAINT `FK_fir_details_3` FOREIGN KEY (`claim_id`) REFERENCES `mstr_profile` (`id`),
  CONSTRAINT `FK_fir_details_4` FOREIGN KEY (`victim_id`) REFERENCES `mstr_profile` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fir_details`
--

/*!40000 ALTER TABLE `fir_details` DISABLE KEYS */;
INSERT INTO `fir_details` (`F_id`,`date`,`time`,`description`,`status`,`crime_id`,`id_proof`,`id_proof_no`,`crimephoto1`,`crimephoto2`,`crimelocation`,`reg_id`,`claim_id`,`victim_id`,`sysdate`,`systime`) VALUES 
 (1,'2010-12-11 00:00:00','2010-10-10 00:00:00','yyuyihgig','',2,'Election Card',4294967295,NULL,NULL,'gggjgj',106,107,108,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
 (2,'2010-04-12 00:00:00','2002-02-02 00:00:00','aaaa','',2,'Election Card',4294967295,'upload/019.JPG','upload/003.jpg','aaaa',109,110,111,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
 (3,'2010-04-11 00:00:00','2010-10-10 00:00:00','maro hirajadit phone','',2,'PAN Card',4294967295,'upload/bab24d.jpg','upload/I_Love_You000.jpg','h.k.college',114,115,116,'0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `fir_details` ENABLE KEYS */;


--
-- Definition of table `fir_forward`
--

DROP TABLE IF EXISTS `fir_forward`;
CREATE TABLE `fir_forward` (
  `F_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `define` varchar(45) NOT NULL,
  `status` varchar(15) NOT NULL,
  `description` varchar(45) NOT NULL,
  PRIMARY KEY (`F_id`),
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
  `area_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `area_name` varchar(45) NOT NULL,
  `pincode` int(10) unsigned NOT NULL,
  `city_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`area_id`) USING BTREE,
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
  `city_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_name` varchar(45) NOT NULL,
  PRIMARY KEY (`city_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_city`
--

/*!40000 ALTER TABLE `mstr_city` DISABLE KEYS */;
INSERT INTO `mstr_city` (`city_id`,`city_name`) VALUES 
 (1,'baroda'),
 (2,'ahmedabad'),
 (3,'surat');
/*!40000 ALTER TABLE `mstr_city` ENABLE KEYS */;


--
-- Definition of table `mstr_crimetype`
--

DROP TABLE IF EXISTS `mstr_crimetype`;
CREATE TABLE `mstr_crimetype` (
  `crime_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `crime_type` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  PRIMARY KEY (`crime_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_crimetype`
--

/*!40000 ALTER TABLE `mstr_crimetype` DISABLE KEYS */;
INSERT INTO `mstr_crimetype` (`crime_id`,`crime_type`,`description`) VALUES 
 (1,'MURDER','very denger'),
 (2,'THEFT','U have to be careful.');
/*!40000 ALTER TABLE `mstr_crimetype` ENABLE KEYS */;


--
-- Definition of table `mstr_designation`
--

DROP TABLE IF EXISTS `mstr_designation`;
CREATE TABLE `mstr_designation` (
  `desi_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `desi_name` varchar(45) NOT NULL,
  PRIMARY KEY (`desi_id`)
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
  `history` int(10) unsigned NOT NULL COMMENT 'for fake FIR regularly entered by user.',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_login`
--

/*!40000 ALTER TABLE `mstr_login` DISABLE KEYS */;
INSERT INTO `mstr_login` (`username`,`password`,`type`,`status`,`last_logindatetime`,`history`) VALUES 
 ('jay','joshi','','','0000-00-00 00:00:00',0),
 ('ram','raja','admin','1','2010-10-10 08:08:08',0),
 ('shyam','maheta','user','1','2010-04-05 10:10:00',0),
 ('viral','thakkar','victim','1','2010-04-03 08:15:00',0);
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
  PRIMARY KEY (`username`),
  KEY `FK_mstr_officer_1` (`police_id`),
  KEY `FK_mstr_officer_2` (`desi_id`),
  CONSTRAINT `FK_mstr_officer_2` FOREIGN KEY (`desi_id`) REFERENCES `mstr_designation` (`desi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_officer`
--

/*!40000 ALTER TABLE `mstr_officer` DISABLE KEYS */;
/*!40000 ALTER TABLE `mstr_officer` ENABLE KEYS */;


--
-- Definition of table `mstr_policestation`
--

DROP TABLE IF EXISTS `mstr_policestation`;
CREATE TABLE `mstr_policestation` (
  `policestation_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `area_id` int(10) unsigned NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` decimal(10,0) NOT NULL,
  `Email_id` varchar(45) NOT NULL,
  `contact_person` varchar(45) NOT NULL,
  `starting_date` datetime NOT NULL,
  PRIMARY KEY (`policestation_id`) USING BTREE,
  KEY `FK_mstr_police_1` (`area_id`),
  CONSTRAINT `FK_mstr_policestation_1` FOREIGN KEY (`area_id`) REFERENCES `mstr_area` (`area_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_policestation`
--

/*!40000 ALTER TABLE `mstr_policestation` DISABLE KEYS */;
/*!40000 ALTER TABLE `mstr_policestation` ENABLE KEYS */;


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
  `city_id` int(10) unsigned NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pincode` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `FK_mstr_profile_1` (`username`),
  KEY `FK_mstr_profile_2` (`city_id`),
  CONSTRAINT `FK_mstr_profile_1` FOREIGN KEY (`username`) REFERENCES `mstr_login` (`username`),
  CONSTRAINT `FK_mstr_profile_2` FOREIGN KEY (`city_id`) REFERENCES `mstr_city` (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_profile`
--

/*!40000 ALTER TABLE `mstr_profile` DISABLE KEYS */;
INSERT INTO `mstr_profile` (`first_name`,`middle_name`,`last_name`,`gender`,`Dob`,`address`,`contact_no`,`emailid`,`profile_photo`,`username`,`city_id`,`id`,`pincode`) VALUES 
 ('ram','d','raghukul','Male','2009-12-12 00:00:00','101,ayodhya,\r\nU.P.','9898315029','r@yahoo.com','upload/rama-9.jpg','shyam',3,1,0),
 ('sunilbhai','k','thakkar','Male','1981-12-12 00:00:00','Memnangar','9898653221','s@yahoo.com','upload/~7moB000.jpg','viral',2,2,0),
 ('pratik','y','raval','Male','1988-10-10 00:00:00','sanand.','9979795959','pratik@gmail.com','upload/07032007(012).jpg','shyam',2,3,0),
 ('dharmesh','g','patel','Male','0000-00-00 00:00:00','101/Vasant Vihar Society,\r\nUniversity Road,\r\nBaroda.','9016625412','dharmesh@yahoo.com','','shyam',1,4,0),
 ('nnn','n','maheta','Male','0000-00-00 00:00:00','kareli bag,101','9016624977','n@yahoo.com','','shyam',1,93,0),
 ('ccc','c','maheta','Male','0000-00-00 00:00:00','111/harihar nivas','9016624978','ccc@yahoo.com','','shyam',2,95,0),
 ('mmm','m','maheta','Male','0000-00-00 00:00:00','vanthal','9016624976','m@yahoo.com','','shyam',2,96,0),
 ('prerak','arun','thakur','Male','0000-00-00 00:00:00','bjkghhj','7898978576','mahesh@yahoo.com','','shyam',2,100,0),
 ('tttttt','t','ttttttt','Male','0000-00-00 00:00:00','guyguygy','9999999999','mahesh@yahoo.com','','shyam',1,106,0),
 ('uuuuu','u','uuuuu','Male','0000-00-00 00:00:00','jkhgjhg','9999999999','mahesh@yahoo.com','','shyam',2,107,0),
 ('wwwww','w','wwwww','Male','0000-00-00 00:00:00','huiiy','3265656565','harsh@gmail.com','','shyam',3,108,0),
 ('a','a','a','Male','0000-00-00 00:00:00','a','9016690166','aaa@yahoo.com','','ram',2,109,0),
 ('b','b','b','Male','0000-00-00 00:00:00','bbbb','9016790167','bbb@yahoo.com','','ram',1,110,0),
 ('c','c','c','Male','0000-00-00 00:00:00','cccc','9016890168','ccc@yahoo.com','','ram',3,111,0),
 ('Narendrakumar','M','Maheta','Male','0000-00-00 00:00:00','vanthal','9898896011','maheta.narendra@yahoo.com','','shyam',2,114,0),
 ('Chandreshbhai','M','Maheta','Male','0000-00-00 00:00:00','narmada','9898315029','chandresh@yahoo.com','','shyam',1,115,0),
 ('Archna','S','Soni','Female','0000-00-00 00:00:00','B/14,\r\nVastrapur lake','9979018100','archna@yahoo.com','','shyam',2,116,0);
/*!40000 ALTER TABLE `mstr_profile` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
