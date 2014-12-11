# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.38)
# Database: php_final
# Generation Time: 2014-12-11 22:35:38 +0000
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
  `user_id` int(11) DEFAULT NULL,
  `to_user_id` int(11) DEFAULT '1',
  `comment` varchar(600) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;

INSERT INTO `comments` (`id`, `user_id`, `to_user_id`, `comment`)
VALUES
	(1,1,2,'suck it'),
	(2,2,1,'okay'),
	(98,21,1,'sleep'),
	(101,28,1,'hey');

/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT 'http://placekitten.com/g/150/150',
  `username` varchar(20) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `password_conf` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `image`, `username`, `first_name`, `last_name`, `email`, `password`, `password_conf`)
VALUES
	(1,'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRLR7ojs6ShhoGn_jsxYE30eX5_bt9cZN0_YTUBYwcDs1rLuHw3mQ','ABS','abby','smith','joejoe@joe.com','e99a18c428cb38d5f260853678922e03','e99a18c428cb38d5f260853678922e03'),
	(2,'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRsy7qrLUm3H8zLaVOU37UFowcOx07cc5jgA5BiissFvkUiY1dI','Dandandan','danny','lee','danlee@hotmail.com','e99a18c428cb38d5f260853678922e03','e99a18c428cb38d5f260853678922e03'),
	(3,'http://placekitten.com/g/150/150','Felix','felix','fat','hsantos@gmail.com','e99a18c428cb38d5f260853678922e03','e99a18c428cb38d5f260853678922e03'),
	(26,'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRLR7ojs6ShhoGn_jsxYE30eX5_bt9cZN0_YTUBYwcDs1rLuHw3mQ','Jimbo','jim','bo','jimbo@gmail.com','e99a18c428cb38d5f260853678922e03','e99a18c428cb38d5f260853678922e03'),
	(27,'http://placekitten.com/g/150/150','Carlee','carlos','lee','carlos@gmail.com','e99a18c428cb38d5f260853678922e03','e99a18c428cb38d5f260853678922e03'),
	(28,'http://placekitten.com/g/150/150','Richlee','rich','lee','richlee@hotmail.com','e7f4f8bd246c235418280d1f124e14f0','e7f4f8bd246c235418280d1f124e14f0');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
