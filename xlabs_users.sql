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
-- Databas: `xlabs_users`
--
CREATE SCHEMA IF NOT EXISTS `xlabs_users` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `xlabs_users` ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
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

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `alt_email`, `role`, `created`, `modified`) VALUES
(1, 'admin', '$2a$10$A4hCeJOH7inB382GQbuP7eysTCNktJePeAkQHkjwIg1bSILM.Gdn6', 'siantonides@gmail.com', 'admin', '2015-06-21 10:46:26', '2015-06-21 10:46:26'),
(2, 'user', '$2a$10$A4hCeJOH7inB382GQbuP7eysTCNktJePeAkQHkjwIg1bSILM.Gdn6', 'sianto1997@msn.com', 'user', '2015-06-21 10:46:26', '2015-06-21 10:46:26');



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
