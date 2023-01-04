-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 06:04 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etix`
--
CREATE DATABASE IF NOT EXISTS `etix` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `etix`;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `kdEvent` char(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `namaEvent` varchar(100) DEFAULT NULL,
  `tanggalEvent` date DEFAULT NULL,
  `lokasiEvent` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `poster` text DEFAULT NULL,
  `statusEvent` varchar(25) DEFAULT NULL,
  `kategoriEvent` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`kdEvent`),
  KEY `user_event_FK` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`kdEvent`, `username`, `namaEvent`, `tanggalEvent`, `lokasiEvent`, `deskripsi`, `poster`, `statusEvent`, `kategoriEvent`) VALUES
('53350', 'james_fth', 'Fifa World Cup', '2022-12-24', 'Qatar', 'The FIFA World Cup, often simply called the World Cup, is an international association football competition contested by the senior mens national teams of the members of the Fédération Internationale de Football Association (FIFA, the International Federation of Association Football), the sports global governing body. The tournament has been held every four years since the inaugural tournament in 1930, except in 1942 and 1946 when it was not held because of the Second World War. The reigning champions are France, who won their second title at the 2018 tournament in Russia.\r\n\r\nThe format involves a qualification phase, which takes place over the preceding three years, to determine which teams qualify for the tournament phase. In the tournament phase, 32 teams compete for the title at venues within the host nation(s) over about a month. The host nation(s) automatically qualify.', 'Poster-FIFA-World-Cup-Qatar-2022.jpg', 'On Sale', 'Sport'),
('A1398', 'amantha', 'Djakarta Warehouse Project - Jakarta', '2022-12-31', 'Jakarta International Expo', 'Djakarta Warehouse Project - Jakarta kembali digelar tahun 2022 ini. Promotor Ismaya Live sudah mengumumkan deretan artis yang akan tampil. Di antara nama-nama yang sudah diumumkan ada Martin Garrix dan Zedd.\r\nDWP 2022 digelar selama tiga hari pada 9, 10, dan 11 Desember 2022 di JIEXPO Kemayoran, Jakarta. Dalam rilis resminya, Ismaya Live mengumumkan lineup fase 1 DWP 2022 di antaranya Armin Van Buuren, DJ Snake, Hardwell, Illenium, Madeon (Live), Martin Garrix, Yellow Claw, dan Zedd.\r\n\r\n\"Lebih banyak artis lagi akan diumumkan!\" tulis promotor dalam posternya.\r\n', 'dwp-2022-_ratio-16x9-1[2].jpg', 'On Sale', 'Music'),
('A2207', 'james_fth', 'Dancing with the Stars', '2023-02-09', 'MGM National Harbor', 'Dancing with the Stars: Live! on Tour\r\n\r\nThe version of Dancing with the Stars that comes to venues all around the country has a lot in common with its TV iteration. It features some of your favorite celebrity guests from the series as well as some of the dance routines that have proven to be the most popular with fans of the show. The tour has presented everybody from comedians like Kel Mitchell to country singers like Lauren Alaina, TV stars like Kate Flannery, and many more. But the most crucial element the touring show offers over the TV version is that irreplaceable, unmistakable excitement you get from watching all the action take place right in front of you.\r\n\r\nDancing with the Stars: Live! Background\r\n\r\nThe story of Dancing with the Stars goes back to the British TV show Strictly Come Dancing, which premiered in 2004. The show\'s American cousin, Dancing with the Stars, first popped up the following year. Based on the same idea, it quickly captivated the country by presenting a slew of celebrities in competition with each other to show off their dance moves (with the expert aid of professional dance partners, of course). The phenomenon proved to have plenty of staying power, and the show remains on TV to this day, having inspired everything from spinoff programs to a video game and a series of exercise videos along the way. But the live touring version of Dancing with the Stars really takes the whole thing to another level, effectively putting all the action right in your lap, as the celebs strut their stuff on stage every night in front of eager audiences, with guests you know from the show tackling favorite routines you\'ve seen plus a few new ones.', 'Screenshot (183).png', 'On Sale', 'Arts & Theatre'),
('A2824', 'amantha', 'Alpensouth Festival - Pejaten', '2023-05-28', 'SMA AL Azhar II Pejaten', '‍Halo, sederek sedoyo! Piye kabare? Horas! Apa Kareba? Ba a kabanyo? SMA ISLAM AL AZHAR 2 PEJATEN mempersembahkan ALPEN INSOUTH 2019 : Persatuan Melampaui Segala Batas!', 'hispanic-heritage,-poster,-flyer,-festival,-design-template-e37efbcb661aa80a2c5bcc5fc97f005d_screen[1].jpg', 'On Sale', 'Arts & Theatre'),
('A5423', 'amantha', 'Equilibrium Festival 2022 - Jatinangor', '2023-06-14', 'Lapangan PPBS Jatinangor', 'Dancing with the Stars: Live! on Tour\r\n\r\nThe version of Dancing with the Stars that comes to venues all around the country has a lot in common with its TV iteration. It features some of your favorite celebrity guests from the series as well as some of the dance routines that have proven to be the most popular with fans of the show. The tour has presented everybody from comedians like Kel Mitchell to country singers like Lauren Alaina, TV stars like Kate Flannery, and many more. But the most crucial element the touring show offers over the TV version is that irreplaceable, unmistakable excitement you get from watching all the action take place right in front of you.\r\n\r\nDancing with the Stars: Live! Background\r\n\r\nThe story of Dancing with the Stars goes back to the British TV show Strictly Come Dancing, which premiered in 2004. The show\'s American cousin, Dancing with the Stars, first popped up the following year. Based on the same idea, it quickly captivated the country by presenting a slew of celebrities in competition with each other to show off their dance moves (with the expert aid of professional dance partners, of course). The phenomenon proved to have plenty of staying power, and the show remains on TV to this day, having inspired everything from spinoff programs to a video game and a series of exercise videos along the way. But the live touring version of Dancing with the Stars really takes the whole thing to another level, effectively putting all the action right in your lap, as the celebs strut their stuff on stage every night in front of eager audiences, with guests you know from the show tackling favorite routines you\'ve seen plus a few new ones.', 'logo-equilibrium-fest-2022-01.png', 'On Sale', 'Arts & Theatre'),
('M3560', 'amantha', 'We Are Yours Festival - Semarang', '2023-04-30', 'Klenteng Sam Poo Kong, Semarang ', 'Sudah siap dengan Festival Kota Lama Semarang? Festival Kota Lama Heritage Reborn\r\n\r\n\r\n', 'festival-kota-lama-semarang-jawa-tengah[1].jpg', 'On Sale', 'Music'),
('M4330', 'amantha', 'BLACKPINK Born Pink World  Tour', '2023-01-07', 'Jakarta', 'BLACKPINK IN YOUR AREAAA\r\n\r\nGrup K-pop legendaris, BLACKPINK akan datang kembali ke Jakarta untuk mempromosikan album terbaru mereka, BORN PINK melalui tur dunia mereka yang bertajuk, BLACKPINK WORLD TOUR [BORN PINK] JAKARTA pada tanggal 11 & 12 Maret 2023 di Stadion Utama Gelora Bung Karno, Jakarta!\r\n\r\nGrup beranggotakan empat orang ini akan menyapa BLINK Indonesia selama dua hari! Jadi, BLINKS, persiapkan dirimu untuk menari dan menyanyi bersama lagu-lagu hits mereka mulai dari Pink Venom, DDU-DU DDU-DU, Shut Down, BOOMBAYAH, dan masih banyak lagi!', 'Blackpink_O2_480x281copy-5a6a8c588b.png', 'On Sale', 'Music'),
('O1212', 'james_fth', 'NFL Super Bowl LVII Tickets', '2022-12-30', 'Concert Hall, Hong Kong City Hall', 'Every year, the Super Bowl brings big thrills to football fans across the country, pitting the Conference champions against each other for the final matchup of the season. Millions will tune in to the televised game, but nothing beats being there live. See who will take home the coveted Vince Lombardi Trophy when the tradition continues in Glendale, AZ for Super Bowl LVII on February 12, 2023, at State Farm Stadium. Get your tickets today at Ticketmaster, the Official Ticketing Partner of the NFL. All Super Bowl tickets are 100% mobile, so you can guarantee that the seat you buy is the seat you get.', '0x0.jpg', 'On Sale', 'Sport'),
('S4277', 'james_fth', 'Super Big Match BRI Liga 1 : Bali United vs Persib Bandung ', '2023-03-03', 'Stadion Indomilk, Tangerang', 'Duel super big match BRI Liga 1 minggu ketiga pada Sabtu, 18 September 2021 tersaji Bali United FC vs Persib Bandung mulai malam hari WIB.\r\n\r\nLaga pertandingan super big match klub ini yang dinantikan BRI Liga 1 Bali United bertemu Persib Bandung akan berlangsung di Stadion Indomilk, Tangerang.', '085091300_1631892731-pushnotif_artikel_BALI_PERSIB.jpg', 'On Sale', 'Sport');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
  `kdTiket` char(13) NOT NULL,
  `kdPemesanan` char(10) NOT NULL,
  PRIMARY KEY (`kdTiket`,`kdPemesanan`),
  KEY `order_FK` (`kdPemesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `kdPemesanan` char(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `fullNameOrder` varchar(30) DEFAULT NULL,
  `statusBayar` varchar(15) DEFAULT NULL,
  `totalBayar` int(9) DEFAULT NULL,
  `metodePembayaran` varchar(15) DEFAULT NULL,
  `buktiBayar` text DEFAULT NULL,
  `noRek` int(18) NOT NULL,
  PRIMARY KEY (`kdPemesanan`),
  KEY `user_FK` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `kdTiket` char(13) NOT NULL,
  `kdJenis` char(5) NOT NULL,
  `statusTicket` varchar(12) NOT NULL DEFAULT 'Available',
  PRIMARY KEY (`kdTiket`),
  KEY `ticketChategory_FK` (`kdJenis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticketchategory`
--

CREATE TABLE IF NOT EXISTS `ticketchategory` (
  `kdJenis` char(5) NOT NULL,
  `jenisTiket` varchar(10) NOT NULL,
  `kdEvent` char(5) NOT NULL,
  `harga` int(8) DEFAULT NULL,
  `kapasitasTiket` int(3) DEFAULT NULL,
  PRIMARY KEY (`kdJenis`),
  KEY `event_FK` (`kdEvent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticketchategory`
--

INSERT INTO `ticketchategory` (`kdJenis`, `jenisTiket`, `kdEvent`, `harga`, `kapasitasTiket`) VALUES
('36692', 'Ekonomi', 'S4277', 350000, 50),
('43879', 'Normal', 'A2207', 1225000, 50),
('47391', 'Normal', 'A2824', 90000, 12),
('59807', 'Normal', 'A1398', 1220000, 50),
('72013', 'Presale', 'M3560', 150000, 50),
('76497', 'Normal', 'M4330', 1385000, 43),
('76514', 'Presale', 'A5423', 100000, 35),
('84073', 'Presale', 'O1212', 120000, 15),
('88281', 'Normal', '53350', 200000, 12);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `fullNameUser` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `birthDate` date DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `fullNameUser`, `password`, `birthDate`) VALUES
('amantha', 'samantha.steeves@example.com', 'Samantha Steeves', 'halo1234', '1976-09-01'),
('james_fth', 'james@gmail.com', 'James M Frith', 'halo1234', '2002-09-18');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vevent`
-- (See below for the actual view)
--
CREATE TABLE IF NOT EXISTS `vevent` (
`kdEvent` char(5)
,`username` varchar(30)
,`namaEvent` varchar(100)
,`tanggalEvent` date
,`lokasiEvent` varchar(100)
,`deskripsi` text
,`poster` text
,`statusEvent` varchar(25)
,`kategoriEvent` varchar(15)
,`kdJenis` char(5)
,`jenisTiket` varchar(10)
,`harga` int(8)
,`kapasitasTiket` int(3)
);

-- --------------------------------------------------------

--
-- Structure for view `vevent`
--
DROP TABLE IF EXISTS `vevent`;

CREATE OR REPLACE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vevent`  AS SELECT `event`.`kdEvent` AS `kdEvent`, `event`.`username` AS `username`, `event`.`namaEvent` AS `namaEvent`, `event`.`tanggalEvent` AS `tanggalEvent`, `event`.`lokasiEvent` AS `lokasiEvent`, `event`.`deskripsi` AS `deskripsi`, `event`.`poster` AS `poster`, `event`.`statusEvent` AS `statusEvent`, `event`.`kategoriEvent` AS `kategoriEvent`, `ticketchategory`.`kdJenis` AS `kdJenis`, `ticketchategory`.`jenisTiket` AS `jenisTiket`, `ticketchategory`.`harga` AS `harga`, `ticketchategory`.`kapasitasTiket` AS `kapasitasTiket` FROM (`event` join `ticketchategory` on(`event`.`kdEvent` = `ticketchategory`.`kdEvent`)) ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `user_event_FK` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `order_FK` FOREIGN KEY (`kdPemesanan`) REFERENCES `orders` (`kdPemesanan`),
  ADD CONSTRAINT `ticket_FK` FOREIGN KEY (`kdTiket`) REFERENCES `ticket` (`kdTiket`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `user_FK` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticketChategory_FK` FOREIGN KEY (`kdJenis`) REFERENCES `ticketchategory` (`kdJenis`);

--
-- Constraints for table `ticketchategory`
--
ALTER TABLE `ticketchategory`
  ADD CONSTRAINT `event_FK` FOREIGN KEY (`kdEvent`) REFERENCES `event` (`kdEvent`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
