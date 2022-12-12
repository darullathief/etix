-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 07:04 AM
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

CREATE TABLE `event` (
  `kdEvent` char(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `namaEvent` varchar(30) DEFAULT NULL,
  `tanggalEvent` date DEFAULT NULL,
  `lokasiEvent` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `poster` text DEFAULT NULL,
  `statusEvent` varchar(25) DEFAULT NULL,
  `kategoriEvent` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`kdEvent`, `username`, `namaEvent`, `tanggalEvent`, `lokasiEvent`, `deskripsi`, `poster`, `statusEvent`, `kategoriEvent`) VALUES
('O1212', 'james_fth', 'NFL Super Bowl LVII Tickets', '2022-12-30', 'Concert Hall, Hong Kong City Hall', 'dededed', '../upload/fa09d0bfeab6099e7ce31cb9aa99756b.jpg', 'On Sale', 'Sport');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `kdTiket` char(13) NOT NULL,
  `kdPemesanan` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `kdPemesanan` char(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `fullNameOrder` varchar(30) DEFAULT NULL,
  `statusBayar` varchar(15) DEFAULT NULL,
  `totalBayar` int(9) DEFAULT NULL,
  `metodePembayaran` varchar(15) DEFAULT NULL,
  `buktiBayar` text DEFAULT NULL,
  `noRek` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `kdTiket` char(13) NOT NULL,
  `kdJenis` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticketchategory`
--

CREATE TABLE `ticketchategory` (
  `kdJenis` char(5) NOT NULL,
  `jenisTiket` varchar(10) NOT NULL,
  `kdEvent` char(5) NOT NULL,
  `harga` int(8) DEFAULT NULL,
  `kapasitasTiket` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `fullNameUser` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `birthDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `fullNameUser`, `password`, `birthDate`) VALUES
('james_fth', 'james@gmail.com', 'James M Frith', 'halo1234', '2002-09-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`kdEvent`),
  ADD KEY `user_event_FK` (`username`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`kdTiket`,`kdPemesanan`),
  ADD KEY `order_FK` (`kdPemesanan`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`kdPemesanan`),
  ADD KEY `user_FK` (`username`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`kdTiket`),
  ADD KEY `ticketChategory_FK` (`kdJenis`);

--
-- Indexes for table `ticketchategory`
--
ALTER TABLE `ticketchategory`
  ADD PRIMARY KEY (`kdJenis`),
  ADD KEY `event_FK` (`kdEvent`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

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
