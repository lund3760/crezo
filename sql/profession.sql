-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 20. 12 2016 kl. 10:03:35
-- Serverversion: 5.7.14
-- PHP-version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crezodb`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `profession`
--

CREATE TABLE `profession` (
  `profId` int(11) NOT NULL,
  `profname` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `profession`
--

INSERT INTO `profession` (`profId`, `profname`) VALUES
(2, 'designer'),
(3, 'marketing'),
(4, 'webdeveloper'),
(5, 'finance');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `profession`
--
ALTER TABLE `profession`
  ADD PRIMARY KEY (`profId`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `profession`
--
ALTER TABLE `profession`
  MODIFY `profId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
