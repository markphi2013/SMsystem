-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2016 at 08:36 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE `acos` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(31, 28, '', 0, 'add', 19, 20),
(3, 2, '', 0, 'index', 3, 4),
(4, 2, '', 0, 'view', 5, 6),
(32, 28, '', 0, 'edit', 21, 22),
(5, 2, '', 0, 'add', 7, 8),
(6, 2, '', 0, 'edit', 9, 10),
(2, 1, '', 0, 'Groups', 2, 13),
(7, 2, '', 0, 'delete', 11, 12),
(33, 28, '', 0, 'delete', 23, 24),
(34, 28, '', 0, 'login', 25, 26),
(35, 28, '', 0, 'logout', 27, 28),
(29, 28, '', 0, 'index', 15, 16),
(30, 28, '', 0, 'view', 17, 18),
(28, 1, '', 0, 'Users', 14, 33),
(36, 1, '', 0, 'AclExtras', 34, 35),
(44, 28, '', 0, 'initDB', 29, 30),
(1, 0, '', 0, 'controllers', 1, 86),
(66, 28, NULL, NULL, 'changePassword', 31, 32),
(388, 1, NULL, NULL, 'Customers', 74, 85),
(389, 388, NULL, NULL, 'index', 75, 76),
(390, 388, NULL, NULL, 'add', 77, 78),
(391, 388, NULL, NULL, 'view', 79, 80),
(392, 388, NULL, NULL, 'edit', 81, 82),
(393, 388, NULL, NULL, 'delete', 83, 84),
(394, 372, NULL, NULL, 'receiving', 51, 52),
(370, 1, NULL, NULL, 'Pages', 36, 39),
(371, 370, NULL, NULL, 'display', 37, 38),
(372, 1, NULL, NULL, 'Products', 40, 53),
(373, 372, NULL, NULL, 'index', 41, 42),
(374, 372, NULL, NULL, 'view', 43, 44),
(375, 372, NULL, NULL, 'add', 45, 46),
(376, 372, NULL, NULL, 'edit', 47, 48),
(377, 372, NULL, NULL, 'delete', 49, 50),
(378, 1, NULL, NULL, 'StoreHome', 54, 61),
(379, 378, NULL, NULL, 'index', 55, 56),
(380, 378, NULL, NULL, 'indexStore', 57, 58),
(381, 378, NULL, NULL, 'add', 59, 60),
(382, 1, NULL, NULL, 'Suppliers', 62, 73),
(383, 382, NULL, NULL, 'index', 63, 64),
(384, 382, NULL, NULL, 'add', 65, 66),
(385, 382, NULL, NULL, 'view', 67, 68),
(386, 382, NULL, NULL, 'edit', 69, 70),
(387, 382, NULL, NULL, 'delete', 71, 72);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE `aros` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, 0, 'Group', 1, '', 1, 12),
(8, 1, 'User', 8, '', 2, 3),
(5, 0, 'Group', 2, '', 13, 18),
(18, 5, 'User', 17, NULL, 16, 17),
(10, 6, 'User', 10, '', 20, 21),
(11, 7, 'User', 11, '', 30, 31),
(12, 7, 'User', 12, '', 32, 33),
(6, 0, 'Group', 3, '', 19, 28),
(7, 0, 'Group', 4, '', 29, 36),
(13, 1, 'User', 13, NULL, 4, 5),
(14, 1, 'User', 14, NULL, 6, 7),
(15, 1, 'User', 1, NULL, 8, 9),
(17, 5, 'User', 16, NULL, 14, 15),
(19, NULL, 'Group', 5, NULL, 37, 38),
(20, 7, 'User', 18, NULL, 34, 35),
(21, 6, 'User', 19, NULL, 22, 23),
(25, 6, 'User', 23, NULL, 24, 25),
(26, 1, 'User', 24, NULL, 10, 11),
(30, 6, 'User', 28, NULL, 26, 27),
(31, NULL, 'Supplier', 1, NULL, 39, 40),
(32, NULL, 'Product', 1, NULL, 41, 42),
(33, NULL, 'Product', 2, NULL, 43, 44),
(34, NULL, 'Supplier', 2, NULL, 45, 46),
(38, NULL, 'Customer', 5, NULL, 51, 52),
(36, NULL, 'Customer', 3, NULL, 47, 48),
(37, NULL, 'Customer', 4, NULL, 49, 50),
(39, NULL, 'Product', 0, NULL, 53, 54),
(42, NULL, 'Receive', 0, NULL, 57, 58),
(41, NULL, 'Product', 5, NULL, 55, 56),
(43, NULL, 'Receive', 0, NULL, 59, 60),
(44, NULL, 'Receive', 0, NULL, 61, 62),
(45, NULL, 'Receive', 0, NULL, 63, 64),
(46, NULL, 'Receive', 0, NULL, 65, 66),
(47, NULL, 'Receive', 0, NULL, 67, 68),
(48, NULL, 'Receive', 0, NULL, 69, 70),
(49, NULL, 'Receive', 0, NULL, 71, 72),
(50, NULL, 'Receive', 0, NULL, 73, 74),
(51, NULL, 'Receive', 0, NULL, 75, 76),
(52, NULL, 'Receive', 0, NULL, 77, 78),
(53, NULL, 'Receive', 0, NULL, 79, 80),
(54, NULL, 'Receive', 0, NULL, 81, 82),
(55, NULL, 'Receive', 0, NULL, 83, 84),
(56, NULL, 'Receive', 0, NULL, 85, 86),
(57, NULL, 'Receive', 0, NULL, 87, 88),
(58, NULL, 'Receive', 0, NULL, 89, 90),
(59, NULL, 'Receive', 0, NULL, 91, 92),
(60, NULL, 'Receive', 0, NULL, 93, 94),
(61, NULL, 'Receive', 0, NULL, 95, 96),
(62, NULL, 'Receive', 0, NULL, 97, 98),
(63, NULL, 'Receive', 0, NULL, 99, 100),
(64, NULL, 'Receive', 0, NULL, 101, 102),
(65, NULL, 'Receive', 0, NULL, 103, 104);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE `aros_acos` (
  `id` int(11) NOT NULL,
  `aro_id` int(11) NOT NULL,
  `aco_id` int(11) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(65, 1, 1, '1', '1', '1', '1'),
(66, 5, 1, '-1', '-1', '-1', '-1'),
(67, 5, 28, '1', '1', '1', '1'),
(76, 6, 1, '-1', '-1', '-1', '-1'),
(87, 7, 1, '-1', '-1', '-1', '-1'),
(113, 19, 1, '-1', '-1', '-1', '-1'),
(127, 5, 30, '1', '1', '1', '1'),
(128, 6, 30, '1', '1', '1', '1'),
(129, 7, 30, '1', '1', '1', '1'),
(130, 19, 30, '1', '1', '1', '1'),
(131, 5, 66, '1', '1', '1', '1'),
(132, 6, 66, '1', '1', '1', '1'),
(133, 7, 66, '1', '1', '1', '1'),
(134, 19, 66, '1', '1', '1', '1'),
(135, 5, 32, '1', '1', '1', '1'),
(136, 6, 32, '1', '1', '1', '1'),
(137, 7, 32, '1', '1', '1', '1'),
(138, 19, 32, '1', '1', '1', '1'),
(200, 30, 33, '1', '1', '1', '1'),
(199, 30, 29, '1', '1', '1', '1'),
(185, 10, 29, '-1', '-1', '-1', '-1'),
(186, 10, 33, '-1', '-1', '-1', '-1');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(25) NOT NULL,
  `customer_contact` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `customer_contact`) VALUES
