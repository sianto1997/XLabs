-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 21 jun 2015 om 12:37
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xlabs`
--
CREATE SCHEMA IF NOT EXISTS `xlabs` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `xlabs` ;

-- --------------------------------------------------------

--
-- Table structure for the table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `alt_email` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT "1",
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `users` (`id`, `username`, `password`, `alt_email`, `role`, `created`, `modified`) VALUES
(1, 'admin', '$2a$10$A4hCeJOH7inB382GQbuP7eysTCNktJePeAkQHkjwIg1bSILM.Gdn6', 'siantonides@gmail.com', 'admin', '2015-06-21 10:46:26', '2015-06-21 10:46:26'),
(2, 'user', '$2a$10$A4hCeJOH7inB382GQbuP7eysTCNktJePeAkQHkjwIg1bSILM.Gdn6', 'sianto1997@msn.com', 'user', '2015-06-21 10:46:26', '2015-06-21 10:46:26');


CREATE TABLE IF NOT EXISTS `programmes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


INSERT INTO `programmes` (`id`, `name`, `description`, `logo`, `created`, `modified`) VALUES
(1, 'Project M', 'Project M is a Mailclient from the XLabs team. You can join it to find out what it is all about.', 'proj-m.png', '2015-06-21 10:46:26', '2015-06-21 10:46:26'),
(2, 'Project AV', 'Project AV is another project from the XLabs team. You can join it to find out what it is all about.', 'proj-av.png', '2015-06-21 10:46:26', '2015-06-21 10:46:26');

CREATE TABLE IF NOT EXISTS `joined_programmes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `programme_id` int(10) DEFAULT NULL,
  `visible` bool DEFAULT NULL,
  `joined` bool DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


INSERT INTO `joined_programmes` (`id`, `user_id`, `programme_id`, `visible`, `joined`, `created`, `modified`) VALUES
(1, 1, 1, true, false, '2015-06-21 10:46:26', '2015-06-21 10:46:26'),
(2, 1, 2, true, false, '2015-06-21 10:46:26', '2015-06-21 10:46:26');


CREATE TABLE IF NOT EXISTS `programmes_screenshots` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `programmes_id` int(10) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
