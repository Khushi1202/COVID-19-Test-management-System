-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2022 at 03:00 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covidtestreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customerlogin`
--

CREATE TABLE `customerlogin` (
  `username` varchar(45) NOT NULL,
  `second` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerlogin`
--

INSERT INTO `customerlogin` (`username`, `second`, `email`, `password`, `cpassword`, `contact`, `id`) VALUES
('khushi Dipeshkumar ', 'patel', 'khushi1202@gmail.com', '$2y$10$/iAA1uWZAhgfXPI9dkcvx.z1OFA3HWH5BAB3Pxv9yv4ExCfNlHVI6', '', '9265', 1),
('username', 'name', 'khushiii1202@gmail.com', '$2y$10$mbA8XkAcb/437NrRFtwWy.xj.0zU4CNBO1UohZKMHTTa6n5suYfy.', '', '1234567890', 3),
('purva', 'patel', 'purva1202@gmail.com', '$2y$10$1sfIuHvxz41bB9hBku/Ex.JsYkZXHG7oyKCENcz8yDWGni7Ap0jPq', '', '2354', 4),
('jack ', 'roman', 'jack@gmail.com', '$2y$10$KvdvQvutW2q1K1Eq77wjmO.jASaP9ZftyIBHeH36EJxLY0Esh65my', '', '+514982345', 5),
('Alex', 'jonson', 'alex123@gmail.com', '$2y$10$FC224VwKtrXcmsFompQdv.bXcHItpQOarIKSYMFkjdAF/qJHFozHa', '', '9265707745', 6),
('Dipesh', 'Patel', 'dipe1234@gmail.com', '$2y$10$Qv28HlXugg/PnGhZA8gt0OnK5/vxhYhP1l.3Vnw0nuqtNHYH3WMM6', '', '9998785689', 7),
('fenny', 'patel', 'feny@gmail.com', '$2y$10$Y5iwlk6JX92loawVSxz86OoBrOtsanqaDDgYENU2Ej0SkgN9LoD6S', '', '1234567890', 9),
('coco', 'cola', 'coco123@gmail.com', '$2y$10$WwpSxUUxRYXz5HyXzSrrD.FB1sHQzRezTx3ZbJjI784HBwu7yjQlG', '', '12345678', 10),
('suryaben chandrakant ', 'patel', 'surya123@gmail.com', '$2y$10$gdvLUZG550ryH..wsWVglOm8siDzbj92yLeelj5psVabvXXkn1I0i', '', '997440', 11),
('abc', 'abc', 'abc@gmail.com', '$2y$10$I7HHK8uuMrRb7XsfvpBq8ujh13qSKrPqBDGeQ7I4tE5tfigLG3TK.', '', '1234567890', 21),
('jay', 'patel', 'jay@gmail.com', '$2y$10$lqZ5RX9ukmq5BlIglPlNYea/LpYCwuf1ZzGpGBAdAFM3x3pnaE742', '', '1234', 22),
('venom', 'sis', 'venom123@gmail.com', '$2y$10$8Gxv4lC2iNNC4iIH12956OBPFqLdAC4K/3B3roBgdbBNRAZgu2rfi', '', '45436547', 24),
('khushi Dipeshkumar', 'patel', '1234@gmail.com', '$2y$10$HHS/nqF2jtyXviWPvHbzxOIf4LmKFNRF8IJhkxC5XWknINsZTXmni', '', '124314', 27),
('Khushi', 'patel', '1234@gmail.com', '$2y$10$8/MJg.NR2hSp6WYtantpPuzq.ZExqOfg6nn9BGcoHbyMsM7J9CAzu', '', '124314', 28),
('Abcd', 'abcd', 'abc@1234', '$2y$10$29RSB7TLetBod29oZvC5ZOyPj0yIJrylINtLxUZUbNvuYH921Af1G', '', 'abc', 29);

-- --------------------------------------------------------

--
-- Table structure for table `testdata`
--

CREATE TABLE `testdata` (
  `id` int(11) NOT NULL,
  `OrderNumber` bigint(14) DEFAULT NULL,
  `PatientMobileNumber` bigint(14) DEFAULT NULL,
  `TestType` varchar(100) DEFAULT NULL,
  `TestTimeSlot` varchar(120) DEFAULT NULL,
  `RegistrationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testdata`
--

INSERT INTO `testdata` (`id`, `OrderNumber`, `PatientMobileNumber`, `TestType`, `TestTimeSlot`, `RegistrationDate`) VALUES
(9, 154689707, 9099012390, 'Antigen', '2022-03-05T18:56', '2022-02-21 13:26:14'),
(10, 661949048, 9265707749, 'CB-NAAT', '2022-03-01T15:11', '2022-03-01 09:39:42'),
(11, 933678334, 9265707749, 'Antigen', '2022-03-03T15:18', '2022-03-01 09:48:54'),
(12, 156684321, 7420088780, 'CB-NAAT', '2022-03-12T15:21', '2022-03-01 09:51:46'),
(13, 181335497, 1234567890, 'Antigen', '2022-03-03T15:26', '2022-03-01 09:56:18'),
(14, 815056849, 9998785687, 'Antigen', '2022-03-04T17:17', '2022-03-01 11:46:14'),
(15, 186601242, 1234509765, 'RT-PCR', '2022-03-05T18:17', '2022-03-01 11:47:49'),
(16, 821373554, 9265707749, 'RT-PCR', '2022-03-03T17:37', '2022-03-01 12:08:00'),
(18, 826128262, 9265707749, '2022-03-01 15:09:41', '2022-03-26T21:54', '2022-03-01 12:24:09'),
(19, 218430824, 1234567890, 'Antigen', '2022-03-06T15:59', '2022-03-05 10:29:07'),
(20, 245100858, 9265707745, 'RT-PCR', '2022-03-08T17:13', '2022-03-07 11:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(12) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `FullAddress` varchar(255) DEFAULT NULL,
  `State` varchar(200) DEFAULT NULL,
  `RegistrationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `FullName`, `MobileNumber`, `DateOfBirth`, `FullAddress`, `State`, `RegistrationDate`) VALUES
(9, 'khushi patel', 9265707749, '2022-03-24', 'vishwash', 'Gujarat', '2022-03-01 09:39:41'),
(11, 'bharat', 7420088780, '2022-03-01', 'rajashtan', 'jodhpur', '2022-03-01 09:51:45'),
(12, 'venome', 1234567890, '2022-03-01', 'jodhpur ', 'Rajashtan', '2022-03-01 09:56:18'),
(13, 'Dipesh ', 9998785687, '2004-02-12', 'vishwash appartment near bhoomi nagar ghatlodia ahmedabad', 'Gujarat', '2022-03-01 11:46:14'),
(15, 'bharati ', 1234567891, '2002-01-01', 'rajashtan ', 'jodhpur', '2022-03-05 10:29:06'),
(16, 'khushi ', 9265707745, '2008-02-04', 'vishwash appartment', 'Gujarat', '2022-03-07 11:43:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerlogin`
--
ALTER TABLE `customerlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testdata`
--
ALTER TABLE `testdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customerlogin`
--
ALTER TABLE `customerlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `testdata`
--
ALTER TABLE `testdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
