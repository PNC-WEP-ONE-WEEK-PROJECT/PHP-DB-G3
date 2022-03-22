-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 02:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facebook2.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `descriptions` varchar(200) NOT NULL,
  `postid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentid`, `userid`, `descriptions`, `postid`) VALUES
(1, 0, 'fasfasf', 99),
(2, 0, 'sfasdfas', 93),
(3, 0, 'sdfaewfawesfasd', 100),
(4, 0, 'sdfasdfasdf', 101),
(5, 0, 'awsedrfghjk', 99),
(6, 0, 'sdfaewfawesfasd', 99),
(7, 0, 'awsedrfghjk', 100),
(8, 0, '', 103),
(9, 0, 'awsedrfghjk', 103),
(10, 0, 'sdfaewfawesfasd', 104),
(11, 0, 'dfgdfsdf', 103),
(12, 0, 'fasfasdf', 103),
(13, 0, 'awsedrfghjk', 104),
(14, 0, 'awsedrfghjk', 104),
(15, 0, 'awsedrfghjk', 103),
(16, 0, 'azsdfghj', 105),
(17, 0, 'sfdsadfsadf', 105),
(18, 0, 'awsedrfghjk', 105),
(19, 0, '', 105),
(20, 0, 'handsome guy', 106),
(21, 0, 'fasfasf', 106),
(22, 0, 'qwerghjkl;\'/l.,mnbfdsdefrgthyjukil', 106),
(23, 0, 'sdfaewfawesfasdttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt', 106),
(24, 0, 'awsedrfghjk sfasfsaf asfasf', 106),
(33, 0, 'sfasdfas', 108),
(37, 0, 'hello how are you?', 107),
(38, 0, 'sdfaewfawesfasd', 107),
(41, 0, 'awsedrfghjk', 109),
(43, 0, 'rqwerwe', 111),
(55, 0, 'SART JJ', 112),
(58, 0, 'beautiful', 110);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `likesid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postsid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `descriptions` varchar(300) NOT NULL,
  `datepost` timestamp NOT NULL DEFAULT current_timestamp(),
  `images` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postsid`, `userid`, `descriptions`, `datepost`, `images`) VALUES
(110, 1, 'dfnm', '2022-03-22 06:06:28', 'photo4442902458509928380.jpg'),
(112, 1, 'wedfghjkl;', '2022-03-22 06:34:44', 'photo3806126780389107650.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE `shares` (
  `shareid` int(11) NOT NULL,
  `accountId` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `dateshare` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `createdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `email`, `age`, `phone`, `password`, `createdate`) VALUES
(1, 'phim', 'loem', 'lindaveng@gmail.com', 21, 234567890, 2345, '2022-03-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentid`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`likesid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `postid` (`postid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postsid`);

--
-- Indexes for table `shares`
--
ALTER TABLE `shares`
  ADD PRIMARY KEY (`shareid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `likesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `shares`
--
ALTER TABLE `shares`
  MODIFY `shareid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`postid`) REFERENCES `posts` (`postsid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
