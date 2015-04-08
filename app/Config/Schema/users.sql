-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2015 at 01:54 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  UNIQUE KEY `users_username_key` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `group_id`, `created`, `modified`) VALUES
(17, 'jan', 'eaf35d49b7fe974eca4ef4b8a8c775f7a8b7d270', 'jan@texttochange.com', 2, '2012-05-17 09:28:14', '2012-05-17 09:28:14'),
(10, 'maureen', 'c2260807724f3796957651b60b5bd99eaba9c3ec', 'maureen@texttochange.com', 3, '2012-01-30 20:57:40', '2015-01-07 14:22:07'),
(11, 'unicef', 'edcd5da41fb73b732af57a5c810ea7735fef646f', 'unicef@texttochange.com', 4, '2012-01-30 20:58:11', '2014-05-20 12:32:42'),
(12, 'unilever', '5fa3c44a0dbeb76daafe1bbb62d1954c4d556621', 'unilever@texttochange.com', 4, '2012-01-30 20:58:38', '2012-01-30 20:58:38'),
(8, 'marcus', '696245ec9cb4605c411cc3d19c4875d76633afb9', 'marcus@texttochange.com', 1, '2012-01-30 20:56:54', '2014-05-19 13:58:25'),
(18, 'giz', '8cb5380f6b2e8b9db3ce4555266e47dfcde028d3', 'giz@texttochange.com', 4, '2013-01-16 09:31:41', '2014-11-28 07:33:51'),
(19, 'testPC', 'd6b7a45aa446d0498dae453f1600155d0e4b5701', 'testPC@texttochange.com', 3, '2013-02-21 14:41:38', '2013-02-21 14:41:38'),
(23, 'newpm', '91f85d707e39df6dc6c9f12b9d8f502da55aa2a9', 'newpm@texttochange.com', 3, '2014-05-27 08:40:44', '2014-07-09 18:33:47'),
(24, 'toto', 'c62107764e0a7530d23c4beb65fea50edb4e33c2', 'toto@gmail.com', 1, '2014-10-14 12:11:57', '2014-10-14 12:11:57'),
(28, 'marktest', 'f54eff42455f64b7bc621163e325f10f35d999b4', 'markphi119@gmail.com', 3, '2015-02-27 09:08:19', '2015-02-27 15:24:13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
