-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 12:13 PM
-- Server version: 10.3.16-MariaDB
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
-- Database: `pbdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `c1`
--

CREATE TABLE `c1` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `city` text NOT NULL,
  `type` text NOT NULL,
  `area` text NOT NULL,
  `password` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c1`
--

INSERT INTO `c1` (`id`, `firstname`, `lastname`, `email`, `phone`, `city`, `type`, `area`, `password`, `date`, `time`) VALUES
(1, 'shahadul', 'ali', 'shahadul@gmail.com', '01728844733', 'BD', 'seller', 'Dhaka', '12345', '02/01/20', '12:51:17 pm'),
(2, 'Sugondha', 'Ahmed', 'sugondha@gmail.com', '01757313694', '7', 'seller', 'Dhaka', '12345', '02/02/20', '08:18:28 am'),
(7, 'Tarikul', 'Hasan', 'tarikulhasanshuvo7944@gmail.com', '01792812123', 'Rangpur', 'seller', 'Mohammadpur, Krishi Market', '12345', '03/13/20', '11:03:25 am');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `item_name` text NOT NULL,
  `item_details` text NOT NULL,
  `item_price` decimal(10,0) NOT NULL,
  `c1` text NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `url` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `main_category` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `area` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `item_name`, `item_details`, `item_price`, `c1`, `image1`, `image2`, `image3`, `url`, `date`, `time`, `main_category`, `city`, `area`) VALUES
(93, 'Land for Sale', 'Good looking and in a good place.....', '150000', '1', 'img/bari.png', 'img/20190812141006_image1.png', 'img/ali-hasan-osama-footer.jpg', '', '02/03/20', '06:03:07 am', 'Residential Plot', 'Rangpur', 'Mohammadpur, Krishi Market'),
(94, 'Office', 'Its a Very Good Property . I Think You Like it. For More Details plz Contact us.', '1500000', '1', 'img/images.jpg', 'img/images1.jpg', 'img/975508_0_original.jpg', '', '13/03/20', '08:03:42 pm', 'Industrial Space', 'Dhaka', 'Mirpur 10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c1`
--
ALTER TABLE `c1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c1`
--
ALTER TABLE `c1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
