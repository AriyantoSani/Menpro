-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 12:34 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

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
CREATE DATABASE IF NOT EXISTS `menprodb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `menprodb`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `birthday` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
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
(1, '123456789', 'SuperAdmin', '5c0f508407455f8a2139845cfbf7a4f6', '2019-12-16 06:29:46', 0, '', '', '', '', 0, '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `courseId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseId`, `title`, `link`, `img`, `price`, `description`) VALUES
(1, 'Data Analytic', 'https://www.youtube.com/embed/5HlbV1wKBmo', 'https://news.blr.com/app/uploads/sites/3/2019/01/eLearning-tablet-5.jpg', 50000, 'ini Data Analytic'),
(2, 'E-Learning', 'https://www.youtube.com/embed/r6vkyMlqK1o', 'https://d19d5sz0wkl0lu.cloudfront.net/dims4/default/fa3e57d/2147483647/resize/800x%3E/quality/90/?url=https%3A%2F%2Fatd-brightspot.s3.amazonaws.com%2F021517-elearning.jpeg', 200000, ''),
(3, 'Trend Technology', 'https://www.youtube.com/embed/nRTRyfIDp4k', 'https://specials-images.forbesimg.com/imageserve/5d9182dc6c7c8f000990b672/960x0.jpg?fit=scale', 3000, ''),
(4, 'Machine Learning', 'https://www.youtube.com/embed/ukzFI9rgwfU', 'https://purelifi.com/wp-content/uploads/2019/02/AdobeStock_118793641-1320x740.jpeg', 2000, '');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

DROP TABLE IF EXISTS `dosen`;
CREATE TABLE `dosen` (
  `idDosen` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `agama` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `nomor telepon` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hargaproduk`
--

DROP TABLE IF EXISTS `hargaproduk`;
CREATE TABLE `hargaproduk` (
  `idHargaProduk` int(11) NOT NULL,
  `Jumlah harga produk` int(11) DEFAULT NULL,
  `metode pembayaran` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mata kuliah`
--

DROP TABLE IF EXISTS `mata kuliah`;
CREATE TABLE `mata kuliah` (
  `idMata Kuliah` int(11) NOT NULL,
  `nama mata kuliah` varchar(45) NOT NULL,
  `kelas` int(11) NOT NULL,
  `Student_idStudent` int(11) NOT NULL,
  `Dosen_idDosen` int(11) NOT NULL,
  `HargaProduk_idHargaProduk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `idRole` int(11) NOT NULL,
  `role title` varchar(45) NOT NULL,
  `role desc` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
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
  `balance` int(255) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`idStudent`, `username`, `nama`, `password`, `birthday`, `kelas`, `alamat`, `gender`, `email`, `notelepon`, `balance`, `image`) VALUES
