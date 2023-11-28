-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2023 at 11:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zealforex`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_advert`
--

CREATE TABLE `tbl_home_advert` (
  `advert_id` int(11) NOT NULL,
  `ad_header` text NOT NULL,
  `ad_header_append` text NOT NULL,
  `ad_background_image` varchar(100) NOT NULL,
  `ad_button_text` varchar(100) NOT NULL,
  `ad_button_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_home_advert`
--

INSERT INTO `tbl_home_advert` (`advert_id`, `ad_header`, `ad_header_append`, `ad_background_image`, `ad_button_text`, `ad_button_url`) VALUES
(1, 'Send money to your loved ones in India with', 'a better rate & low transfer fees', '', 'CONTINUE TO HOME PAGE ', '#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_home_advert`
--
ALTER TABLE `tbl_home_advert`
  ADD PRIMARY KEY (`advert_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_home_advert`
--
ALTER TABLE `tbl_home_advert`
  MODIFY `advert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
