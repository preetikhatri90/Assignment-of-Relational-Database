-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 01:49 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interns`
--

-- --------------------------------------------------------

--
-- Table structure for table `intern`
--

CREATE TABLE `intern` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `Hobby` tinytext,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intern`
--

INSERT INTO `intern` (`id`, `name`, `age`, `gender`, `designation`, `Hobby`, `reg_date`) VALUES
(16, 'hello ', 65, 'female', 'intern', 'reading ', '2021-11-30 04:21:39'),
(17, 'hello', 56, ' female', 'reporter ', 'cards', '2021-11-25 14:28:27'),
(18, 'hello', 56, ' female', 'reporter ', 'cards', '2021-11-25 14:28:42'),
(19, 'hello', 56, ' female', 'reporter ', 'cards', '2021-11-25 14:29:08'),
(20, 'hello', 56, ' female', 'reporter ', 'cards', '2021-11-25 14:32:31'),
(21, 'hello', 56, ' female', 'reporter ', 'cards', '2021-11-25 14:32:44'),
(22, 'hello', 56, ' female', 'reporter ', 'cards', '2021-11-25 14:33:04'),
(24, 'preeti ', 20, ' female', 'reporter ', 'reading ', '2021-11-29 11:40:55'),
(25, 'ram', 25, ' on', 'intern ', 'writing ', '2021-11-30 02:45:05'),
(26, 'radha ', 22, ' ', 'intern ', 'reading ', '2021-11-30 02:45:42'),
(27, 'radha ', 20, ' ', 'intern ', 'reading ', '2021-11-30 02:46:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `intern`
--
ALTER TABLE `intern`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `intern`
--
ALTER TABLE `intern`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
