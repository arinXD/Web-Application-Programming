-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 10:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab06`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `std_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `std_prefix` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `std_firstName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `std_lastName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `std_birthdat` date NOT NULL,
  `std_age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`std_id`, `std_prefix`, `std_firstName`, `std_lastName`, `std_birthdat`, `std_age`) VALUES
('641010123', 'นาย', 'พี่โอม', 'หล่อมาก', '2001-01-16', 21),
('643020001-2', 'นางสาว', 'ดารารัตน์', 'ทาสาจันทร์', '2002-05-02', 20),
('643020002-3', 'นาย', 'วรพจน์', 'สุวรรณภิภพ', '2002-06-25', 20),
('643020003-4', 'นาย', 'นราวิชญ์', 'คมสัน', '2001-10-20', 21),
('643020005-6', 'นาย', 'สุพพิธาน', 'ภักสวัสดิ์', '2001-07-15', 21),
('643020007-8', 'นางสาว', 'พิชญาภา', 'รณชาติชัย', '2002-02-02', 20),
('643020423-0', 'นาย', 'อริญชวุธ', 'กัลยานาม', '2022-08-01', 0),
('85555', 'นางสาว', 'พี่ปลาน้อย', 'สุเมศติกุล', '2010-01-05', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`std_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
