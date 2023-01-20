-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2023 at 11:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fithubdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `classid` int(11) NOT NULL,
  `coachid` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(300) NOT NULL,
  `time_period` varchar(300) NOT NULL,
  `session_number` int(11) NOT NULL,
  `days` varchar(300) NOT NULL,
  `hours` varchar(300) NOT NULL,
  `capacity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`classid`, `coachid`, `name`, `description`, `image`, `time_period`, `session_number`, `days`, `hours`, `capacity`, `price`) VALUES
(1, 1, 'وزنه برداری', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فسارا تکنولوژی مورد نیاز، و .', 'class-img1.jpg', '1 ماه', 12, 'روز های فرد', '8:00 - 9:00 ق.ظ', 20, 650),
(2, 2, 'یوگا قدرتی', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فسارا تکنولوژی مورد نیاز، و .', 'class-img3.jpg', '1 ماه', 12, 'شنبه, دوشنبه , سه شنبه', '8:00 - 9:00 ق.ظ', 30, 550),
(3, 4, 'بدنسازی', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فسارا تکنولوژی مورد نیاز، و .', 'class-img2.jpg', '1 ماه', 12, 'شنبه و پنجشنبه', '8:00 - 9:00 ق.ظ', 0, 400),
(4, 3, 'تناسب اندام', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فسارا تکنولوژی مورد نیاز، و .', 'class-img4.jpg', '1 ماه', 12, 'روز های فرد', '8:00 - 9:00 ق.ظ', 20, 300),
(5, 4, 'تی آر ایکس', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فسارا تکنولوژی مورد نیاز، و .', 'class-img5.jpg', '1 ماه', 12, 'روز های زوج', '8:00 - 9:00 ق.ظ', 29, 600),
(6, 6, 'ایروبیک', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فسارا تکنولوژی مورد نیاز، و .', 'class-img6.jpg', '1 ماه', 12, 'روز های فرد', '8:00 - 9:00 ق.ظ', 30, 500);

-- --------------------------------------------------------

--
-- Table structure for table `coaches`
--

CREATE TABLE `coaches` (
  `coachid` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `image` varchar(300) NOT NULL,
  `expertice` varchar(150) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coaches`
--

INSERT INTO `coaches` (`coachid`, `name`, `image`, `expertice`, `phone`) VALUES
(1, 'زهرا طاهری', 'trainer2.jpg', 'وزنه برداری', '09171111212'),
(2, 'شیما رضایی', 'trainer5.jpg', 'یوگا', '09171111212'),
(3, 'ملیکا احمدی', 'trainer4.jpg', 'تناسب اندام', '09171111212'),
(4, 'الهام بابایی', 'trainer7.jpg', 'بدنسازی', '09171111212'),
(5, 'طاهره خوشبین', 'trainer2.jpg', 'یوگا', '09171111212'),
(6, 'مینا توکلی', 'trainer7.jpg', 'تناسب انام', '09171111212');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `paymentid` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `number` varchar(16) NOT NULL,
  `cvv` int(11) NOT NULL,
  `expiredate` varchar(10) NOT NULL,
  `money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`paymentid`, `name`, `number`, `cvv`, `expiredate`, `money`) VALUES
(1, 'پگاه اوجی فرد', '6219 8619 1128 4', 323, '07 / 08', 600),
(2, 'پگاه اوجی فرد', '6219 8619 1128 4', 323, '07 / 08', 600),
(3, 'پگاه اوجی فرد', '6219 8619 1128 4', 323, '07 / 08', 600),
(4, 'پگاه اوجی فرد', '6219 8619 1128 4', 323, '07 / 08', 600);

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `registerid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `paymentid` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`registerid`, `classid`, `userid`, `paymentid`, `date`) VALUES
(5, 5, 1, 4, '2023-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `name`, `email`, `password`, `type`) VALUES
(1, 'admin', 'پگاه اوجی فرد', 'pghofd6772@gmail.com', '12345', 1),
(2, 'usertest', 'تست', 'usertest@gmail.com', '12345', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`classid`),
  ADD KEY `class_couchid_fk` (`coachid`);

--
-- Indexes for table `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`coachid`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`registerid`),
  ADD KEY `register_classid_fk` (`classid`),
  ADD KEY `register_userid_fk` (`userid`),
  ADD KEY `register_paymentid_fk` (`paymentid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `classid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `coaches`
--
ALTER TABLE `coaches`
  MODIFY `coachid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `registerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `class_couchid_fk` FOREIGN KEY (`coachid`) REFERENCES `coaches` (`coachid`);

--
-- Constraints for table `registers`
--
ALTER TABLE `registers`
  ADD CONSTRAINT `register_classid_fk` FOREIGN KEY (`classid`) REFERENCES `classes` (`classid`),
  ADD CONSTRAINT `register_paymentid_fk` FOREIGN KEY (`paymentid`) REFERENCES `payments` (`paymentid`),
  ADD CONSTRAINT `register_userid_fk` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
