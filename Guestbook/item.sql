/*
SQLyog Enterprise - MySQL GUI v6.15
MySQL - 5.0.45-community-nt : Database - mymessage
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `mymessage`;

USE `mymessage`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `admins` */

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `adminId` int(11) NOT NULL auto_increment,
  `adminName` varchar(20) collate utf8_unicode_ci NOT NULL,
  `adminPwd` varchar(50) collate utf8_unicode_ci NOT NULL,
  `adminPhone` varchar(20) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`adminId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `admins` */

insert  into `admins`(`adminId`,`adminName`,`adminPwd`,`adminPhone`) values (1,'tom','123','123123123'),(2,'zhangjinlong','123','123123123123'),(3,'susan','123','1234444444444');

/*Table structure for table `message` */

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message` (
  `messageId` int(11) NOT NULL auto_increment,
  `author` varchar(20) collate utf8_unicode_ci NOT NULL,
  `title` varchar(100) collate utf8_unicode_ci NOT NULL,
  `content` varchar(500) collate utf8_unicode_ci NOT NULL,
  `face` char(100) collate utf8_unicode_ci NOT NULL default 'img/24.gif',
  `reply` varchar(200) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`messageId`)
) ENGINE=InnoDB AUTO_INCREMENT=296 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `message` */

insert  into `message`(`messageId`,`author`,`title`,`content`,`face`,`reply`) values (25,'涩会','开心','不知道想干什么 给点建议  管理员','img/24.gif',''),(37,'社会我闯哥','人狠话不多','这就是我闯哥，不服就来锤我!','img/24.gif','厉害'),(40,'我是小可爱','可爱的我','你看我多好看呀  ','img/24.gif','好看'),(96,'我系渣渣辉','贪玩蓝月','一个你不知道的船新版本','img/1572958335loading.gif','系兄弟就来砍我'),(294,'项目完成','很开心','我真的很开心','img/15730465144.jpg',NULL),(295,'三亿小学生梦想','点亮社会人生','点亮智慧人生','img/1573089909loading.gif',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
