-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 10:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_magang`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `universitas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `semester` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(400) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `periode_mulai` varchar(50) NOT NULL,
  `periode_akhir` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`id`, `nama`, `universitas`, `jurusan`, `semester`, `email`, `alamat`, `no_hp`, `periode_mulai`, `periode_akhir`, `status`) VALUES
(1, 'Reziana Dian Islami', 'Universitas Pancasakti Tegal', 'Ekonomi', 1, 'crezzi@gmail.com', 'Dukuhlo Wetan', '082224194188', '22-12-2023', '22-01-2024', 0),
(3, 'Selvina Merry Saputri', 'Universitas Diponegoro', 'Akuntansi', 5, 'selvinamerry@gmail.com', 'Jl. Kejaksan no 99', '082224194189', '22-02-2023', '22-02-2023', 1),
(4, 'Deva Amanda Putri', 'Universitas Negeri Semarang', 'Kesehatan Masyarakat ', 5, 'devamandaputri@gmail.com', 'Perumahan Palm Asri 02 Blok C7', '085642732323', '21-05-2023', '21-06-2023', 1),
(35, 'Ruci Handayani', 'Institut Pertanian Bogor', 'Akuntansi', 7, 'rucihandayani@gmail.com', 'Jl. Kepodang ', '082111111239', '21-05-2023', '22-05-2023', 1),
(61, 'Taifun', 'UDINUS', 'IT', 6, 'taifun@rocketmail.com', 'Tegal', '08127387147841', '21-21-21', '22-22-22', 0),
(63, 'Rafi Abhirama', 'Universitas Brawijaya', 'Sastra Eropa', 8, 'rafiabhirama@gmail.com', 'Jl. Pedagangan', '081111111111111', '22-22-22', '23-23-23', 1),
(64, 'Rafi Abhirama', 'Universitas Brawijaya', 'Sastra Eropa', 8, 'rafiabhirama@gmail.com', 'Jl. Pedagangan', '081111111111111', '22-22-22', '23-23-23', 1),
(65, 'Winda Safitri', 'Universitas Pancasakti Tegal', 'Ekonomi', 8, 'winda@gmail.com', 'Adiwerna', '082222222', '21-22-11', '21-22-21', 1),
(66, 'Winda Safitri', 'Universitas Pancasakti Tegal', 'Ekonomi', 8, 'winda@gmail.com', 'Adiwerna', '082222222', '21-22-11', '21-22-21', 0),
(67, 'Putri Adinda ', 'Universitas Indonesia', 'Hukum', 2, 'putri@gmail.com', 'Jakarta', '08888888888', '22-22-22', '21-21-21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id`, `email`, `password`) VALUES
(2, 'andri@gmail.com', '123456'),
(5, 'root@gmail.com', 'root'),
(6, 'arda@gmail.com', '9999999'),
(7, 'rotiboy@gmail.com', '12345'),
(8, 'admin', 'admin'),
(9, 'taifun@rocketmail.com', '123456'),
(10, 'test@gmail.com', 'asas'),
(11, 'salma@gmail.com', '123455'),
(12, 'dasdas@gg', 'dasdasas'),
(13, 'rayyan@gmail.com', 'kknsassa'),
(14, 'taufikkurohman@mgil.aomc', '123456'),
(15, 'admoon@gmail.com', '123456'),
(16, 'admoon@gmail.com', '12345'),
(17, 'test@unit.com', '1111'),
(18, 'salma@gmail.com', '1111'),
(19, 'devamandaputri@gmail.com', '1111'),
(20, 'rafiabhirama@gmail.com', '1111'),
(21, 'winda@gmail.com', '1111'),
(22, 'putri@gmail.com', '1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
