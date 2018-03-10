-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2018 at 07:24 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoint`
--

CREATE TABLE `appoint` (
  `id` int(11) NOT NULL,
  `dname` varchar(200) DEFAULT NULL,
  `pname` varchar(200) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `visibility` varchar(10) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoint`
--

INSERT INTO `appoint` (`id`, `dname`, `pname`, `date`, `time`, `visibility`, `timestamp`) VALUES
(1, '', '', '', '', '1', '2018-03-05 13:24:21'),
(2, 'Dipoon', 'silla rani ', '12-jun-2015', '23.pm', '1', '2018-03-05 13:51:27'),
(3, 'gunda ditto', 'minddad', '20-feb-1998', '2.00pm', '0', '2018-03-05 14:01:57'),
(4, 'DR sk sreuk', 'RainA RANI', '2-JAN-2018', '12.00PM', '1', '2018-03-06 05:46:24'),
(5, '', '', '', '', '0', '2018-03-05 19:59:50'),
(6, 'DR sk sreuk', 'RainA RANI', '2-JAN-2018', '12.00PM', '1', '2018-03-06 05:46:43'),
(7, 'DR animesh halder', 'kijar tuinna', '2-JAN-2018', '1.00pm', '1', '2018-03-06 05:47:31'),
(8, '', '', '', '', '1', '2018-03-05 16:55:35'),
(9, '', '', '', '', '0', '2018-03-05 19:59:55'),
(10, '', '', '', '', '1', '2018-03-05 16:55:35'),
(11, '', '', '', '', '1', '2018-03-05 16:55:36'),
(12, '', '', '', '', '1', '2018-03-05 16:55:36'),
(13, '', '', '', '', '1', '2018-03-05 16:55:37'),
(14, '', '', '', '', '1', '2018-03-05 16:55:37'),
(15, '', '', '', '', '1', '2018-03-05 16:55:38'),
(16, '', '', '', '', '1', '2018-03-05 16:55:38'),
(17, '', '', '', '', '1', '2018-03-05 16:55:39');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `did` varchar(50) NOT NULL,
  `visiblity` int(12) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `email`, `mobile`, `did`, `visiblity`, `time`) VALUES
