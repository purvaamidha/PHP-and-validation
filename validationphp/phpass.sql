-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 08:48 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpass`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `pass` int(50) NOT NULL,
  `confirmpass` int(50) NOT NULL,
  `file` varchar(300) NOT NULL,
  `article` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `emailid`, `pass`, `confirmpass`, `file`, `article`) VALUES
(1, 'Purvaa Midha', '0', 123456, 123456, '', ''),
(2, 'Ruchika', '0', 123456789, 123456789, '', '<p>Heelo i am Ruchika</p>\r\n'),
(3, 'Nikita', 'nikita.rana@gmail.com', 12345671, 12345671, 'Jellyfish.jpg', '<p>heeleo i m project manager</p>\r\n'),
(4, '123', 'niki@gmail.com', 123, 123, '', ''),
(5, '123', 'hello@hello.com', 123, 123, '', ''),
(6, 'asc', 'oye@oye.com', 123, 456, '', ''),
(7, '123', 'kk@kk.com', 789, 123, 'Desert.jpg', ''),
(8, '123', 'abc@sbc.com', 2147483647, 9990, 'Tulips.jpg', ''),
(9, 'ac', 'ac@ac.com', 123, 456, 'Hydrangeas.jpg', 'Array'),
(10, 'abc', 'abc@gmail.com', 123, 123, 'Desert.jpg', 'Array'),
(11, 'asd', '122@122.com', 0, 0, 'Chrysanthemum.jpg', 'aadsss'),
(12, 'abn', 'abn@gmail.com', 0, 0, 'Chrysanthemum.jpg', ''),
(13, 'asda', 's@df.com', 0, 123, 'Jellyfish.jpg', ''),
(14, 'ad', 'as@gh.com', 0, 0, 'Desert.jpg', ''),
(15, 'aaa', 'adv@gmail.com', 123, 123, 'Jellyfish.jpg', 'klk'),
(16, 'asda', 'as@gmail.com', 0, 0, 'Jellyfish.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
