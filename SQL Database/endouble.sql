-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 05, 2019 at 03:44 PM
-- Server version: 10.2.13-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vanhern264_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `recruitment`
--

CREATE TABLE `recruitment` (
  `firstName` varchar(200) NOT NULL,
  `lastName` varchar(200) NOT NULL,
  `birth` date NOT NULL,
  `email` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `houseNumber` int(11) NOT NULL,
  `zipCode` varchar(200) NOT NULL,
  `euPermition` varchar(200) NOT NULL,
  `bnsNumber` varchar(200) NOT NULL,
  `motivation` varchar(200) NOT NULL,
  `cv` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recruitment`
--

INSERT INTO `recruitment` (`firstName`, `lastName`, `birth`, `email`, `sex`, `address`, `houseNumber`, `zipCode`, `euPermition`, `bnsNumber`, `motivation`, `cv`) VALUES
('dsd', 'fsd', '2019-03-14', 'fsd', 'Man', 'fsd', 4, 'fs', '', '0', '', ''),
('dsd', 'fsd', '2019-03-14', 'fsd', 'Man', 'fsd', 4, 'fs', '', '0', '', ''),
('dsd', 'fsd', '2019-03-14', 'fsd', 'Man', 'fsd', 4, 'fs', '', '0', '', ''),
('dsd', 'fsd', '2019-03-14', 'fsd', 'Man', 'fsd', 4, 'fs', '', '0', '15516175882762.docx', '15516175881427.docx'),
('dsd', 'fsd', '2019-03-14', 'fsd', 'Man', 'fsd', 4, 'fs', '', '0', '15516193669883.docx', '15516193668127.docx'),
('dasda', 'dasd', '2019-03-14', 'dasd', 'Woman', 'da', 3, 'da', '', '0', '15516194203295.docx', '15516194208100.docx'),
('dasda', 'dasd', '2019-03-14', 'dasd', 'Woman', 'da', 3, 'da', '', '0', '15516195282838.docx', '15516195284315.docx'),
('dasda', 'dasd', '2019-03-14', 'dasd', 'Woman', 'da', 3, 'da', '', '0', '15516195426458.docx', '15516195428713.docx'),
('k', 'k', '2019-03-14', 'k', 'Man', 'k', 88, 'k', '', '0', '15516203453996.docx', '15516203459961.docx'),
('k', 'k', '2019-03-14', 'k', 'Man', 'k', 88, 'k', '', '0', '15516204632283.docx', '15516204639028.docx'),
('k', 'k', '2019-03-14', 'k', 'Man', 'k', 88, 'k', '', 'No', '15516206157253.docx', '15516206152172.docx'),
('k', 'k', '2019-03-14', 'k', 'Man', 'k', 88, 'k', '', 'No', '15516207226830.docx', '15516207227774.docx');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
