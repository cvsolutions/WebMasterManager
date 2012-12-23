-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Dic 23, 2012 alle 11:23
-- Versione del server: 5.5.25
-- Versione PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webmastermanager`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `wm_account`
--

CREATE TABLE `wm_account` (
  `id` int(11) NOT NULL,
  `hosting` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `information` text NOT NULL,
  `registered` datetime NOT NULL,
  `sending` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `wm_hosting`
--

CREATE TABLE `wm_hosting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `expiry` date NOT NULL,
  `host_type` int(11) NOT NULL,
  `type_ftp` int(1) NOT NULL,
  `host_ftp` varchar(255) NOT NULL,
  `user_ftp` varchar(255) NOT NULL,
  `pwd_ftp` varchar(255) NOT NULL,
  `port_ftp` int(11) NOT NULL,
  `transfer_ftp` int(11) NOT NULL,
  `sending_ftp` int(11) NOT NULL,
  `type_db` int(11) NOT NULL,
  `host_db` varchar(255) NOT NULL,
  `user_db` varchar(255) NOT NULL,
  `pwd_db` varchar(255) NOT NULL,
  `sending_db` int(11) NOT NULL,
  `host_email` varchar(255) NOT NULL,
  `pwd_email` varchar(255) NOT NULL,
  `imap_email` varchar(255) NOT NULL,
  `pop_email` varchar(255) NOT NULL,
  `smtp_email` varchar(255) NOT NULL,
  `sending_email` int(11) NOT NULL,
  `provider` int(11) NOT NULL,
  `information` text NOT NULL,
  `auth_info` varchar(255) NOT NULL,
  `registered` datetime NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `domain` (`domain`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `wm_settings`
--

CREATE TABLE `wm_settings` (
  `name` varchar(255) NOT NULL,
  `usermail` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `signature` text NOT NULL,
  `last_login` datetime NOT NULL,
  KEY `usermail` (`usermail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
