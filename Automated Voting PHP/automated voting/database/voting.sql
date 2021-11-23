-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 12:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidate_id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidate_id`, `position`, `firstname`, `lastname`, `year_level`, `gender`, `img`) VALUES
(1, 'President', 'Harry', 'Den', '4th Year', 'Male', 'upload/male3.jpg'),
(2, 'Secretary', 'James', 'Corden', '3rd Year', 'Male', 'upload/male3.jpg'),
(3, 'President', 'Mwijonge', 'Maricen', '2nd Year', 'Male', 'upload/browser.jpg'),
(4, 'Secretary', 'Man', 'Jahulula', '2nd Year', 'Male', 'upload/Untitled-2.png'),
(5, 'Vice President for Internal Affairs', 'John', 'Jo', '2nd Year', 'Male', 'upload/cloudy.png'),
(6, 'Vice President for Internal Affairs', 'Emma', 'Piano', '2nd Year', 'Male', 'upload/Untitled-2.png'),
(7, 'Vice President for Internal Affairs', 'John', 'Jo', '2nd Year', 'Male', 'upload/cloudy.png'),
(8, 'President', 'isaiah', 'john', '4th Year', 'Male', 'upload/IMG_20210819_135513_174.jpg'),
(9, 'President', 'isaiah', 'john', '4th Year', 'Male', 'upload/IMG_20210819_135513_174.jpg'),
(10, 'President', 'isaiah', 'john', '4th Year', 'Male', 'upload/IMG_20210819_135513_174.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'admin', 'admin', 'System', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `userIp`, `city`, `country`, `loginTime`) VALUES
(78, 44, ' 	4V8Styfv', 0x3132372e302e302e31, '', '', '2021-11-15 15:45:15'),
(79, 55, '25E9XUJW', 0x3132372e302e302e31, '', '', '2021-11-15 15:45:22'),
(80, 2, '4si13Geyi', 0x3132372e302e302e31, '', '', '2021-11-15 15:45:37'),
(81, 2, '4si13Geyhgvhgv', 0x3132372e302e302e31, '', '', '2021-11-15 15:45:57'),
(82, 2, '4si13Geyhgvhgv', 0x3132372e302e302e31, '', '', '2021-11-15 15:47:02'),
(83, 2, '4si13Gey', 0x3132372e302e302e31, '', '', '2021-11-15 15:47:04'),
(84, 2, '4si13Geyghvgv', 0x3132372e302e302e31, '', '', '2021-11-15 15:47:18'),
(85, 44, ' 	4V8Styfv', 0x3132372e302e302e31, '', '', '2021-11-15 15:49:04'),
(86, 55, '25E9XUJW', 0x3132372e302e302e31, '', '', '2021-11-15 15:49:16'),
(87, 11, 'PR0r3CGn', 0x3132372e302e302e31, '', '', '2021-11-15 15:51:12'),
(88, 1234, 'OnBVDi6L', 0x3132372e302e302e31, '', '', '2021-11-19 00:33:07'),
(89, 1234, 'OnBVDi6L', 0x3132372e302e302e31, '', '', '2021-11-22 12:14:30'),
(90, 1234, 'OnBVDi6L', 0x3132372e302e302e31, '', '', '2021-11-23 08:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `voters_id` int(11) NOT NULL,
  `id_number` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`voters_id`, `id_number`, `password`, `firstname`, `lastname`, `year_level`, `status`, `account`) VALUES
(11, 1234, 'OnBVDi6L', 'voter', 'new', '1st Year', 'Unvoted', 'Active'),
(10, 0, 'teEwwjEl', 'isaya', 'kapama', '3rd Year', 'Unvoted', 'Active'),
(9, 2, 'zNlcnYPu', '2', '2', '2nd Year', 'Voted', 'Active'),
(8, 11, 'GvcxZQqS', '1', '1', '1st Year', 'Unvoted', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `vote_id` int(255) NOT NULL,
  `candidate_id` varchar(255) NOT NULL,
  `voters_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`vote_id`, `candidate_id`, `voters_id`) VALUES
(78, '1', '9'),
(79, '5', '9'),
(80, '', '9'),
(81, '2', '9'),
(82, '', '9'),
(83, '', '9'),
(84, '', '9'),
(85, '', '9'),
(86, '', '9'),
(87, '', '9'),
(88, '', '9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`voters_id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`vote_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `voters_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `vote_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
