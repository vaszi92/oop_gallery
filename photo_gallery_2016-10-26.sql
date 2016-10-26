# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.10)
# Database: photo_gallery
# Generation Time: 2016-10-26 16:13:15 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `photograph_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `author` varchar(255) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `photograph_id` (`photograph_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;

INSERT INTO `comments` (`id`, `photograph_id`, `created`, `author`, `body`)
VALUES
	(1,10,'2016-05-13 12:05:59','Vaszi','I like it!'),
	(2,10,'2016-10-13 12:24:09','Vaszi','I like it!'),
	(3,11,'2016-10-26 11:45:05','Laszlo','Beautiful!'),
	(4,12,'2016-10-26 11:48:19','Laszlo','Nice one!'),
	(5,14,'2016-10-26 14:46:26','Jack & Jones','Amazing!'),
	(6,13,'2016-10-26 14:47:22','Emily','Nice job!'),
	(7,13,'2016-10-26 14:49:55','Emily','And I really mean it!'),
	(8,13,'2016-10-26 14:52:03','John','I agree!'),
	(9,10,'2016-10-26 17:19:05','Emily','Nice!'),
	(10,20,'2016-10-26 17:38:07','Laszlo','I like it.'),
	(12,22,'2016-10-26 18:10:20','John','They need some water.');

/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table photographs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `photographs`;

CREATE TABLE `photographs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(100) NOT NULL DEFAULT '',
  `size` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `photographs` WRITE;
/*!40000 ALTER TABLE `photographs` DISABLE KEYS */;

INSERT INTO `photographs` (`id`, `filename`, `type`, `size`, `caption`)
VALUES
	(20,'buddhas.jpg','image/jpeg',456234,''),
	(21,'bamboo.jpg','image/jpeg',455568,''),
	(22,'flowers.jpg','image/jpeg',664947,''),
	(23,'roof.jpg','image/jpeg',524574,'');

/*!40000 ALTER TABLE `photographs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(40) NOT NULL DEFAULT '',
  `first_name` varchar(30) NOT NULL DEFAULT '',
  `last_name` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`)
VALUES
	(1,'laszlo','password','Laszlo','Vaszi'),
	(2,'vaszi92','secret','Vaszi','Laszlo'),
	(3,'dumme_stephanie','dumme','Stephanie ','Dumme'),
	(6,' johnsmith','secret123','John','Smith'),
	(7,' naj_velmos','aneko','Nagy','Vilmos'),
	(8,' geza_vizoli','mralkohol','Vizoli','Geza'),
	(9,' faszko_gomba','pityokastokany','Andras','Vaszi'),
	(10,'admin','admin','','');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
