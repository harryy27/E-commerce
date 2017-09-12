-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2017 at 06:06 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `registration_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `password`, `contact`, `city`, `address`, `registration_time`) VALUES
(2, 'hk2h@gmail.com', 'harryy', 'kapoor', 'd8578edf8458ce06fbc5bb76a58c5ca4', 8979446352, 'delhi', 'hahahhahaaa', '2017-09-12 06:05:01'),
(3, 'harsh.cse45@nituk.ac.in', 'naresh', 'chaudhary', 'd8578edf8458ce06fbc5bb76a58c5ca4', 9411394677, 'delhi', 'zzzzzzzzzzz', '2017-09-12 06:05:30'),
(4, 'afgsgh@gmkkjak.com', 'payal', 'gupta', 'ea40d38ddcf43b81dc9a25e782f88178', 1234567890, 'jdssfjghds', 'ccccccccccccccccccc', '2017-07-02 11:11:25'),
(5, 'hhhhgagh@gmail.com', 'damzz', 'roy', '5fb3f9fd2a1acc872b4ca0e15090c168', 1234567890, 'ghgghjgjfg', 'hhghhjnvnbbc', '2017-09-12 06:03:51'),
(6, 'himon@gmail.com', 'moni', 'ray', '2d9e5b0debb5a8293c7e0c00c7a7219f', 8050426322, 'pune', 'kormagla', '2017-09-12 06:05:21'),
(7, '45454@gmail.com', 'ank', 'yadav', '3c70009292154200de450ca4696b35fa', 1234567890, 'lucknow', 'kkjkjk', '2017-09-12 06:04:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
