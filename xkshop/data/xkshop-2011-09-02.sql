-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2011 年 09 月 02 日 09:02
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
-- 表的结构 `xk_index_model`
--

DROP TABLE IF EXISTS `xk_index_model`;
CREATE TABLE IF NOT EXISTS `xk_index_model` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `value` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `xk_index_model`
--

INSERT INTO `xk_index_model` (`id`, `name`, `value`) VALUES
(1, 'title', '月夜星空软件工作室'),
(2, 'description', '虚拟主机服务商，提供南北互通的双线单IP虚拟主机、域名注册服务、企业邮局、CDN网页加速等服务'),
(3, 'phone', '7*24小时客户服务热线电话：18701132241'),
(4, 'keywords', '域名注册|网络实名|主机租赁|企业邮局|网站策划|企业邮局|主机托管|主机租用|服务器租用');

-- --------------------------------------------------------

--
-- 表的结构 `xk_user_model`
--

DROP TABLE IF EXISTS `xk_user_model`;
CREATE TABLE IF NOT EXISTS `xk_user_model` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `xk_user_model`
--

INSERT INTO `xk_user_model` (`id`, `name`, `pwd`, `role`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- 表的结构 `xk_xk_model`
--

DROP TABLE IF EXISTS `xk_xk_model`;
CREATE TABLE IF NOT EXISTS `xk_xk_model` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `value` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `xk_xk_model`
--

