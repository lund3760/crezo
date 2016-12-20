-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 20. 12 2016 kl. 10:03:57
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
-- Struktur-dump for tabellen `students_has_institutions`
--

CREATE TABLE `students_has_institutions` (
  `students_idStudents` int(11) NOT NULL,
  `institutions_instId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `students_has_institutions`
--
ALTER TABLE `students_has_institutions`
  ADD PRIMARY KEY (`students_idStudents`,`institutions_instId`),
  ADD KEY `fk_students_has_institutions_institutions1_idx` (`institutions_instId`),
  ADD KEY `fk_students_has_institutions_students1_idx` (`students_idStudents`);

--
-- Begrænsninger for dumpede tabeller
--

--
-- Begrænsninger for tabel `students_has_institutions`
--
ALTER TABLE `students_has_institutions`
  ADD CONSTRAINT `fk_students_has_institutions_institutions1` FOREIGN KEY (`institutions_instId`) REFERENCES `institutions` (`instId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_students_has_institutions_students1` FOREIGN KEY (`students_idStudents`) REFERENCES `students` (`idStudents`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
