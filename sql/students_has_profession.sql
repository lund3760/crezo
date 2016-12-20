-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 20. 12 2016 kl. 10:04:06
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
-- Struktur-dump for tabellen `students_has_profession`
--

CREATE TABLE `students_has_profession` (
  `students_idStudents` int(11) NOT NULL,
  `profession_profId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `students_has_profession`
--
ALTER TABLE `students_has_profession`
  ADD PRIMARY KEY (`students_idStudents`,`profession_profId`),
  ADD KEY `fk_students_has_profession_profession1_idx` (`profession_profId`),
  ADD KEY `fk_students_has_profession_students_idx` (`students_idStudents`);

--
-- Begrænsninger for dumpede tabeller
--

--
-- Begrænsninger for tabel `students_has_profession`
--
ALTER TABLE `students_has_profession`
  ADD CONSTRAINT `fk_students_has_profession_profession1` FOREIGN KEY (`profession_profId`) REFERENCES `profession` (`profId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_students_has_profession_students` FOREIGN KEY (`students_idStudents`) REFERENCES `students` (`idStudents`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
