-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 11:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menprodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `birthday` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kelas` int(11) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `notelepon` varchar(255) NOT NULL,
  `balance` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `username`, `nama`, `password`, `birthday`, `kelas`, `alamat`, `gender`, `email`, `notelepon`, `balance`, `image`, `role`) VALUES
(3, '1772044', 'roy P', '6e000381b965bd278e3dbb9fc0e1c953', '2020-01-08 20:31:48', 0, 'asd', 'male', 'roy@gmail.com', '12345', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdby` varchar(45) CHARACTER SET latin1 NOT NULL,
  `categoryid` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `body`, `created`, `createdby`, `categoryid`, `status`, `img`) VALUES
(2, 'DUARR', 'IT', '2020-01-08 18:53:58', '1772044', 1, 1, 'https://images.unsplash.com/photo-1523895665936-7bfe172b757d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `createdate`) VALUES
(1, 'Learning', '2020-01-08 16:29:08'),
(2, 'Hah', '2020-01-08 19:46:25'),
(3, 'heh', '2020-01-08 19:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `commentarticle`
--

CREATE TABLE `commentarticle` (
  `id` int(11) NOT NULL,
  `body` varchar(255) NOT NULL,
  `created` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `articleid` int(11) NOT NULL,
  `status` tinyint(11) NOT NULL,
  `createdby` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commentarticle`
--

INSERT INTO `commentarticle` (`id`, `body`, `created`, `articleid`, `status`, `createdby`) VALUES
(1, 'haii', '2020-01-08 19:40:09.007075', 2, 0, '1772046'),
(2, 'd', '2020-01-08 19:41:59.538221', 2, 0, '1772046'),
(3, 'd', '2020-01-08 19:42:50.044531', 2, 0, '1772046'),
(4, 'asd', '2020-01-08 20:23:29.226914', 2, 1, '1772046'),
(5, 'hah', '2020-01-08 20:24:32.648523', 2, 1, '1772031');

-- --------------------------------------------------------

--
-- Table structure for table `commentcourses`
--

CREATE TABLE `commentcourses` (
  `id` int(11) NOT NULL,
  `body` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `coursepage` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `createdby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commentcourses`
--

INSERT INTO `commentcourses` (`id`, `body`, `created`, `coursepage`, `status`, `createdby`) VALUES
(2, 'Geass', '2020-01-08 19:35:44', 2, 0, '1772046'),
(3, 'code', '2020-01-08 18:30:59', 2, 1, '1772046'),
(4, 'albion', '2020-01-08 18:31:56', 3, 1, '1772046'),
(5, 'gea', '2020-01-08 20:25:04', 2, 1, '1772031');

-- --------------------------------------------------------

--
-- Table structure for table `courselink`
--

CREATE TABLE `courselink` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `courseid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courselink`
--

INSERT INTO `courselink` (`id`, `no`, `link`, `courseid`) VALUES
(2, 2, 'https://www.youtube.com/embed/EYf2WhSfUV8', 5),
(3, 3, 'https://www.youtube.com/embed/1U1y_nqP8zE', 5);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseId`, `title`, `img`, `price`, `description`, `categoryid`, `status`) VALUES
(5, 'kamehameha', 'https://vignette.wikia.nocookie.net/dragonball/images/e/e7/Goku_DBZ_Ep_31_008.png/revision/latest?cb=20170828193815', 205, 'kamehameha', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `takingcourses`
--

CREATE TABLE `takingcourses` (
  `id` int(11) NOT NULL,
  `user_id` varchar(45) CHARACTER SET utf8 NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `takingcourses`
--

INSERT INTO `takingcourses` (`id`, `user_id`, `course_id`) VALUES
(11, '1772046', 5),
(12, '1772031', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idStudent` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `birthday` timestamp(6) NULL DEFAULT NULL,
  `kelas` int(11) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `notelepon` varchar(255) DEFAULT NULL,
  `balance` int(255) NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idStudent`, `username`, `nama`, `password`, `birthday`, `kelas`, `alamat`, `gender`, `email`, `notelepon`, `balance`, `image`) VALUES
(38, '1772046', 'Ariyanto Sani', 'ea7966f90de2bf520e3f0042053e6ec3', '2020-01-04 17:00:00.000000', NULL, NULL, 'male', 'ariyantosani555@gmail.com', '082316997753', 595, '1578500709.jpg'),
(39, '1772031', 'jaldi', 'b49c74c2ed2287b8becf9b905e1000fc', '2020-01-27 17:00:00.000000', NULL, NULL, 'female', 'jaldi@mgail.com', '082316974', 2350, '1578515125.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_ibfk_2` (`categoryid`),
  ADD KEY `createdby` (`createdby`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentarticle`
--
ALTER TABLE `commentarticle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articleid` (`articleid`),
  ADD KEY `createdby` (`createdby`);

--
-- Indexes for table `commentcourses`
--
ALTER TABLE `commentcourses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coursepage` (`coursepage`),
  ADD KEY `createdby` (`createdby`);

--
-- Indexes for table `courselink`
--
ALTER TABLE `courselink`
  ADD PRIMARY KEY (`id`),
  ADD KEY `link` (`courseid`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseId`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `takingcourses`
--
ALTER TABLE `takingcourses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idStudent`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `commentarticle`
--
ALTER TABLE `commentarticle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `commentcourses`
--
ALTER TABLE `commentcourses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courselink`
--
ALTER TABLE `courselink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `takingcourses`
--
ALTER TABLE `takingcourses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idStudent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`categoryid`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `article_ibfk_3` FOREIGN KEY (`createdby`) REFERENCES `admin` (`username`);

--
-- Constraints for table `commentarticle`
--
ALTER TABLE `commentarticle`
  ADD CONSTRAINT `commentarticle_ibfk_1` FOREIGN KEY (`articleid`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `commentarticle_ibfk_2` FOREIGN KEY (`createdby`) REFERENCES `user` (`username`);

--
-- Constraints for table `commentcourses`
--
ALTER TABLE `commentcourses`
  ADD CONSTRAINT `commentcourses_ibfk_1` FOREIGN KEY (`coursepage`) REFERENCES `courselink` (`id`),
  ADD CONSTRAINT `commentcourses_ibfk_2` FOREIGN KEY (`createdby`) REFERENCES `user` (`username`);

--
-- Constraints for table `courselink`
--
ALTER TABLE `courselink`
  ADD CONSTRAINT `link` FOREIGN KEY (`courseid`) REFERENCES `courses` (`courseId`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `category` (`id`);

--
-- Constraints for table `takingcourses`
--
ALTER TABLE `takingcourses`
  ADD CONSTRAINT `takingcourses_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`courseId`),
  ADD CONSTRAINT `takingcourses_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
