-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 20. 12 2016 kl. 10:02:38
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
-- Struktur-dump for tabellen `blog`
--

CREATE TABLE `blog` (
  `bid` int(11) NOT NULL,
  `btilte` varchar(120) NOT NULL,
  `bpic` varchar(120) DEFAULT NULL,
  `bPicAlt` varchar(120) DEFAULT NULL,
  `bpost` longtext,
  `bdate` date DEFAULT NULL,
  `firstName` varchar(120) NOT NULL,
  `lastName` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `blog`
--

INSERT INTO `blog` (`bid`, `btilte`, `bpic`, `bPicAlt`, `bpost`, `bdate`, `firstName`, `lastName`) VALUES
(11, 'title', 'premiere-pro-cover.png', 'alt text for image', '\r\nHvor kommer det fra?\r\n\r\nI modsÃ¦tning til hvad mange tror, er Lorem Ipsum ikke bare tilfÃ¦ldig tekst. Det stammer fra et stykke litteratur pÃ¥ latin fra Ã¥r 45 f.kr., hvilket gÃ¸r teksten over 2000 Ã¥r gammel. Richard McClintock, professor i latin fra Hampden-Sydney universitet i Virginia, undersÃ¸gte et af de mindst kendte ord "consectetur" fra en del af Lorem Ipsum, og fandt frem til dets oprindelse ved at studere brugen gennem klassisk litteratur. Lorem Ipsum stammer fra afsnittene 1.10.32 og 1.10.33 fra "de Finibus Bonorum et Malorum" (Det gode og ondes ekstremer), som er skrevet af Cicero i Ã¥r 45 f.kr. Bogen, som var meget populÃ¦r i renÃ¦ssancen, er en afhandling om etik. Den fÃ¸rste linie af Lorem Ipsum "Lorem ipsum dolor sit amet..." kommer fra en linje i afsnit 1.10.32.\r\n\r\nStandardafsnittet af Lorem Ipsum, som er brugt siden 1500-tallet, er gengivet nedenfor for de, der er interesserede. Afsnittene 1.10.32 og 1.10.33 fra "de Finibus Bonorum et Malorum" af Cicero er ogsÃ¥ gengivet i deres nÃ¸jagtige udgave i selskab med den engelske udgave fra oversÃ¦ttelsen af H. Rackham fra 1914.\r\n', '2016-11-11', 'Morten', 'Lund'),
(12, 'title', 'premiere-pro-cover.png', 'alt text for image', '\r\nHvor kommer det fra?\r\n\r\nI modsÃ¦tning til hvad mange tror, er Lorem Ipsum ikke bare tilfÃ¦ldig tekst. Det stammer fra et stykke litteratur pÃ¥ latin fra Ã¥r 45 f.kr., hvilket gÃ¸r teksten over 2000 Ã¥r gammel. Richard McClintock, professor i latin fra Hampden-Sydney universitet i Virginia, undersÃ¸gte et af de mindst kendte ord "consectetur" fra en del af Lorem Ipsum, og fandt frem til dets oprindelse ved at studere brugen gennem klassisk litteratur. Lorem Ipsum stammer fra afsnittene 1.10.32 og 1.10.33 fra "de Finibus Bonorum et Malorum" (Det gode og ondes ekstremer), som er skrevet af Cicero i Ã¥r 45 f.kr. Bogen, som var meget populÃ¦r i renÃ¦ssancen, er en afhandling om etik. Den fÃ¸rste linie af Lorem Ipsum "Lorem ipsum dolor sit amet..." kommer fra en linje i afsnit 1.10.32.\r\n\r\nStandardafsnittet af Lorem Ipsum, som er brugt siden 1500-tallet, er gengivet nedenfor for de, der er interesserede. Afsnittene 1.10.32 og 1.10.33 fra "de Finibus Bonorum et Malorum" af Cicero er ogsÃ¥ gengivet i deres nÃ¸jagtige udgave i selskab med den engelske udgave fra oversÃ¦ttelsen af H. Rackham fra 1914.\r\n', '2016-11-11', 'Morten', 'Lund'),
(13, 'this a awesome', 'indesign-cover.png', 'indesign cover', 'fuck yea e are goinh to rule the fucking world\r\n\r\nDer er mange tilgÃ¦ngelige udgaver af Lorem Ipsum, men de fleste udgaver har gennemgÃ¥et forandringer, nÃ¥r nogen har tilfÃ¸jet humor eller tilfÃ¦ldige ord, som pÃ¥ ingen mÃ¥de ser Ã¦gte ud. Hvis du skal bruge en udgave af Lorem Ipsum, skal du sikre dig, at der ikke indgÃ¥r noget pinligt midt i teksten. Alle Lorem Ipsum-generatore pÃ¥ nettet har en tendens til kun at dublere smÃ¥ brudstykker af Lorem Ipsum efter behov, hvilket gÃ¸r dette til den fÃ¸rste Ã¦gte generator pÃ¥ internettet. Den bruger en ordbog pÃ¥ over 200 ord pÃ¥ latin kombineret med en hÃ¥ndfuld sÃ¦tningsstrukturer til at generere sÃ¦tninger, som ser pÃ¥lidelige ud. Resultatet af Lorem Ipsum er derfor altid fri for gentagelser, tilfÃ¸jet humor eller utrovÃ¦rdige ord osv.', '2016-11-11', 'Sebelebe', 'huffuloffer'),
(14, 'cunty tilte', 'coding-cover.png', 'coding cover', 'I modsÃ¦tning til hvad mange tror, er Lorem Ipsum ikke bare tilfÃ¦ldig tekst. Det stammer fra et stykke litteratur pÃ¥ latin fra Ã¥r 45 f.kr., hvilket gÃ¸r teksten over 2000 Ã¥r gammel. Richard McClintock, professor i latin fra Hampden-Sydney universitet i Virginia, undersÃ¸gte et af de mindst kendte ord "consectetur" fra en del af Lorem Ipsum, og fandt frem til dets oprindelse ved at studere brugen gennem klassisk litteratur. Lorem Ipsum stammer fra afsnittene 1.10.32 og 1.10.33 fra "de Finibus Bonorum et Malorum" (Det gode og ondes ekstremer), som er skrevet af Cicero i Ã¥r 45 f.kr. Bogen, som var meget populÃ¦r i renÃ¦ssancen, er en afhandling om etik. Den fÃ¸rste linie af Lorem Ipsum "Lorem ipsum dolor sit amet..." kommer fra en linje i afsnit 1.10.32.\r\n\r\nStandardafsnittet af Lorem Ipsum, som er brugt siden 1500-tallet, er gengivet nedenfor for de, der er interesserede. Afsnittene 1.10.32 og 1.10.33 fra "de Finibus Bonorum et Malorum" af Cicero er ogsÃ¥ gengivet i deres nÃ¸jagtige udgave i selskab med den engelske udgave fra oversÃ¦ttelsen af H. Rackham fra 1914.', '2016-11-11', 'killer', 'cunt');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`bid`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