(1, 'asdas', 'asdas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(2, 'asda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(4, 'lion', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(12, 'haha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(13, 'asdasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(14, '12312', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(15, '2019-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(16, 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(17, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(18, 'eee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, ''),
(19, 'tony', 'stark', '123', '2018-12-31 17:00:00.000000', NULL, NULL, 'male', 'asdas', '3', 0, ''),
(21, 'uzumaki', 'naruto', '51711d3cb95945007b827cb703fcf398', '2018-12-31 17:00:00.000000', NULL, NULL, 'male', 'aaaa@gmail.com', '123123', 0, ''),
(22, 'asdasaaa', 'asd', '043c00e6c7ff021e8cc4d394d3264cb5', '2018-12-31 17:00:00.000000', NULL, NULL, NULL, 'as@gmaisl.com', '234', 0, ''),
(24, '1772046', 'ariyanto sani', 'abd297419cd47c7b4191a30f615e464d', '2019-11-28 17:00:00.000000', NULL, NULL, 'male', 'asdas@gmail.com', '123123', 10222, '1772046.jpg'),
(27, '1772044', 'Roy Parsaoran', '6e000381b965bd278e3dbb9fc0e1c953', '2019-11-30 17:00:00.000000', NULL, NULL, 'female', 'royparsaoran17@gmail.com', '12345678', 40000, ''),
(29, '1772045', 'Ariyanto Sani', '564bbcf07eb8a6c0c05613df8b7e23e3', '1999-05-04 17:00:00.000000', NULL, NULL, 'male', 'ariyantosani555@gmail.com', '082316997753', 0, ''),
(30, '720721', 'madara', 'f0ba8f9f389484af6f1a6ccc62a645d0', '2018-12-31 17:00:00.000000', NULL, NULL, 'male', 'ariyantosani555@gmail.com', '082316997753', 0, ''),
(31, 'asdasasdas', 'asdas', 'f7e0ef389ac6133c88aedbd66b44a4e1', '2018-12-31 17:00:00.000000', NULL, NULL, 'male', 'asdasd@gmail.com', '123213', 0, ''),
(33, '1772031', 'zaldy', 'a536240a8b3cfa7af027f7c24ea242e6', '2018-12-31 17:00:00.000000', NULL, NULL, 'male', 'zaldy@gmail.com', '123456789', 0, ''),
(34, 'StevenR', 'Rumanto', 'ea07ff4e27d0bcf5f786f39e44e031f1', '2020-11-30 17:00:00.000000', NULL, NULL, 'female', 'StevenRumanto@gmail.com', '123456789', 0, ''),
(35, '7207222', 'ari', '0756e771c7674775d1c3669ccbf3fd9a', '2018-12-31 17:00:00.000000', NULL, NULL, 'male', 'ari@gmail.com', '123456789', 0, ''),
(36, '7207234', 'asda', 'a8f5f167f44f4964e6c998dee827110c', '2018-12-31 17:00:00.000000', NULL, NULL, 'male', 'asdas@gmail.cpom', '123459648', 0, ''),
(37, '546321', 'SSSS', 'e10adc3949ba59abbe56e057f20f883e', '2018-12-31 17:00:00.000000', NULL, NULL, 'male', 's@gmail.com', '123456', 20000, '');

-- --------------------------------------------------------

--
-- Table structure for table `studenttakecourses`
--

DROP TABLE IF EXISTS `studenttakecourses`;
CREATE TABLE `studenttakecourses` (
  `id` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `coursesId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `takingcourses`
--

DROP TABLE IF EXISTS `takingcourses`;
CREATE TABLE `takingcourses` (
  `id` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `lecturer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `takingcourses`
--

INSERT INTO `takingcourses` (`id`, `student_id`, `course_id`, `lecturer_id`) VALUES
(1, '1772046', 1, 0),
(4, '1772046', 3, 0),
(5, '1772046', 4, 0),
(6, '1772046', 2, 0),
(7, '1772044', 1, 0),
(8, '1772044', 3, 0),
(9, '1772044', 4, 0),
(10, '546321', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `Role_idRole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseId`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`idDosen`);

--
-- Indexes for table `hargaproduk`
--
ALTER TABLE `hargaproduk`
  ADD PRIMARY KEY (`idHargaProduk`);

--
-- Indexes for table `mata kuliah`
--
ALTER TABLE `mata kuliah`
  ADD PRIMARY KEY (`idMata Kuliah`),
  ADD KEY `fk_Mata Kuliah_Student_idx` (`Student_idStudent`),
  ADD KEY `fk_Mata Kuliah_Dosen1_idx` (`Dosen_idDosen`),
  ADD KEY `fk_Mata Kuliah_HargaProduk1_idx` (`HargaProduk_idHargaProduk`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`idStudent`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `studenttakecourses`
--
ALTER TABLE `studenttakecourses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `takingcourses`
--
ALTER TABLE `takingcourses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `fk_User_Role1_idx` (`Role_idRole`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `idDosen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mata kuliah`
--
ALTER TABLE `mata kuliah`
  MODIFY `idMata Kuliah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `idStudent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `studenttakecourses`
--
ALTER TABLE `studenttakecourses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `takingcourses`
--
ALTER TABLE `takingcourses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mata kuliah`
--
ALTER TABLE `mata kuliah`
  ADD CONSTRAINT `fk_Mata Kuliah_Dosen1` FOREIGN KEY (`Dosen_idDosen`) REFERENCES `dosen` (`idDosen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Mata Kuliah_HargaProduk1` FOREIGN KEY (`HargaProduk_idHargaProduk`) REFERENCES `hargaproduk` (`idHargaProduk`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Mata Kuliah_Student` FOREIGN KEY (`Student_idStudent`) REFERENCES `student` (`idStudent`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_User_Role1` FOREIGN KEY (`Role_idRole`) REFERENCES `role` (`idRole`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
