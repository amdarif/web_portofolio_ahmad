-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2026 at 08:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_portofolio_ahmad`
--

-- --------------------------------------------------------

--
-- Table structure for table `keahlian_vote`
--

CREATE TABLE `keahlian_vote` (
  `id` int(11) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `jumlah_vote` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keahlian_vote`
--

INSERT INTO `keahlian_vote` (`id`, `bidang`, `jumlah_vote`) VALUES
(1, 'PLC', 5),
(2, 'Program', 1),
(3, 'Elektro', 4),
(4, 'Mekanik', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `pesan`, `tanggal`) VALUES
(1, 'Ahmad Arif', 'ahmadarif8j@gmail.com', 'siapppfdsfisdhfhfohsohsofesdf', '2026-08-28 04:43:01');

-- --------------------------------------------------------

--
-- Table structure for table `modal_service`
--

CREATE TABLE `modal_service` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `keterangan` text NOT NULL,
  `petunjuk` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modal_service`
--

INSERT INTO `modal_service` (`id`, `judul`, `keterangan`, `petunjuk`, `isi`) VALUES
(1, 'Mekanik', 'Pada bidang mekanik saya mempelajari berbagai\r\n                                dasar sistem mekanik.', 'Yang saya pelajari:', ' <ul>\r\n                                <li>Perakitan komponen mekanik</li>\r\n                                <li>Pembacaan gambar teknik</li>\r\n                                <li>Gambar CAD</li>\r\n                                <li>Perawatan mesin CNC</li>\r\n                                <li>Dasar-dasar sistem mekanik</li>\r\n                                <li>Pembuatan dan perawatan komponen</li>\r\n                            </ul>\r\n'),
(2, 'Elektrik', 'Pada bidang elektrik saya mempelajari sistem\r\n                                kelistrikan, kontrol, wiring, PLC, dan otomasi\r\n                                industri.', 'Yang saya pelajari:', ' <ul>\r\n                                <li>Wiring panel listrik</li>\r\n                                <li>Instalasi kelistrikan</li>\r\n                                <li>PLC</li>\r\n                                <li>Motor listrik</li>\r\n                                <li>Kontrol industri</li>\r\n                                <li>Sensor dan aktuator</li>\r\n                                <li>Sistem otomasi</li>\r\n                            </ul>'),
(3, 'Informatik', 'Pada bidang informatika saya mempelajari dasar\r\n                                pemrograman dan pembuatan website.', ' Yang saya pelajari:', '<ul>\r\n                                <li>HTML</li>\r\n                                <li>CSS</li>\r\n                                <li>Bootstrap</li>\r\n                                <li>Dasar pemrograman</li>\r\n                                <li>Pembuatan website</li>\r\n                                <li>Struktur dan desain halaman web</li>\r\n                            </ul>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keahlian_vote`
--
ALTER TABLE `keahlian_vote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modal_service`
--
ALTER TABLE `modal_service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keahlian_vote`
--
ALTER TABLE `keahlian_vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `modal_service`
--
ALTER TABLE `modal_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
