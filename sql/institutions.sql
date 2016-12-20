-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 20. 12 2016 kl. 10:03:03
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
-- Struktur-dump for tabellen `institutions`
--

CREATE TABLE `institutions` (
  `instId` int(11) NOT NULL,
  `instname` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `institutions`
--

INSERT INTO `institutions` (`instId`, `instname`) VALUES
(1, 'cphbusiness'),
(2, 'ku'),
(3, 'cps'),
(4, 'kea'),
(5, 'sdu');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `institutions`
--
ALTER TABLE `institutions`
  ADD PRIMARY KEY (`instId`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `institutions`
--
ALTER TABLE `institutions`
  MODIFY `instId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
