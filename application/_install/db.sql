CREATE DATABASE `registration_demo` CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE `registration_demo`;

CREATE TABLE `registrants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `addr1` varchar(50) NOT NULL,
  `addr2` varchar(50) NOT NULL,
  `city`  varchar(25) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip` varchar(9) NOT NULL,
  `country` text NOT NULL,
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
