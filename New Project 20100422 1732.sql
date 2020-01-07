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
  `description` varchar(45) default NULL,
  `status` varchar(45) default NULL,
  `crime_id` int(10) unsigned NOT NULL,
  `id_proof` varchar(45) NOT NULL,
  `id_proof_no` int(10) unsigned NOT NULL,
  `crimephoto1` varchar(255) default NULL,
  `crimephoto2` varchar(255) default NULL,
  `crimelocation` varchar(45) NOT NULL,
  `reg_id` int(10) unsigned NOT NULL,
  `claim_id` int(10) unsigned NOT NULL,
  `victim_id` int(10) unsigned NOT NULL,
  `dt_time` datetime default NULL,
  `area_id` int(10) unsigned default NULL,
  PRIMARY KEY  (`F_id`),
  KEY `FK_fir_details_1` (`crime_id`),
  KEY `FK_fir_details_2` (`reg_id`),
  KEY `FK_fir_details_3` (`claim_id`),
  KEY `FK_fir_details_4` (`victim_id`),
  KEY `FK_fir_details_5` (`area_id`),
  CONSTRAINT `FK_fir_details_1` FOREIGN KEY (`crime_id`) REFERENCES `mstr_crimetype` (`crime_id`),
  CONSTRAINT `FK_fir_details_2` FOREIGN KEY (`reg_id`) REFERENCES `mstr_profile` (`id`),
  CONSTRAINT `FK_fir_details_3` FOREIGN KEY (`claim_id`) REFERENCES `mstr_profile` (`id`),
  CONSTRAINT `FK_fir_details_4` FOREIGN KEY (`victim_id`) REFERENCES `mstr_profile` (`id`),
  CONSTRAINT `FK_fir_details_5` FOREIGN KEY (`area_id`) REFERENCES `mstr_area` (`area_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fir_details`
--

/*!40000 ALTER TABLE `fir_details` DISABLE KEYS */;
INSERT INTO `fir_details` (`F_id`,`date`,`time`,`description`,`status`,`crime_id`,`id_proof`,`id_proof_no`,`crimephoto1`,`crimephoto2`,`crimelocation`,`reg_id`,`claim_id`,`victim_id`,`dt_time`,`area_id`) VALUES 
 (1,'2010-04-25 00:00:00','2010-10-10 00:00:00','laptop','1',2,'Election Card',4294967295,'upload/Desert\r\nLandscape.jpg','upload/Autumn Leaves.jpg','80 foot road',40,41,43,'0000-00-00 00:00:00',6),
 (2,'1995-04-05 00:00:00','2010-10-10 00:00:00','hand bag stolen','1',2,'Election Card',70707070,'upload/a31.jpg','upload/a19.jpg','Paldi',44,45,46,'0000-00-00 00:00:00',1),
 (3,'1995-04-05 00:00:00','2010-10-10 00:00:00','hand bag stolen','1',2,'Election Card',70707070,'upload/a31.jpg','upload/a19.jpg','Paldi',44,45,47,'0000-00-00 00:00:00',1),
 (4,'2010-02-02 00:00:00','2010-10-10 00:00:00','Mobile Stallen','1',2,'Election Card',380380,'upload/Mafia.jpg','upload/Rs1001.JPG','At Mahalaxmi Cross Road',48,49,50,'0000-00-00 00:00:00',1),
 (5,'2010-04-01 00:00:00','2010-10-00 00:00:00','laptop','1',2,'Election Card',346875,'upload/Sunset.jpg','upload/Winter.jpg','at ms uni road',51,52,54,NULL,6);
/*!40000 ALTER TABLE `fir_details` ENABLE KEYS */;


--
-- Definition of table `fir_forward`
--

DROP TABLE IF EXISTS `fir_forward`;
CREATE TABLE `fir_forward` (
  `F_id` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(45) NOT NULL,
  `status` varchar(15) default NULL,
  `description` varchar(45) NOT NULL,
  `dt_time` datetime default NULL,
  `from` varchar(45) NOT NULL,
  PRIMARY KEY  (`F_id`),
  KEY `FK_fir_forward_1` (`username`),
  KEY `FK_fir_forward_2` (`from`),
  CONSTRAINT `FK_fir_forward_1` FOREIGN KEY (`username`) REFERENCES `mstr_login` (`username`),
  CONSTRAINT `FK_fir_forward_2` FOREIGN KEY (`from`) REFERENCES `mstr_login` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fir_forward`
--

/*!40000 ALTER TABLE `fir_forward` DISABLE KEYS */;
INSERT INTO `fir_forward` (`F_id`,`username`,`status`,`description`,`dt_time`,`from`) VALUES 
 (2,'param','1','               re','2010-04-22 17:19:18','param'),
 (3,'pradeep','1','               rewe','2010-04-22 17:19:30','param'),
 (4,'kinjal','1','               vghjgh','2010-04-22 17:30:02','param'),
 (5,'kinjal','1','              this is demo....','2010-04-22 17:31:29','param');
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
INSERT INTO `mstr_area` (`area_id`,`area_name`,`pincode`,`city_id`) VALUES 
 (1,'Vasna',380000,1),
 (2,'Mamnagar',380052,1),
 (3,'Navarangpura',380006,1),
 (4,'Vastrapur',380001,1),
 (5,'Karelibag',400001,2),
 (6,'Alkapuri',400002,2);
/*!40000 ALTER TABLE `mstr_area` ENABLE KEYS */;


--
-- Definition of table `mstr_city`
--

DROP TABLE IF EXISTS `mstr_city`;
CREATE TABLE `mstr_city` (
  `city_id` int(10) unsigned NOT NULL auto_increment,
  `city_name` varchar(45) NOT NULL,
  PRIMARY KEY  (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_city`
--

/*!40000 ALTER TABLE `mstr_city` DISABLE KEYS */;
INSERT INTO `mstr_city` (`city_id`,`city_name`) VALUES 
 (1,'Ahmedabad'),
 (2,'Baroda'),
 (3,'Surat'),
 (4,'Gandhinagar'),
 (5,'Surendranagar');
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
INSERT INTO `mstr_crimetype` (`crime_id`,`crime_type`,`description`) VALUES 
 (1,'MURDER','very denger'),
 (2,'THEFT','U have to be careful.');
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
INSERT INTO `mstr_designation` (`desi_id`,`desi_name`) VALUES 
 (1,'PSI'),
 (2,'Head Constable'),
 (3,'Constable'),
 (4,'PI');
/*!40000 ALTER TABLE `mstr_designation` ENABLE KEYS */;


--
-- Definition of table `mstr_login`
--

DROP TABLE IF EXISTS `mstr_login`;
CREATE TABLE `mstr_login` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `type` varchar(15) default NULL,
  `status` varchar(10) default NULL,
  `last_logindatetime` datetime default NULL,
  PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_login`
--

/*!40000 ALTER TABLE `mstr_login` DISABLE KEYS */;
INSERT INTO `mstr_login` (`username`,`password`,`type`,`status`,`last_logindatetime`) VALUES 
 ('aaa','aaa','Police Officer',NULL,NULL),
 ('d','d',NULL,NULL,NULL),
 ('fff','fff',NULL,NULL,NULL),
 ('ggg','ggg',NULL,NULL,NULL),
 ('kinjal','kkk',NULL,NULL,NULL),
 ('komal','koms',NULL,NULL,NULL),
 ('krishi','thakkar',NULL,NULL,NULL),
 ('krisi','hency',NULL,NULL,NULL),
 ('param','patel','Police Officer',NULL,NULL),
 ('pradeep','ppp',NULL,NULL,NULL),
 ('rajaram','vyas',NULL,NULL,NULL),
 ('rajendra','rrr',NULL,NULL,NULL),
 ('rajkumar','patel',NULL,NULL,NULL),
 ('ram','raja','admin','1','2010-10-10 08:08:08'),
 ('shyam','maheta','user','1','2010-04-05 10:10:00'),
 ('sss','sss',NULL,NULL,NULL),
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
  `poilcestation_id` int(10) unsigned NOT NULL,
  KEY `FK_mstr_officer_1` (`username`),
  KEY `FK_mstr_officer_2` (`desi_id`),
  KEY `FK_mstr_officer_3` (`poilcestation_id`),
  CONSTRAINT `FK_mstr_officer_1` FOREIGN KEY (`username`) REFERENCES `mstr_login` (`username`),
  CONSTRAINT `FK_mstr_officer_2` FOREIGN KEY (`desi_id`) REFERENCES `mstr_designation` (`desi_id`),
  CONSTRAINT `FK_mstr_officer_3` FOREIGN KEY (`poilcestation_id`) REFERENCES `mstr_policestation` (`poilcestation_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_officer`
--

/*!40000 ALTER TABLE `mstr_officer` DISABLE KEYS */;
INSERT INTO `mstr_officer` (`username`,`Jdate`,`Ldate`,`desi_id`,`poilcestation_id`) VALUES 
 ('param','2010-04-13 00:00:00','2010-04-30 00:00:00',4,41),
 ('komal','2010-04-05 00:00:00','2010-04-20 00:00:00',2,1),
 ('kinjal','2010-04-19 00:00:00','2010-04-30 00:00:00',2,2),
 ('pradeep','2010-04-19 00:00:00','2010-04-30 00:00:00',2,44);
/*!40000 ALTER TABLE `mstr_officer` ENABLE KEYS */;


--
-- Definition of table `mstr_policestation`
--

DROP TABLE IF EXISTS `mstr_policestation`;
CREATE TABLE `mstr_policestation` (
  `poilcestation_id` int(10) unsigned NOT NULL auto_increment,
  `area_id` int(10) unsigned NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` int(10) unsigned NOT NULL,
  `Email_id` varchar(255) NOT NULL,
  `contact_person` varchar(45) NOT NULL,
  `starting_date` datetime NOT NULL,
  `policestation_name` varchar(45) NOT NULL,
  `city_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`poilcestation_id`),
  KEY `FK_mstr_policestation_1` (`area_id`),
  KEY `FK_mstr_policestation_2` (`city_id`),
  CONSTRAINT `FK_mstr_policestation_1` FOREIGN KEY (`area_id`) REFERENCES `mstr_area` (`area_id`),
  CONSTRAINT `FK_mstr_policestation_2` FOREIGN KEY (`city_id`) REFERENCES `mstr_city` (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_policestation`
--

/*!40000 ALTER TABLE `mstr_policestation` DISABLE KEYS */;
INSERT INTO `mstr_policestation` (`poilcestation_id`,`area_id`,`address`,`contact_no`,`Email_id`,`contact_person`,`starting_date`,`policestation_name`,`city_id`) VALUES 
 (1,1,'Vasna Police Station,Nr.Telephone Ex. Office',26576156,'vasna_ps@yahoo.com','Rajeshbhai','2009-10-10 00:00:00','Vasna Police Station',1),
 (2,1,'Navarangpura Police Station,Nr.Post Office',26500000,'navarangpua_ps@yahoo.com','Chandreshbhai','2008-10-10 00:00:00','Navarangpura Police Station',1),
 (41,6,'Nr.Head Post Office,\r\nKarelibag Road,\r\nVadodara.',28585858,'karelibag_ps@yahoo.com','Abhijit Jadeja','0000-00-00 00:00:00','Karelibag Police Station',2),
 (44,6,'Nr.Post Office',236545,'aps@yahoo.com','Yadavbhai','2010-04-06 00:00:00','Alkapuri Police Station',1),
 (45,6,'Nr.Post Office',236545,'aps@yahoo.com','Yadavbhai','2010-04-06 00:00:00','Alkapuri Police Station',1);
/*!40000 ALTER TABLE `mstr_policestation` ENABLE KEYS */;


--
-- Definition of table `mstr_profile`
--

DROP TABLE IF EXISTS `mstr_profile`;
CREATE TABLE `mstr_profile` (
  `first_name` varchar(45) NOT NULL,
  `middle_name` varchar(15) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `Dob` datetime default NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` varchar(45) default NULL,
  `emailid` varchar(255) NOT NULL,
  `profile_photo` varchar(45) default NULL,
  `username` varchar(45) NOT NULL,
  `city_id` int(10) unsigned NOT NULL,
  `id` int(10) unsigned NOT NULL auto_increment,
  `pincode` int(10) unsigned NOT NULL,
  `area_id` int(10) unsigned default NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_mstr_profile_1` (`username`),
  KEY `FK_mstr_profile_2` (`city_id`),
  KEY `FK_mstr_profile_3` (`area_id`),
  CONSTRAINT `FK_mstr_profile_1` FOREIGN KEY (`username`) REFERENCES `mstr_login` (`username`),
  CONSTRAINT `FK_mstr_profile_2` FOREIGN KEY (`city_id`) REFERENCES `mstr_city` (`city_id`),
  CONSTRAINT `FK_mstr_profile_3` FOREIGN KEY (`area_id`) REFERENCES `mstr_area` (`area_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_profile`
--

/*!40000 ALTER TABLE `mstr_profile` DISABLE KEYS */;
INSERT INTO `mstr_profile` (`first_name`,`middle_name`,`last_name`,`gender`,`Dob`,`address`,`contact_no`,`emailid`,`profile_photo`,`username`,`city_id`,`id`,`pincode`,`area_id`) VALUES 
 ('ggg','g','ggg','Male','2010-04-20 00:00:00','ff','444444444','d@yahoo.com','upload/Forest.jpg','ggg',1,12,444444,NULL),
 ('krishi','K','thakkar','Female','2002-05-06 00:00:00','Kareli bag','9998205920','k@gmail.com','upload/Winter Leaves.jpg','krishi',2,13,400000,NULL),
 ('fgfgf','fff','fffffgf','Male',NULL,'gdshdh','888888888888','fg@yahoo.com',NULL,'fff',1,14,464643,NULL),
 ('param','l','patel','Male',NULL,'GSEB ','5555555555','param@gmail.com',NULL,'param',3,15,500000,NULL),
 ('komal','p','shah','Female',NULL,'chintamani','07926576156','koms@yahoo.com',NULL,'komal',1,16,380058,NULL),
 ('kinjal','m','patel','Female',NULL,'gf','111111111111','k@gmail.com',NULL,'kinjal',3,17,435555,NULL),
 ('pradeep','m','purohit','Male',NULL,'ggfdggfdg','6546687687','p@yahoo.com',NULL,'pradeep',3,19,345555,NULL),
 ('sss','s','sss','Male',NULL,'ssssssxxxsssss','57657657575','s@yahoo.com',NULL,'sss',2,20,400000,NULL),
 ('jjj','j','jjj','Male',NULL,'jjjj','333333333','jjj@yahoo.com',NULL,'shyam',1,24,300000,NULL),
 ('hency','s','pujara','Female',NULL,'dall mil raod','9376822145','h@yahoo.com',NULL,'shyam',5,40,300000,NULL),
 ('fency','f','patel','Female',NULL,'fatehnagar','9228183186','fency@yahoo.com',NULL,'shyam',1,41,400000,NULL),
 ('nency','n','shah','Female',NULL,'ramnagar','9376822145','nency@gmail.com',NULL,'shyam',2,42,500000,NULL),
 ('nency','n','shah','Female',NULL,'ramnagar','9376822145','nency@gmail.com',NULL,'shyam',2,43,500000,NULL),
 ('Yogeshbhai','J','Joshi','Male',NULL,'Kundan Apartment ','9016625525','yogesh@gmail.com',NULL,'shyam',1,44,700000,NULL),
 ('Jaiminbhai','K','Patel','Male',NULL,'Varachha Road','9016654254','jaimin@yahoo.com',NULL,'shyam',3,45,800000,NULL),
 ('Bhaveshbhai','B','Prajapati','Male',NULL,'Kalupur','9016622222','bhavesh@gmail.com',NULL,'shyam',1,46,900000,NULL),
 ('Bhaveshbhai','B','Prajapati','Male',NULL,'Kalupur','9016622222','bhavesh@gmail.com',NULL,'shyam',1,47,900000,NULL),
 ('Rameshbhai','D','Patel','Male',NULL,'Kundan Apartment\r\nDiv-A','9909099090','ramesh@gmail.com',NULL,'shyam',1,48,380380,NULL),
 ('Mahesh','K','Patel','Male',NULL,'Kundan Aprtment\r\nDiv-B','9909099091','mahesh@yahoo.com',NULL,'shyam',1,49,380380,NULL),
 ('Nareshbhai','H','Patel','Male',NULL,'Kundan Apartment\r\nDiv-C','9909099092','naresh@yahoo.com',NULL,'shyam',1,50,380380,NULL),
 ('Helly','h','thakkar','Female',NULL,'karelibag','9376822145','h@yahoo.com',NULL,'shyam',2,51,400000,NULL),
 ('rena','m','patel','Female',NULL,'shastrinagar','9228183186','rn@yahoo.com',NULL,'shyam',1,52,538987,NULL),
 ('sweta','s','tiwari','Female',NULL,'navrangpura','9998027555','s@yahoo.com',NULL,'shyam',1,53,436567,NULL),
 ('sweta','s','tiwari','Female',NULL,'navrangpura','9998027555','s@yahoo.com',NULL,'shyam',1,54,436567,NULL),
 ('aaa','a','aaa','Female',NULL,'paladi','9427630171','a@yahoo.com',NULL,'shyam',1,55,100000,NULL);
/*!40000 ALTER TABLE `mstr_profile` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
