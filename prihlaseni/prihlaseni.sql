-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vygenerováno: Pon 01. úno 2016, 08:38
-- Verze MySQL: 5.5.20
-- Verze PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `maaplikace`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `uzivatele`
--

CREATE TABLE IF NOT EXISTS `uzivatele` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `jmeno` varchar(20) COLLATE utf8_czech_ci NOT NULL,
  `prijmeni` varchar(30) COLLATE utf8_czech_ci NOT NULL,
  `ujmeno` varchar(20) COLLATE utf8_czech_ci NOT NULL,
  `heslo` varchar(20) COLLATE utf8_czech_ci NOT NULL,
  `skupina` varchar(20) COLLATE utf8_czech_ci NOT NULL,
  `povoleno` char(1) COLLATE utf8_czech_ci NOT NULL,
  `poznamka` text COLLATE utf8_czech_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=6 ;

--
-- Vypisuji data pro tabulku `uzivatele`
--

INSERT INTO `uzivatele` (`id`, `jmeno`, `prijmeni`, `ujmeno`, `heslo`, `skupina`, `povoleno`, `poznamka`) VALUES
(1, 'Karel', 'Novák', 'knovak', 'karel2', 'administrators', 'A', 'pobočka A, dočasně'),
(2, 'Jan', 'Veselý', 'jvesely', '123456', 'technik', 'A', NULL),
(3, 'Jiří', 'Nový', 'jnovy', 'heslo', 'technik', 'N', 'dočasně pozastavený přístup'),
(4, 'Pavla', 'Syrová', 'psyrova', '654321', 'ucetni', 'A', NULL),
(5, 'Jana', 'Veselá', 'jvesela', 'jana123', 'ucetni', 'N', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