(1, 'drip', 'dir@gmail.com', 4587, '', 0, '2018-03-05 12:51:04'),
(2, 'sabuj1236', 'roy@gmail.com', 125489, '', 0, '2018-03-05 12:42:58'),
(3, 'ripon', 'ripon@gmail.com', 234444, '', 0, '2018-01-31 21:10:34'),
(4, 'tapos', 'kuma@gmail.com', 34422, '', 0, '2018-01-31 21:10:54'),
(5, '', '', 0, '', 0, '2018-01-31 21:11:46'),
(6, 'swapan', 'swa@gmail.com', 1548, '', 0, '2018-01-31 21:20:38'),
(7, 'jhuj', 'eee@gmail.com', 6577, '', 0, '2018-01-31 21:20:41'),
(8, 'fatati ', 'hoice@gmail.com', 1425, '', 0, '2018-01-31 21:11:53'),
(9, 'hopto ', 'gft@gmail.com', 1254, '', 0, '2018-01-31 21:20:43'),
(10, 'Ripon Roy', 'riponroy734@gmail.com', 1760791663, '', 0, '2018-02-20 08:14:50'),
(11, 'Sipra Basak', 'siprabasak@786gmail.com', 1760791332, '', 0, '2018-02-19 09:32:58'),
(12, 'Maliha Barmon', 'malihabarman@gmail.com', 1686868022, '', 0, '2018-02-17 17:58:31'),
(13, 'Simanto baruya', 'simantobr89@gmail.com', 1760791883, '', 0, '2018-02-05 13:25:40'),
(14, 'Sreya Gosal', 'sreyagosal@gail.com', 2147483647, '', 0, '2018-02-01 04:35:46'),
(15, 'Santo Roy', 'santoroy121@gmail.com', 176071669, '', 0, '2018-02-01 04:35:39'),
(16, 'Sreya ghosal', 'sreyaghosal@gmail.com', 1760791657, '', 0, '2018-02-05 13:25:39'),
(17, 'Sreya ghosal', 'sreyaghosal@gmail.com', 1760791657, '', 0, '2018-02-05 13:25:37'),
(18, 'Dr kollol Benergy', 'kollolroy734@gmail.com', 1760791633, '', 0, '2018-02-05 13:25:35'),
(19, 'sila', 'sila@gmail', 17901663, '', 0, '2018-02-05 13:25:32'),
(20, 'kona ', 'ripon@gmail.com', 1760791663, '', 0, '2018-02-05 13:25:33'),
(21, 'DR SAGGIN', 'RUIPP@GMAIL.COM', 1760791663, '', 0, '2018-02-05 13:25:30'),
(22, 'DR TAIJI', 'taji@gmail.com', 1760791633, '', 0, '2018-02-05 12:55:38'),
(23, 'Dr joy roy', 'joyroy734@gmail.com', 1760791663, '', 0, '2018-02-05 13:26:24'),
(24, 'rina patell', 'rina@gail.com', 1760791663, '', 0, '2018-03-05 19:49:09'),
(25, 'rina patellllala', 'rina@gmail.com', 1760791663, '', 1, '2018-03-05 08:13:34'),
(26, 'rina patell', 'rina@gail.com', 1760791663, '', 0, '2018-03-05 05:03:03'),
(27, '', '', 0, '', 0, '2018-02-20 08:07:05'),
(28, 'Dr sibbba Ditto', 'siba@gamil.com', 1760791659, '', 0, '2018-02-24 06:18:39'),
(29, '', '', 0, '', 0, '2018-03-05 08:14:00'),
(30, 'ripon', 'ripon@gmail.com', 12548799, '', 1, '2018-03-05 07:33:05'),
(31, 'Suman', 'suman@gmail.com', 16584256, 'D-2018030531', 0, '2018-03-05 08:02:33'),
(32, 'Suman', 'suman@gmail.com', 16584256, 'D-2018030532', 0, '2018-03-05 08:02:36'),
(33, 'Suman', 'suman@gmail.com', 16584256, 'D-2018030533', 0, '2018-03-05 08:02:28'),
(34, 'Dr sibbba Ditto', 'malaroycrd@gmail.com', 123654789, 'D-2018030534', 1, '2018-03-05 07:46:26'),
(35, 'Dr sibbba Dotto', 'malarsaweroycrd@gmail.com', 2147483647, 'D-2018030535', 1, '2018-03-05 08:13:53'),
(36, 'Dr sillla ditro roy', 'siladito@gail.com', 1764955666, '', 1, '2018-03-05 09:15:27'),
(37, 'Dr sillla ditro roy', 'siladito@gail.com', 1764955666, '', 1, '2018-03-05 09:16:16'),
(38, 'Drenb mmkki', 'drenb@gmail.com', 1790469223, '', 1, '2018-03-05 10:22:51'),
(39, '', '', 0, '', 0, '2018-03-05 16:33:23'),
(40, '', '', 0, '', 0, '2018-03-05 16:33:21'),
(41, '', '', 0, '', 0, '2018-03-05 16:33:19'),
(42, '', '', 0, '', 0, '2018-03-05 16:33:17'),
(43, '', '', 0, '', 0, '2018-03-05 16:33:16'),
(44, '', '', 0, '', 0, '2018-03-05 16:33:14'),
(45, '', '', 0, '', 0, '2018-03-05 16:33:12'),
(46, '', '', 0, '', 0, '2018-03-05 16:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `id` int(11) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` int(20) DEFAULT NULL,
  `visibility` int(11) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`id`, `email`, `password`, `visibility`, `timestamp`) VALUES
