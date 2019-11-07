-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2019 at 08:14 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vlrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `citizen`
--

DROP TABLE IF EXISTS `citizen`;
CREATE TABLE IF NOT EXISTS `citizen` (
  `First_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Last_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `License_No` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `National_ID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`National_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `citizen`
--

INSERT INTO `citizen` (`First_Name`, `Last_Name`, `License_No`, `National_ID`, `Password`) VALUES
('Jennifer', 'Davis', '143647819671212', '671212-0404', 'anoth3rpass');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
