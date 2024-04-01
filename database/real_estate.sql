-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2024 at 10:49 AM
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
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'subhash', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `image4` text NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image1`, `image2`, `image3`, `image4`, `property_id`) VALUES
(21, '6.jpg', '8.jpg', '7.jpg', '8.jpg', 5),
(22, '292527915_456129533185030_6651144922995971750_n.jpg', '293066120_456129279851722_2828521373338160413_n.jpg', '292971960_456129383185045_12458494132437569_n.jpg', '292512138_456129329851717_5972497169984462691_n.jpg', 6),
(23, '295887006_470755265055790_3510845747490787014_n.jpg', '296442612_470755151722468_6382118716251084399_n.jpg', '296556553_470755275055789_1655234370581349493_n.jpg', '295917473_470755095055807_7296607276461063607_n.jpg', 7),
(25, '291681913_452474570217193_3847318009338192855_n.jpg', '291653539_452474443550539_3370204949684053964_n.jpg', '292204419_452474523550531_6950687070518988683_n.jpg', '291133777_452474470217203_6061436655444961341_n.jpg', 8),
(26, '291707025_451935396937777_7831059543627530403_n.jpg', '291119765_451935530271097_1277787643167961533_n.jpg', '291670788_451935556937761_9114460956755449604_n.jpg', '291224283_451935366937780_6024746600401388391_n.jpg', 9),
(27, '283232283_422083806589603_5746074319873411897_n.jpg', '283677261_422084963256154_7645356713549837798_n.jpg', '283273278_422085099922807_3548801617758036644_n.jpg', '284065451_422084749922842_7505728421567337083_n.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `bedroom` int(11) NOT NULL,
  `hall` int(11) NOT NULL,
  `kichan` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `balcony` int(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `sqr_price` varchar(11) NOT NULL,
  `address` text NOT NULL,
  `video` text NOT NULL,
  `image` text NOT NULL,
  `description` varchar(300) NOT NULL,
  `location` text NOT NULL,
  `property_owner` varchar(20) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `lot_size` varchar(20) NOT NULL,
  `sold` varchar(12) NOT NULL,
  `land_area` varchar(20) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `title`, `bedroom`, `hall`, `kichan`, `bathroom`, `balcony`, `price`, `sqr_price`, `address`, `video`, `image`, `description`, `location`, `property_owner`, `property_type`, `lot_size`, `sold`, `land_area`, `date`) VALUES
(5, 'Affordable 1 Bedroom', 1, 1, 0, 1, 1, '00.00', '28', ' C.M. Recto Street and R. Magsaysay Avenue. ', 'none', '8.jpg', 'Affordable 1 Bedroom Condo Unit for Assume in Vivaldi Residences Davao!\r\nCheaper than the current prices!\r\nVivaldi Residences Davao is a 36-story residential tower in Davao City, Philippines, conveniently situated at the intersection of C.M. Recto Street and R. Magsaysay Avenue. \r\nThe condominium is', 'none', 'Vivaldi Residences', 'Condo Unit', '28.62 sq. m.', 'yes', '28.62 sq. m.', '2023-05-31 22:14:51'),
(6, 'House & Lot For Sale', 1, 1, 1, 1, 1, '00', '250', 'Lanang, Davao City', 'none', '293304360_456129126518404_4698991249401287002_n.jpg', 'For more information about the property, send us a private message or contact the numbers provided below.\r\n? SUN: 0925-824-3352\r\n? TM: 0955-684-9025\r\nAida L. Bario\r\nREB license no. 0007052\r\nHLURB No. XI-B-2022/03-48', 'none', 'LaidBall', 'House and Lot', '250 sq. m.', 'no', '250 sq. m.', '2023-05-31 22:24:05'),
(7, 'Units are still avai', 1, 1, 1, 1, 1, '00', '32', ' Bolton Extension, Davao City', 'none', '296884044_470755048389145_7580931753005633026_n.jpg', 'Units are still available in Centro Spatial Davao!\r\nDeveloper: Filinvest Land Inc.\r\nCentro Spatial is a mid-rise condominium highlighting 5 modern designed 8-storey buildings. It is built in a 1.7-hectare land in Bolton Extension, Davao City, which provides spacious units and ample space for recreat', 'none', 'Filinvest Land Inc.', 'Condo Unit', '32sqm', 'yes', '32sqm', '2023-05-31 22:59:59'),
(8, 'AFFORDABLE 2 Bedroom', 1, 1, 1, 1, 1, '00', '28', 'Don Julian Rodriguez Ave. in Ma-a Road', 'none', '291133777_452474470217203_6061436655444961341_n.jpg', 'AFFORDABLE 2 Bedroom Condominium FOR SALE\r\nProject: 8 Spatial Davao\r\nDeveloper: Filinvest Land Inc.', 'none', 'Filinvest Land Inc.', 'Condo Unit', '28.62 sq. m.', 'no', '28.62 sq. m.', '2023-05-31 23:34:55'),
(9, 'House and Lot FOR SA', 1, 1, 1, 1, 1, '00', '219', 'Buhangin, Davao City', 'none', '292237289_451935166937800_2794135004390215768_n.jpg', 'House and Lot FOR SALE located in Buhangin, Davao City\r\n? Located in a high-end subdivision, with a guardhouse, clubhouse & pool.\r\n? FULLY FURNISHED. What you see in the picture, is what you get.\r\n? Lot Area: 219 square meters\r\n? 4 bedrooms\r\n? 3 toilet and bathroom', 'none', 'LaidBall', 'House and Lot', '219 sq. m.', 'yes', '219 sq. m.', '2023-06-01 00:08:55'),
(10, '2 studio units ', 1, 1, 1, 1, 1, '00', '28', 'Avida Towers Davao', 'none', '283144262_422083616589622_6164307925178040528_n.jpg', 'Developer: Avida Land Corp. by Ayala Land\r\n- Good for 1-2 people\r\n- Fully furnished!\r\n- WiFi ready! (Prepaid)\r\n- Downtown Area\r\n- Clean and Disinfected!\r\nOpen for monthly and daily renters!\r\nRate/s: 18k monthly, 1,500 daily.\r\nFor more information, sen', 'none', 'Avida Land Corp. by ', 'Condo Unit', '28.62 sq. m.', 'yes', '28.62 sq. m.', '2023-06-01 00:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `reserve_id` int(11) NOT NULL,
  `reserve_date` varchar(100) NOT NULL,
  `client_name` varchar(150) NOT NULL,
  `client_contact` int(25) NOT NULL,
  `client_email` varchar(100) NOT NULL,
  `property_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `date` varchar(150) NOT NULL,
  `user_id` int(100) NOT NULL,
  `property` varchar(150) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `fee_status` int(100) NOT NULL,
  `fee` int(11) NOT NULL,
  `transaction_status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `date`, `user_id`, `property`, `phone`, `fee_status`, `fee`, `transaction_status`) VALUES
(17, '2024-04-01', 8, 'House & Lot For Sale', '', 0, 500, '0'),
(18, '2024-04-01', 8, '2 studio units ', '', 0, 500, '0'),
(19, '2024-04-01', 8, '2 studio units ', '09273302410', 0, 500, '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(8, 'user', '123', 'user@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`reserve_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `reserve_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
