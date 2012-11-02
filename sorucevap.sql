-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 02 Nov 2012 om 11:07
-- Serverversie: 5.5.8
-- PHP-Versie: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sorucevap`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `aktivasyon`
--

CREATE TABLE IF NOT EXISTS `aktivasyon` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `kod` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Gegevens worden uitgevoerd voor tabel `aktivasyon`
--

INSERT INTO `aktivasyon` (`id`, `kod`) VALUES
(23, 'c4ca4238a0b923820dcc509a6f75849b'),
(24, '3c59dc048e8850243be8079a5c74d079');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bildiri`
--

CREATE TABLE IF NOT EXISTS `bildiri` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `hesap` varchar(255) NOT NULL,
  `mesaj` varchar(255) NOT NULL,
  `durum` tinyint(1) NOT NULL,
  `tur` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden uitgevoerd voor tabel `bildiri`
--

INSERT INTO `bildiri` (`id`, `hesap`, `mesaj`, `durum`, `tur`) VALUES
(4, 'yk_50843a7d7b915', 'sorunuza cevap verdi.', 0, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `hesap`
--

CREATE TABLE IF NOT EXISTS `hesap` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `isimsoyisim` varchar(255) DEFAULT NULL,
  `acces` tinyint(1) DEFAULT NULL,
  `uniq` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Gegevens worden uitgevoerd voor tabel `hesap`
--

INSERT INTO `hesap` (`id`, `email`, `pass`, `isimsoyisim`, `acces`, `uniq`) VALUES
(15, 'yasin35kucuk@gmail.com', '202cb962ac59075b964b07152d234b70', 'king.achiles', 1, 'yk_50843a7d7b916'),
(16, 'dededede dede', '202cb962ac59075b964b07152d234b70', 'deneme', 1, 'yk_50843a7d7b915'),
(17, 'dededeeded324124', '202cb962ac59075b964b07152d234b70', 'ddene beni', 1, 'yk_50843a7d7b917'),
(18, 'yasin_kucuk@live.nl', '202cb962ac59075b964b07152d234b70', 'Yasin Kucuk', 1, 'yk_5086fdeed6566');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sorular`
--

CREATE TABLE IF NOT EXISTS `sorular` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `soru` varchar(255) DEFAULT NULL,
  `soran` varchar(255) DEFAULT NULL,
  `cevaplayan` varchar(255) DEFAULT NULL,
  `cevap` varchar(255) DEFAULT NULL,
  `tarih` varchar(255) DEFAULT NULL,
  `durum` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Gegevens worden uitgevoerd voor tabel `sorular`
--

INSERT INTO `sorular` (`id`, `soru`, `soran`, `cevaplayan`, `cevap`, `tarih`, `durum`) VALUES
(1, 'Ne zamandan beri PHP ile ugrasiyorsunuz ?', 'yk_5086fdeed6566', 'yk_50843a7d7b916', '', '1351202294', 0),
(2, 'Su ana kadar kac projede calistiniz ?', 'yk_50843a7d7b917', 'yk_50843a7d7b916', '', '1351202294', 0),
(3, 'PHP ogrenme amaciniz neydi ?', 'yk_50843a7d7b915', 'yk_50843a7d7b916', '', '1351202294', 0),
(4, 'Jquery sizce ogrenmelimiyim ?', 'yk_50843a7d7b915', 'yk_50843a7d7b916', '', '1351202294', 0),
(5, 'ASP ve PHP arasindaki faklari anlatan bi makale biliyormusun ?', 'yk_5086fdeed6566', 'yk_50843a7d7b916', '', '1351202294', 0),
(6, 'Sen kimsin ?', 'yk_50843a7d7b915', 'yk_50843a7d7b916', 'ben benim ya sen kimsin ?', '1351202294', 1);
