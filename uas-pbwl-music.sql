-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 04:47 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas-pbwl-music`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `artist_id` smallint(5) NOT NULL,
  `album_id` smallint(4) NOT NULL,
  `album_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`artist_id`, `album_id`, `album_name`) VALUES
(6, 5, 'Dekade'),
(2, 7, 'Speak Now'),
(2, 8, 'Red'),
(4, 9, 'Thriller');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artist_id` smallint(5) NOT NULL,
  `artist_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist_id`, `artist_name`) VALUES
(2, 'Taylor Swift'),
(4, 'Michael Jackson'),
(6, 'Afgan');

-- --------------------------------------------------------

--
-- Table structure for table `played`
--

CREATE TABLE `played` (
  `artist_id` smallint(5) NOT NULL,
  `album_id` smallint(4) NOT NULL,
  `track_id` smallint(3) NOT NULL,
  `played` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `played`
--

INSERT INTO `played` (`artist_id`, `album_id`, `track_id`, `played`) VALUES
(2, 7, 3, '2021-07-31 07:39:13'),
(6, 5, 12, '2021-07-31 07:42:29'),
(2, 8, 7, '2021-07-31 07:42:59');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `track_id` smallint(3) NOT NULL,
  `track_name` varchar(128) NOT NULL,
  `artist_id` smallint(5) NOT NULL,
  `album_id` smallint(4) NOT NULL,
  `time` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`track_id`, `track_name`, `artist_id`, `album_id`, `time`) VALUES
(3, 'Mine', 2, 7, '3.80'),
(4, 'Sparks Fly', 2, 7, '4.40'),
(5, 'Back to December', 2, 7, '4.80'),
(6, 'State of Grace', 2, 8, '4.60'),
(7, 'Red', 2, 8, '3.60'),
(9, 'Treacherous', 2, 8, '4.30'),
(10, 'Love Again', 6, 5, '3.20'),
(11, 'Sudah', 6, 5, '3.30'),
(12, 'Heaven', 6, 5, '3.50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`track_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `album_id` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `artist_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `track_id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
