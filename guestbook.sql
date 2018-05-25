-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 25, 2018 at 07:45 AM
-- Server version: 5.7.22-0ubuntu18.04.1
-- PHP Version: 7.2.5-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guestbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `guestbook_table`
--

CREATE TABLE `guestbook_table` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `comment` varchar(225) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guestbook_table`
--

INSERT INTO `guestbook_table` (`id`, `name`, `email`, `sex`, `address`, `comment`, `date`) VALUES
(34, 'Samuel Azichoba', 'ancapstech@gmail.com', 'male', 'Karu, mararba', 'trtryeieueoeueoeueoee', '2018-05-03'),
(35, 'ssssss', 'ancapstech@gmail.com', 'male', 'Karu, mararba', 'zzzzzzzzzzz', '2018-05-02'),
(36, 'ssssss', 'ancapstech@gmail.com', 'male', 'Karu, mararba', 'zzzzzzzzzzz', '2018-05-02'),
(39, 'Justice', 'jotuya2@gmail.com', 'male', 'Mararaba', '', '2018-05-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guestbook_table`
--
ALTER TABLE `guestbook_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guestbook_table`
--
ALTER TABLE `guestbook_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
