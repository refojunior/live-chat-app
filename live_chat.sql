-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2019 at 05:29 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `live_chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `text` text NOT NULL,
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `stat` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `time`, `text`, `sender`, `receiver`, `stat`) VALUES
(33, '2019-01-10 04:49:59', 'Hi, Mosalah!', 'refojunior', 'salah', '1'),
(34, '2019-01-10 04:50:05', 'How are you ?', 'refojunior', 'salah', '1'),
(35, '2019-01-10 04:52:43', 'Test', 'refojunior', 'salah', '1'),
(36, '2019-01-10 04:53:43', 'test', 'refojunior', 'roberto', '1'),
(37, '2019-01-10 04:53:56', 'test', 'refojunior', 'salah', '1'),
(38, '2019-01-10 04:54:15', 'lagi', 'refojunior', 'salah', '1'),
(39, '2019-01-10 04:54:24', 'lagi', 'refojunior', 'roberto', '1'),
(40, '2019-01-10 04:54:39', 'Best club in the world!', 'refojunior', 'liverpool', '1'),
(41, '2019-01-10 04:55:14', 'test', 'refojunior', 'liverpool', '1'),
(42, '2019-01-10 04:55:48', 'hey', 'refojunior', 'salah', '1'),
(43, '2019-01-10 04:56:06', 'hey', 'refojunior', 'salah', '1'),
(44, '2019-01-10 04:56:25', 'heys', 'refojunior', 'salah', '1'),
(45, '2019-01-10 04:56:33', 'good', 'refojunior', 'liverpool', '1'),
(46, '2019-01-10 05:15:18', 'Hei Refo!', 'roberto', 'refojunior', '1'),
(47, '2019-01-10 05:23:47', 'Bagaimana kabarmu? ', 'roberto', 'refojunior', '1'),
(48, '2019-01-10 05:24:10', 'Baik, alhamdulillah', 'refojunior', 'roberto', '1'),
(49, '2019-01-10 05:24:18', 'Sekarang kerja dimana? ', 'refojunior', 'roberto', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `gender`, `picture`) VALUES
(1, 'refojunior', '601f1889667efaebb33b8c12572835da3f027f78', 'Refo Junior', 'male', '157720.jpg'),
(7, 'salah', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', 'Mohammed Salah', 'male', 'Not Set'),
(10, 'roberto', 'be684f9c3dae8b5a6e75205b57f68dd94b9c4518', 'Roberto Firmino', 'male', 'Not Set'),
(14, 'liverpool', '78b6c6a78e83d23a23a82f70ed203af55a270514', 'Liverpool FC', 'male', 'Not Set');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
