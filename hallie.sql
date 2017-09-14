-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 12 月 28 日 09:00
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `hallie`
--

-- --------------------------------------------------------

--
-- 表的结构 `memebers`
--

CREATE TABLE IF NOT EXISTS `memebers` (
  `m_ID` varchar(20) CHARACTER SET utf8 NOT NULL,
  `m_key` varchar(40) NOT NULL,
  `m_nickname` varchar(20) NOT NULL,
  `m_gender` varchar(7) NOT NULL,
  `m_address` mediumtext CHARACTER SET utf8 NOT NULL,
  `m_tel` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `memebers`
--

INSERT INTO `memebers` (`m_ID`, `m_key`, `m_nickname`, `m_gender`, `m_address`, `m_tel`) VALUES
('Hallie', 'c4ca4238a0b923820dcc509a6f75849b', '', '', '', ''),
('h', 'b6d767d2f8ed5d21a44b0e5886680cb9', '', '', '', ''),
('QFF', 'c4ca4238a0b923820dcc509a6f75849b', '', 'man', '', ''),
('HHHH', 'c4ca4238a0b923820dcc509a6f75849b', '', 'woman', '', ''),
('web', '202cb962ac59075b964b07152d234b70', '', 'woman', '', ''),
('dong', '202cb962ac59075b964b07152d234b70', '', 'man', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