(4, 'rat', 234455555),
(5, 'rwrwr', 369444),
(3, 'peter', 98555);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `specific_program_access` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `specific_program_access`, `created`, `modified`) VALUES
(1, 'administrator', 0, '2012-01-30 20:48:19', '2012-01-30 20:48:19'),
(2, 'manager', 0, '2012-01-30 20:49:52', '2012-01-30 20:49:52'),
(3, 'program manager', 1, '2012-01-30 20:50:00', '2012-01-31 08:03:07'),
(4, 'partner', 1, '2012-01-30 20:50:08', '2012-01-31 08:03:18'),
(5, 'partner manager', 1, '2013-01-16 09:30:16', '2013-01-16 09:30:16');

-- --------------------------------------------------------

--
-- Table structure for table `i18n`
--

CREATE TABLE `i18n` (
  `id` int(10) NOT NULL,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `controller` varchar(255) DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(27) NOT NULL,
  `product_isbn` varchar(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `cost_price` int(11) NOT NULL,
  `retail_price` int(11) NOT NULL,
  `quantity_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`created`, `modified`, `id`, `product_isbn`, `product_name`, `supplier_id`, `cost_price`, `retail_price`, `quantity_stock`) VALUES
(NULL, '2016-11-09 08:07:08', 1, 'oplo3', 'opgate', 1, 250, 600, 91),
(NULL, '2016-11-09 11:05:06', 2, 'rett', 'tomato', 1, 400, 600, 73),
(NULL, '2016-11-09 11:05:26', 3, 'tr554', 'rest', 2, 433, 4100, 1000),
('2016-11-04 10:14:50', '2016-11-09 10:59:43', 5, 'tggg5', 'ffffs', 1, 4500, 6000, 36);

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` varchar(36) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `database` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` varchar(50) DEFAULT 'running'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `name`, `url`, `database`, `created`, `modified`, `status`) VALUES
('4f59dee9-b4b0-48fa-bb14-1c713745968f', 'M4RH', 'm4rh', 'm4rh', '2012-03-09 10:43:53', '2014-07-25 15:35:46', 'archived'),
('4f26a450-f4f4-44fa-b391-0a123745968f', 'Mother Reminder System and many other stuff', 'mrs', 'mrs', '2012-01-30 15:08:16', '2014-07-25 09:32:10', 'running'),
('4f59dee9-b4b0-48fa-bb14-ac713745968a', 'C4C', 'c4c', 'c4c', '2012-03-09 10:43:53', '2012-03-09 10:43:53', 'running'),
('4f59dee9-b4b0-48fa-bb14-ac713745968c', 'Big Old Program', 'oldprogram', 'oldprogram', '2012-03-09 10:43:53', '2012-03-09 10:43:53', 'running'),
('548ae44c-6edc-4cf3-be01-51110a00020f', 'My new program', 'newprogram', 'newprogram', '2014-12-12 12:49:16', '2014-12-12 12:49:16', 'running'),
('54fe8649-9494-4010-a88c-08680a00020f', 'CTFK Tobacco Control Kenya', 'ctfk2040', 'ctfk2040', '2015-03-10 05:51:05', '2015-03-10 05:51:05', 'running');

-- --------------------------------------------------------

--
-- Table structure for table `programs_users`
--

CREATE TABLE `programs_users` (
  `id` int(11) NOT NULL,
  `program_id` varchar(36) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs_users`
--

INSERT INTO `programs_users` (`id`, `program_id`, `user_id`) VALUES
(57, '4f59dee9-b4b0-48fa-bb14-ac713745968a', 10),
(6, '4f26a450-f4f4-44fa-b391-0a123745968f', 12),
(62, '4f59dee9-b4b0-48fa-bb14-1c713745968f', 28),
(9, '4f59dee9-b4b0-48fa-bb14-1c713745968f', 19),
(10, '4f26a450-f4f4-44fa-b391-0a123745968f', 19),
(56, '4f26a450-f4f4-44fa-b391-0a123745968f', 10),
(38, '4f59dee9-b4b0-48fa-bb14-1c713745968f', 23),
(33, '4f59dee9-b4b0-48fa-bb14-ac713745968a', 11),
(32, '4f26a450-f4f4-44fa-b391-0a123745968f', 11),
(39, '4f26a450-f4f4-44fa-b391-0a123745968f', 23),
(46, '4f59dee9-b4b0-48fa-bb14-ac713745968a', 18);

-- --------------------------------------------------------

--
-- Table structure for table `receives`
--

CREATE TABLE `receives` (
  `created_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_name` varchar(25) NOT NULL,
  `product_isbn` varchar(25) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `current_stock` int(11) NOT NULL,
  `new_stock` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `receives`
--

INSERT INTO `receives` (`created_datetime`, `product_name`, `product_isbn`, `supplier_id`, `current_stock`, `new_stock`) VALUES
('2016-11-09 10:53:00', 'tggg5', 'tggg5', 1, 20, 15),
('2016-11-09 10:55:13', 'tggg5', 'tggg5', 1, 20, 15),
('2016-11-09 10:58:35', 'tggg5', 'tggg5', 1, 20, 10),
('2016-11-09 10:59:03', 'rett', 'rett', 1, 35, 48),
('2016-11-09 10:59:26', 'rett', 'rett', 1, 35, 48),
('2016-11-09 10:59:43', 'tggg5', 'tggg5', 1, 35, 1),
('2016-11-09 10:59:55', 'tr554', 'tr554', 2, 35, 1000),
('2016-11-09 11:00:06', 'oplo3', 'oplo3', 1, 35, 56),
('2016-11-09 11:05:06', 'rett', 'rett', 1, 83, -10),
('2016-11-09 11:05:26', 'tr554', 'tr554', 2, 1035, -35);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `data` text,
  `expires` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `data`, `expires`) VALUES
('27dgtepcolta2p2gr0vj03mql6', 'Config|a:3:{s:9:"userAgent";s:32:"ea1aa12c473bc80fa76dd72aecf1d281";s:4:"time";i:1402909778;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:8:"redirect";s:1:"/";}', 1402909779),
('2ov0fmedo7qup4np7f8gs9hs61', 'Config|a:3:{s:9:"userAgent";s:32:"d0f783ad3270991709494a840c553113";s:4:"time";i:1405506824;s:9:"countdown";i:10;}m4rh_db|s:4:"m4rh";Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:6:{s:2:"id";s:1:"8";s:8:"username";s:6:"marcus";s:5:"email";s:23:"marcus@texttochange.com";s:8:"group_id";s:1:"1";s:7:"created";s:19:"2012-01-30 20:56:54";s:8:"modified";s:19:"2014-05-19 13:58:25";}}groupName|s:13:"administrator";', 1405506824),
('2q70ofv1be3sk3rk004hvcc9c7', 'Config|a:3:{s:9:"userAgent";s:32:"01037b4058071aac5960fb16780e020a";s:4:"time";i:1400838838;s:9:"countdown";i:10;}mrs_db|s:3:"mrs";', 1400838839),
('3erarsao0o02kud08rhoavd1m5', 'Config|a:3:{s:9:"userAgent";s:32:"7d04bec8beb0ab5816eb003b6ceec0ae";s:4:"time";i:1420618337;s:9:"countdown";i:10;}c4c_db|s:3:"c4c";newprogram_db|s:10:"newprogram";', 1420618337),
('3vbr1mi30qgvbses6i6kcmgrq6', 'Config|a:3:{s:9:"userAgent";s:32:"f2038270e31ead965499cf8028928dec";s:4:"time";i:1413497042;s:9:"countdown";i:10;}c4c_db|s:3:"c4c";', 1413497042),
('43nnfo5vstq0b1f6ui1u6p7ks5', 'Config|a:3:{s:9:"userAgent";s:32:"07788028e80866dfcd571fa1148b7206";s:4:"time";i:1416495117;s:9:"countdown";i:10;}c4c_db|s:3:"c4c";', 1416495117),
('51k9j7bn4crd4hgst3cmn6a574', 'Config|a:3:{s:9:"userAgent";s:32:"1cbb41d2367f010ce2fcd979ace4f3bf";s:4:"time";i:1427698589;s:9:"countdown";i:10;}ctfk2040_db|s:8:"ctfk2040";', 1427698589),
('547f3cq6m71d42cdv42psiubs4', 'Config|a:3:{s:9:"userAgent";s:32:"1cbb41d2367f010ce2fcd979ace4f3bf";s:4:"time";i:1424858955;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:7:{s:2:"id";s:1:"8";s:8:"username";s:6:"marcus";s:5:"email";s:23:"marcus@texttochange.com";s:8:"group_id";s:1:"1";s:10:"invited_by";s:1:"0";s:7:"created";s:19:"2012-01-30 20:56:54";s:8:"modified";s:19:"2014-05-19 13:58:25";}}groupName|s:13:"administrator";newprogram_db|s:10:"newprogram";', 1424858955),
('59ccni86isaj23ob489jl6mv06', 'Config|a:3:{s:9:"userAgent";s:32:"2b0966c2da55693355cc6a7e3f099638";s:4:"time";i:1418228365;s:9:"countdown";i:10;}c4c_db|s:3:"c4c";', 1418228365),
('5koiv92mm54hsb8ruq25t7ajr6', 'Config|a:3:{s:9:"userAgent";s:32:"9151365bef34165f842b802877685f3e";s:4:"time";i:1422017141;s:9:"countdown";i:10;}c4c_db|s:3:"c4c";', 1422017141),
('6chdchvunbno1qgra8obaksp05', 'Config|a:3:{s:9:"userAgent";s:32:"1cbb41d2367f010ce2fcd979ace4f3bf";s:4:"time";i:1425365065;s:9:"countdown";i:10;}newprogram_db|s:10:"newprogram";', 1425365065),
('94il35d3j7t24l0sh3jbpfiit3', 'Config|a:3:{s:9:"userAgent";s:32:"d238821cdec051ca65ff0b30447a71c4";s:4:"time";i:1399830558;s:9:"countdown";i:10;}m4rh_db|s:4:"m4rh";', 1399830564),
('cbbspoc18i9hnqtpg964kohi47', 'Config|a:3:{s:9:"userAgent";s:32:"af8d2274a5ef34f9b0d228c2a1bfe4f8";s:4:"time";i:1406276889;s:9:"countdown";i:10;}m4rh_db|s:4:"m4rh";', 1406276889),
('cl6bckd4sgp7bs2nvq5e30t4m2', 'Config|a:3:{s:9:"userAgent";s:32:"9151365bef34165f842b802877685f3e";s:4:"time";i:1421915756;s:9:"countdown";i:10;}c4c_db|s:3:"c4c";', 1421915756),
('csf0b6n8772jqjk674sj2eakt4', 'Config|a:3:{s:9:"userAgent";s:32:"ea1aa12c473bc80fa76dd72aecf1d281";s:4:"time";i:1403786306;s:9:"countdown";i:10;}m4rh_db|s:4:"m4rh";', 1403786306),
('ctkmf5ah1deetjdkud0irsi7i7', 'Config|a:3:{s:9:"userAgent";s:32:"1cbb41d2367f010ce2fcd979ace4f3bf";s:4:"time";i:1424931270;s:9:"countdown";i:10;}newprogram_db|s:10:"newprogram";', 1424931270),
('e20en2i0pkqpvpkjjj1qcia9r4', 'Config|a:3:{s:9:"userAgent";s:32:"040e2bb08b9c6cecc0f619445d6ff3da";s:4:"time";i:1410965344;s:9:"countdown";i:10;}c4c_db|s:3:"c4c";', 1410965344),
('e4cavgn39o4ahf9g8r551jfmq4', 'Config|a:3:{s:9:"userAgent";s:32:"958e100199b3bd07e1b016f349b1c5ff";s:4:"time";i:1401378885;s:9:"countdown";i:10;}mrs_db|s:3:"mrs";', 1401378886),
('g2n9q4qdsc1j408m5hggid3vr1', 'Config|a:3:{s:9:"userAgent";s:32:"07788028e80866dfcd571fa1148b7206";s:4:"time";i:1417004060;s:9:"countdown";i:10;}c4c_db|s:3:"c4c";', 1417004060),
('g424oi5bqh0g96vq8evcoi25h2', 'Config|a:3:{s:9:"userAgent";s:32:"ea1aa12c473bc80fa76dd72aecf1d281";s:4:"time";i:1402909784;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:6:{s:2:"id";s:1:"8";s:8:"username";s:6:"marcus";s:5:"email";s:23:"marcus@texttochange.com";s:8:"group_id";s:1:"1";s:7:"created";s:19:"2012-01-30 20:56:54";s:8:"modified";s:19:"2014-05-19 13:58:25";}}groupName|s:13:"administrator";', 1402909784),
('gd0240s3udge88glvtbfsuk5j2', 'Config|a:3:{s:9:"userAgent";s:32:"7d04bec8beb0ab5816eb003b6ceec0ae";s:4:"time";i:1421073345;s:9:"countdown";i:10;}newprogram_db|s:10:"newprogram";', 1421073345),
('gsouej66c5q6nrsp9clo0br9l5', 'Config|a:3:{s:9:"userAgent";s:32:"7d04bec8beb0ab5816eb003b6ceec0ae";s:4:"time";i:1418847195;s:9:"countdown";i:10;}c4c_db|s:3:"c4c";', 1418847195),
('h2sks29jb2vjl19851oomin1q6', 'Config|a:3:{s:9:"userAgent";s:32:"1cbb41d2367f010ce2fcd979ace4f3bf";s:4:"time";i:1424941813;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:8:"redirect";s:1:"/";}', 1424941814),
('iopquarroid3rbrphlfjb44ik4', 'Config|a:3:{s:9:"userAgent";s:32:"958e100199b3bd07e1b016f349b1c5ff";s:4:"time";i:1401801079;s:9:"countdown";i:10;}m4rh_db|s:4:"m4rh";', 1401801082),
('kg2u2b09p1bngm09ajli0tp6g2', 'Config|a:3:{s:9:"userAgent";s:32:"07788028e80866dfcd571fa1148b7206";s:4:"time";i:1417159135;s:9:"countdown";i:10;}c4c_db|s:3:"c4c";', 1417159135),
('kqr81rhp83f22hegelvu6nf9l4', 'Config|a:3:{s:9:"userAgent";s:32:"07788028e80866dfcd571fa1148b7206";s:4:"time";i:1417432577;s:9:"countdown";i:10;}c4c_db|s:3:"c4c";', 1417432577),
('l1q9pvi3ek5u8cg6qvpdlf59e4', 'Config|a:3:{s:9:"userAgent";s:32:"d238821cdec051ca65ff0b30447a71c4";s:4:"time";i:1398976839;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:4:"User";a:6:{s:2:"id";s:1:"8";s:8:"username";s:6:"marcus";s:5:"email";s:23:"marcus@texttochange.com";s:8:"group_id";s:1:"1";s:7:"created";s:19:"2012-01-30 20:56:54";s:8:"modified";s:19:"2012-01-30 20:56:54";}}groupName|s:13:"administrator";', 1398976839),
('l28jrtkhsbb4jl6bqd5drf51j4', 'Config|a:3:{s:9:"userAgent";s:32:"07788028e80866dfcd571fa1148b7206";s:4:"time";i:1417164827;s:9:"countdown";i:10;}c4c_db|s:3:"c4c";', 1417164827),
('n32fgb5qjcieco8nvnii61u0j0', 'Config|a:3:{s:9:"userAgent";s:32:"ea1aa12c473bc80fa76dd72aecf1d281";s:4:"time";i:1405323462;s:9:"countdown";i:10;}', 1405323462),
('pu8ne4vu7jfnt836tug6av05l3', 'Config|a:3:{s:9:"userAgent";s:32:"1cbb41d2367f010ce2fcd979ace4f3bf";s:4:"time";i:1427120113;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:8:"redirect";s:15:"/programs/index";}', 1427120113),
('reb52u8e5av2k0hcnenk5ihvp3', 'Config|a:3:{s:9:"userAgent";s:32:"ada1f369e5793efb7f81c77a6d94bde1";s:4:"time";i:1415820417;s:9:"countdown";i:10;}c4c_db|s:3:"c4c";', 1415820417),
('s1r4cia3jh06g7slp6pffa2h63', 'Config|a:3:{s:9:"userAgent";s:32:"7d04bec8beb0ab5816eb003b6ceec0ae";s:4:"time";i:1418650306;s:9:"countdown";i:10;}Message|a:1:{s:4:"auth";a:3:{s:7:"message";s:47:"You are not authorized to access that location.";s:7:"element";s:7:"default";s:6:"params";a:0:{}}}Auth|a:1:{s:8:"redirect";s:1:"/";}', 1418650306),
('t0cup7fje7bnhl4hf10nqo1ub3', 'Config|a:3:{s:9:"userAgent";s:32:"0e6c1542a8f630a85580d7bf38be3cce";s:4:"time";i:1406889436;s:9:"countdown";i:10;}m4rh_db|s:4:"m4rh";', 1406889436),
('t0r0kjp2nnhoedamrqlrrno4m4', 'Config|a:3:{s:9:"userAgent";s:32:"ada1f369e5793efb7f81c77a6d94bde1";s:4:"time";i:1415130537;s:9:"countdown";i:10;}c4c_db|s:3:"c4c";', 1415130537),
('t146vlrqgjafb12ff8kkt76nn4', 'Config|a:3:{s:9:"userAgent";s:32:"07788028e80866dfcd571fa1148b7206";s:4:"time";i:1417271171;s:9:"countdown";i:10;}c4c_db|s:3:"c4c";mrs_db|s:3:"mrs";Auth|a:1:{s:4:"User";a:6:{s:2:"id";s:1:"8";s:8:"username";s:6:"marcus";s:5:"email";s:23:"marcus@texttochange.com";s:8:"group_id";s:1:"1";s:7:"created";s:19:"2012-01-30 20:56:54";s:8:"modified";s:19:"2014-05-19 13:58:25";}}groupName|s:13:"administrator";Message|a:0:{}', 1417271171),
('u6qntcuucbv0d3jrhrd68rluv5', 'Config|a:3:{s:9:"userAgent";s:32:"f2038270e31ead965499cf8028928dec";s:4:"time";i:1412958558;s:9:"countdown";i:10;}c4c_db|s:3:"c4c";', 1412958558),
('u9i2i954p595g7b9aqa2g9kmm2', 'Config|a:3:{s:9:"userAgent";s:32:"07788028e80866dfcd571fa1148b7206";s:4:"time";i:1417509667;s:9:"countdown";i:10;}c4c_db|s:3:"c4c";', 1417509667),
('vshtqee1lpjg9opl1mnltsfr57', 'Config|a:3:{s:9:"userAgent";s:32:"07788028e80866dfcd571fa1148b7206";s:4:"time";i:1416831385;s:9:"countdown";i:10;}c4c_db|s:3:"c4c";', 1416831385);

-- --------------------------------------------------------

--
-- Table structure for table `store_homes`
--

CREATE TABLE `store_homes` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_import_code` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(25) NOT NULL,
  `carton` int(11) NOT NULL,
  `pieces` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `company_name` varchar(25) NOT NULL,
  `supplier_name` varchar(25) NOT NULL,
  `supplier_contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `company_name`, `supplier_name`, `supplier_contact`) VALUES
(1, 'kkl2', 'tom', '075511'),
(2, 'johnson', 'tomas', '01256222224');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `group_id` int(11) NOT NULL,
  `invited_by` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `group_id`, `invited_by`, `created`, `modified`) VALUES
