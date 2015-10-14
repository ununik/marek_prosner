-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vygenerováno: Stř 14. říj 2015, 16:32
-- Verze serveru: 5.5.44-0ubuntu0.14.04.1
-- Verze PHP: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `marek_prosner`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `o_mne`
--

CREATE TABLE IF NOT EXISTS `o_mne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=2 ;

--
-- Vypisuji data pro tabulku `o_mne`
--

INSERT INTO `o_mne` (`id`, `text`) VALUES
(1, 'Neco noveho o mndasdsahif asd fjopsda fpsd jfsdpoj psdpofj sdpojf sdiofhoisdho;fhsdoih fo;isdhfio hsd ff');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