(1, 'm,mllm', 2323231, 1, '2018-03-05 14:32:37'),
(2, 'm,mllm', 2323231, 1, '2018-03-05 14:38:13'),
(3, 'm,mllm', 2323231, 1, '2018-03-05 17:59:12'),
(4, 'ripon@gmail.com', 0, 1, '2018-03-05 17:59:33'),
(5, 'm,mllm', 2323231, 1, '2018-03-05 19:12:18'),
(6, 'm,mllm', 2323231, 1, '2018-03-05 19:49:04'),
(7, 'm,mllm', 2323231, 1, '2018-03-05 20:40:45'),
(8, 'm,mllm', 2323231, 1, '2018-03-05 20:40:57'),
(9, 'm,mllm', 2323231, 1, '2018-03-05 20:41:16'),
(10, 'm,mllm', 2323231, 1, '2018-03-05 20:42:05'),
(11, 'm,mllm', 2323231, 1, '2018-03-05 20:43:05'),
(12, 'm,mllm', 2323231, 1, '2018-03-05 20:43:12'),
(13, 'm,mllm', 2323231, 1, '2018-03-06 04:23:42'),
(14, 'm,mllm', 2323231, 1, '2018-03-06 04:24:17'),
(15, 'riponroy734@gmail.com', 2323231, 1, '2018-03-06 05:12:27'),
(16, 'riponroy734@gmail.com', 2323231, 1, '2018-03-06 05:17:14'),
(17, 'riponroy734@gmail.com', 2323231, 1, '2018-03-06 05:41:15'),
(18, 'riponroy734@gmail.com', 2323231, 1, '2018-03-06 05:44:42'),
(19, 'riponroy734@gmail.com', 2323231, 1, '2018-03-06 06:13:12'),
(20, 'riponroy734@gmail.com', 2323231, 1, '2018-03-06 06:20:08');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `mobile` int(12) DEFAULT NULL,
  `visibility` varchar(10) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `address`, `date`, `mobile`, `visibility`, `timestamp`) VALUES
(1, 'mira ', 'balubari', '12-jan-2017', 2147483647, '0', '2018-03-05 12:52:46'),
(2, 'ripoon broy 123', 'ninnogor balubari', '0000-00-00', 1760791556, '1', '2018-03-05 12:45:30'),
(3, '', '', '', 0, '0', '2018-03-05 16:39:42'),
(4, '', '', '', 0, '0', '2018-03-05 16:39:40'),
(5, '', '', '', 0, '0', '2018-03-05 16:39:39'),
(6, '', '', '', 0, '0', '2018-03-05 16:39:38'),
(7, 'Dipti Roy', 'Dhaka,moynonsing', '12-jul-2018', 176079886, '1', '2018-03-05 19:56:12'),
(8, 'Rina pervin', 'Dinajpur,bochagong', '14-feb-2018', 2147483647, '1', '2018-03-05 16:52:59'),
(9, 'Diree', 'rangpur', '01796338', 1699933, '1', '2018-03-05 19:56:54'),
(10, 'work min', 'rroooo@gmail.com', '13-jna-2018', 178963222, '1', '2018-03-05 19:57:43'),
(11, 'Diree', 'dinajpur', '13-jna-2018', 178963222, '1', '2018-03-05 19:58:25'),
(12, 'etan patel', 'rroooo@gmail.com', '17-feb-2017', 176079886, '1', '2018-03-05 19:58:50'),
(13, 'etan patel', 'quari', '01796338', 178963222, '1', '2018-03-05 19:59:13'),
(14, '', '', '', 0, '1', '2018-03-05 16:53:33'),
(15, '', '', '', 0, '1', '2018-03-05 16:53:34'),
(16, '', '', '', 0, '1', '2018-03-05 16:53:35'),
(17, '', '', '', 0, '1', '2018-03-05 16:53:37'),
(18, '', '', '', 0, '1', '2018-03-05 16:53:38'),
(19, '', '', '', 0, '1', '2018-03-05 16:53:39'),
(20, '', '', '', 0, '1', '2018-03-05 16:53:40'),
(21, '', '', '', 0, '1', '2018-03-05 16:53:41'),
(22, '', '', '', 0, '1', '2018-03-05 16:53:42'),
(23, '', '', '', 0, '1', '2018-03-05 16:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `visible` varchar(10) DEFAULT NULL,
  `ct` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `visible`, `ct`) VALUES
(1, 'Ripon roy', 'ripon', '123456', '1', '2018-03-06 07:06:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoint`
--
ALTER TABLE `appoint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoint`
--
ALTER TABLE `appoint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
