-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2011 年 09 月 08 日 10:20
-- 服务器版本: 5.5.9
-- PHP 版本: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `xkshop`
--

-- --------------------------------------------------------

--
-- 表的结构 `xk_index`
--

DROP TABLE IF EXISTS `xk_index`;
CREATE TABLE IF NOT EXISTS `xk_index` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `value` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `xk_index`
--

INSERT INTO `xk_index` (`id`, `name`, `value`) VALUES
(1, 'title', '月夜星空软件工作室'),
(2, 'description', '虚拟主机服务商，提供南北互通的双线单IP虚拟主机、域名注册服务、企业邮局、CDN网页加速等服务'),
(3, 'phone', '7*24小时客户服务热线电话：18701132241'),
(4, 'keywords', '域名注册|网络实名|主机租赁|企业邮局|网站策划|企业邮局|主机托管|主机租用|服务器租用');

-- --------------------------------------------------------

--
-- 表的结构 `xk_product`
--

DROP TABLE IF EXISTS `xk_product`;
CREATE TABLE IF NOT EXISTS `xk_product` (
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `xk_product`
--


-- --------------------------------------------------------

--
-- 表的结构 `xk_product_categroy`
--

DROP TABLE IF EXISTS `xk_product_categroy`;
CREATE TABLE IF NOT EXISTS `xk_product_categroy` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `xk_product_categroy`
--

INSERT INTO `xk_product_categroy` (`id`, `name`) VALUES
(1, 'vitrual');

-- --------------------------------------------------------

--
-- 表的结构 `xk_role`
--

DROP TABLE IF EXISTS `xk_role`;
CREATE TABLE IF NOT EXISTS `xk_role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `xk_role`
--

INSERT INTO `xk_role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'vip'),
(3, 'visitor');

-- --------------------------------------------------------

--
-- 表的结构 `xk_user`
--

DROP TABLE IF EXISTS `xk_user`;
CREATE TABLE IF NOT EXISTS `xk_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `xk_user`
--

INSERT INTO `xk_user` (`id`, `name`, `pwd`, `role_id`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- 表的结构 `xk_virtual`
--

DROP TABLE IF EXISTS `xk_virtual`;
CREATE TABLE IF NOT EXISTS `xk_virtual` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `xk_virtual`
--

INSERT INTO `xk_virtual` (`id`, `name`, `location`, `size`, `connection_count`, `flow`, `market_price`, `discount`, `type`, `os`, `script`, `free_gift`, `is_sale`, `top_categroy`, `second_category`, `order`, `short_description`, `domain_count`, `trial_time`, `site_count`, `image`) VALUES
(1, '标准100型双线', '上海', 100, 0, 8, 200, 1, 'bz100sx', 'linux', 'php', '100M邮局，5用户', 1, '虚拟主机', '', 0, '', 0, 0, 0, ''),
(3, '标准200型双线', '上海', 100, 0, 8, 200, 1, 'bz100sx', 'linux', 'php', '100M邮局，5用户', 1, '虚拟主机', '', 0, '', 0, 0, 0, ''),
(4, '标准400型双线', '上海', 100, 0, 8, 200, 1, 'bz100sx', 'linux', 'php', '100M邮局，5用户', 1, '虚拟主机', '', 0, '', 0, 0, 0, ''),
(5, '标准500型双线', '上海', 100, 0, 8, 200, 1, 'bz100sx', 'linux', 'php', '100M邮局，5用户', 1, '虚拟主机', '', 0, '', 0, 0, 0, ''),
(6, '标准600型双线', '上海', 100, 0, 8, 200, 1, 'bz100sx', 'linux', 'php', '100M邮局，5用户', 1, '虚拟主机', '', 0, '', 0, 0, 0, ''),
(7, '标准700型双线', '上海', 100, 0, 8, 200, 1, 'bz100sx', 'linux', 'php', '100M邮局，5用户', 1, '虚拟主机', '', 0, '', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `xk_xk`
--

DROP TABLE IF EXISTS `xk_xk`;
CREATE TABLE IF NOT EXISTS `xk_xk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `value` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `xk_xk`
--


--
-- 限制导出的表
--

--
-- 限制表 `xk_product`
--
ALTER TABLE `xk_product`
  ADD CONSTRAINT `FK_Reference_2` FOREIGN KEY (`id`) REFERENCES `xk_product_categroy` (`id`);

--
-- 限制表 `xk_user`
--
ALTER TABLE `xk_user`
  ADD CONSTRAINT `FK_Reference_1` FOREIGN KEY (`id`) REFERENCES `xk_role` (`id`);