(17, 'jan', 'eaf35d49b7fe974eca4ef4b8a8c775f7a8b7d270', 'jan@texttochange.com', 2, 0, '2012-05-17 09:28:14', '2012-05-17 09:28:14'),
(10, 'maureen', 'c2260807724f3796957651b60b5bd99eaba9c3ec', 'maureen@texttochange.com', 3, 0, '2012-01-30 20:57:40', '2015-01-07 14:22:07'),
(11, 'unicef', 'edcd5da41fb73b732af57a5c810ea7735fef646f', 'unicef@texttochange.com', 4, 0, '2012-01-30 20:58:11', '2014-05-20 12:32:42'),
(12, 'unilever', '5fa3c44a0dbeb76daafe1bbb62d1954c4d556621', 'unilever@texttochange.com', 4, 0, '2012-01-30 20:58:38', '2012-01-30 20:58:38'),
(8, 'marcus', 'df4cdd0f6d2ec16fa59f1a1f2c6d2f12b909c6f1', 'marcus@texttochange.com', 1, 0, '2012-01-30 20:56:54', '2014-05-19 13:58:25'),
(18, 'giz', '8cb5380f6b2e8b9db3ce4555266e47dfcde028d3', 'giz@texttochange.com', 4, 0, '2013-01-16 09:31:41', '2014-11-28 07:33:51'),
(19, 'testPC', 'd6b7a45aa446d0498dae453f1600155d0e4b5701', 'testPC@texttochange.com', 3, 0, '2013-02-21 14:41:38', '2013-02-21 14:41:38'),
(23, 'newpm', '91f85d707e39df6dc6c9f12b9d8f502da55aa2a9', 'newpm@texttochange.com', 3, 0, '2014-05-27 08:40:44', '2014-07-09 18:33:47'),
(24, 'toto', 'c62107764e0a7530d23c4beb65fea50edb4e33c2', 'toto@gmail.com', 1, 0, '2014-10-14 12:11:57', '2014-10-14 12:11:57'),
(28, 'marktest', 'f54eff42455f64b7bc621163e325f10f35d999b4', 'markphi119@gmail.com', 3, 0, '2015-02-27 09:08:19', '2015-02-27 15:24:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acos`
--
ALTER TABLE `acos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aros`
--
ALTER TABLE `aros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aros_acos`
--
ALTER TABLE `aros_acos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aro_aco_key` (`aro_id`,`aco_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i18n`
--
ALTER TABLE `i18n`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locale` (`locale`),
  ADD KEY `model` (`model`),
  ADD KEY `row_id` (`foreign_key`),
  ADD KEY `field` (`field`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs_users`
--
ALTER TABLE `programs_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receives`
--
ALTER TABLE `receives`
  ADD PRIMARY KEY (`created_datetime`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `users_username_key` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acos`
--
ALTER TABLE `acos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=395;
--
-- AUTO_INCREMENT for table `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `i18n`
--
ALTER TABLE `i18n`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(27) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `programs_users`
--
ALTER TABLE `programs_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
