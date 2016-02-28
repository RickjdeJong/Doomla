-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 28 feb 2016 om 23:39
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `doomla`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pagecontent`
--

CREATE TABLE IF NOT EXISTS `pagecontent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(20) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `menu` text NOT NULL,
  `menuorder` int(11) NOT NULL,
  `template` varchar(20) NOT NULL,
  `pagecontent_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Gegevens worden geëxporteerd voor tabel `pagecontent`
--

INSERT INTO `pagecontent` (`id`, `page`, `title`, `content`, `menu`, `menuorder`, `template`, `pagecontent_id`) VALUES
(1, 'home', 'Home', '<h1>Doomla</h1><p>Doomla is a CMS which inovates the way you create website</p>\r\n\r\n', 'HOME', 2, 'normal', NULL),
(4, 'help', 'Help - How it works.', '<h1>How it works</h1>\r\n<p>Log in to the admin panel to change your pages<br>\r\n<a href="/doomla/doomla/admin">Click here</a>', 'HELP', 1, 'normal', 1),
(5, 'night', 'night', '<h1>Doomla at night!</h1>\r\n<p>Doomla also has a night theme!</p>', 'NIGHT', 3, 'night', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
