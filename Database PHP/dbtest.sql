-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 12:59 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(100) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `User_Password` varchar(100) NOT NULL,
  `User_Email` varchar(100) NOT NULL,
  `User_Image` text NOT NULL,
  `User_Resume` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `User_Name`, `User_Password`, `User_Email`, `User_Image`, `User_Resume`) VALUES
(1, 'KAMRAN', '$2y$10$CVnKzhg6iNMgk8cC7KrWXeRpGFi2p/2E7S8ZrbkaQgflTm3MLaReq', 'KAMRAN@GMAIL.COM', 'Uploaded/Farwa (7).jpg', 'Uploaded/7 Key For Success.pdf'),
(399, 'JAMSHED', '$2y$10$0Dg2ZhddEUbQ/M9vVML3JOUCEQpr2xhWd6qc/ylRjM.9OB84oCsOa', 'JAMSHEDKPK@HOTMAIL.COM', 'Uploaded/blue_grid-wallpaper-1600x900 - Copy.jpg', 'Uploaded/Communication Skill.pdf'),
(400, 'HAMEED', '$2y$10$vAv.RcwSwWHpU5BAs0Cm9eDceivpSEnY.V/TTEj.pBk6F87A4DDlK', 'HAMEED@HOTMAIL.COM', 'Uploaded/FB_IMG_1510195688727.jpg', 'Uploaded/Computer Architecture.pdf'),
(401, 'NAILA', '$2y$10$oxSG7Jl/U8Kgulw91jr9UOjVh2SrPnbu1KK7bA7IlQxf1Pgc/PgXu', 'NAILA@GMAIL.COM', 'Uploaded/FILE118.JPG', 'Uploaded/Glyphicon.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
