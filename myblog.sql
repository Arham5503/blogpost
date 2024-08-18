-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2024 at 09:06 AM
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
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogpost`
--

CREATE TABLE `blogpost` (
  `SR_NO` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `article` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogpost`
--

INSERT INTO `blogpost` (`SR_NO`, `title`, `article`) VALUES
(11, 'Arham Ali', 'lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit '),
(12, 'Shahzad Ali', 'lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit lorem ipsum doller sit ');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('example@gmail.com', 'T490');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogpost`
--
ALTER TABLE `blogpost`
  ADD PRIMARY KEY (`SR_NO`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogpost`
--
ALTER TABLE `blogpost`
  MODIFY `SR_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
