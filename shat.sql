-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 10:11 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shat`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `first-name` varchar(100) DEFAULT NULL,
  `last-name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone-number` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`first-name`, `last-name`, `email`, `password`, `phone-number`, `id`) VALUES
('tttt', 'ttt', 'youssef200212@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', '01064338132', 1);

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `first-name` varchar(100) DEFAULT NULL,
  `last-name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone-number` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`first-name`, `last-name`, `email`, `password`, `phone-number`, `id`) VALUES
('xx', 'xxx', 'xxx', 'xx', 'xx', 1),
('asdhhg', 'asdafgf', 'youssef200212@gmail.com', '8a48030583c0a322b7333fb817926a2a', 'dfgdff', 2),
('asdasd', 'ttt', 'youssef200212@gmail.com', '338d811d532553557ca33be45b6bde55', '01064338132', 3),
('tttt', 'ttt', 'youssef200212@gmail.com', '698d51a19d8a121ce581499d7b701668', '01064338132', 4),
('ttt', 'ttt', 'youssef200212@gmail.com', '698d51a19d8a121ce581499d7b701668', '01064338132', 5),
('sadasd', 'assd', 'youssef200212@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', '01064338132', 6),
('asdass', 'asd', 'asdasd@ggmail.com', '6512bd43d9caa6e02c990b0a82652dca', '01064338132', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
