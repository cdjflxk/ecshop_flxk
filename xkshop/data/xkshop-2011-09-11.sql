/*
SQLyog Enterprise - MySQL GUI v6.56
MySQL - 5.5.8-log : Database - xkshop
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`xkshop` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `xkshop`;

/*Table structure for table `xk_index` */

DROP TABLE IF EXISTS `xk_index`;

CREATE TABLE `xk_index` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `value` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `xk_index` */

insert  into `xk_index`(`id`,`name`,`value`) values (1,'title','月夜星空软件工作室'),(2,'description','虚拟主机服务商，提供南北互通的双线单IP虚拟主机、域名注册服务、企业邮局、CDN网页加速等服务'),(3,'phone','7*24小时客户服务热线电话：18701132241'),(4,'keywords','域名注册|网络实名|主机租赁|企业邮局|网站策划|企业邮局|主机托管|主机租用|服务器租用');

/*Table structure for table `xk_product` */

DROP TABLE IF EXISTS `xk_product`;

CREATE TABLE `xk_product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `market_price` int(11) NOT NULL,
  `shop_price` int(11) NOT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_on_sale` tinyint(1) DEFAULT NULL,
  `is_promote` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_Reference_2` FOREIGN KEY (`id`) REFERENCES `xk_product_categroy` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `xk_product` */

/*Table structure for table `xk_product_categroy` */

DROP TABLE IF EXISTS `xk_product_categroy`;

CREATE TABLE `xk_product_categroy` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `xk_product_categroy` */

insert  into `xk_product_categroy`(`id`,`name`) values (1,'vitrual');

/*Table structure for table `xk_role` */

DROP TABLE IF EXISTS `xk_role`;

CREATE TABLE `xk_role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `xk_role` */

insert  into `xk_role`(`id`,`name`) values (1,'admin'),(2,'vip'),(3,'visitor');

/*Table structure for table `xk_user` */

DROP TABLE IF EXISTS `xk_user`;

CREATE TABLE `xk_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role_id` smallint(3) NOT NULL,
  `realname` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `qq` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_Reference_1` FOREIGN KEY (`id`) REFERENCES `xk_role` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `xk_user` */

insert  into `xk_user`(`id`,`name`,`pass`,`role_id`,`realname`,`address`,`telephone`,`mobile`,`email`,`qq`) values (1,'admin','admin',1,'','','','','',''),(2,'admin','adminm',2,'','','','','','');

/*Table structure for table `xk_virtual` */

DROP TABLE IF EXISTS `xk_virtual`;

CREATE TABLE `xk_virtual` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `connection_count` int(11) NOT NULL,
  `flow` int(11) NOT NULL,
  `market_price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `os` varchar(20) NOT NULL,
  `script` varchar(50) NOT NULL,
  `free_gift` varchar(50) NOT NULL,
  `is_sale` int(1) NOT NULL DEFAULT '0',
  `top_categroy` varchar(20) NOT NULL DEFAULT '虚拟主机',
  `second_category` varchar(20) NOT NULL,
  `order` int(11) NOT NULL,
  `short_description` varchar(100) NOT NULL,
  `domain_count` int(3) NOT NULL,
  `trial_time` int(11) NOT NULL,
  `site_count` int(3) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `xk_virtual` */

insert  into `xk_virtual`(`id`,`name`,`location`,`size`,`connection_count`,`flow`,`market_price`,`discount`,`type`,`os`,`script`,`free_gift`,`is_sale`,`top_categroy`,`second_category`,`order`,`short_description`,`domain_count`,`trial_time`,`site_count`,`image`) values (1,'标准100型双线','上海',100,0,8,200,1,'bz100sx','linux','php','100M邮局，5用户',1,'虚拟主机','',0,'',0,0,0,''),(3,'标准200型双线','上海',100,0,8,200,1,'bz100sx','linux','php','100M邮局，5用户',1,'虚拟主机','',0,'',0,0,0,''),(4,'标准400型双线','上海',100,0,8,200,1,'bz100sx','linux','php','100M邮局，5用户',1,'虚拟主机','',0,'',0,0,0,''),(5,'标准500型双线','上海',100,0,8,200,1,'bz100sx','linux','php','100M邮局，5用户',1,'虚拟主机','',0,'',0,0,0,''),(6,'标准600型双线','上海',100,0,8,200,1,'bz100sx','linux','php','100M邮局，5用户',1,'虚拟主机','',0,'',0,0,0,''),(7,'标准700型双线','上海',100,0,8,200,1,'bz100sx','linux','php','100M邮局，5用户',1,'虚拟主机','',0,'',0,0,0,'');

/*Table structure for table `xk_xk` */

DROP TABLE IF EXISTS `xk_xk`;

CREATE TABLE `xk_xk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `value` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `xk_xk` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
