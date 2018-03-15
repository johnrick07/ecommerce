-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2018 at 08:34 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tutorial_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_ecommerce`
--

CREATE TABLE `db_ecommerce` (
  `prdct_id` int(11) NOT NULL,
  `prdctname` varchar(100) NOT NULL,
  `prdctcode` varchar(100) NOT NULL,
  `stock` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `action` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_ecommerce`
--

INSERT INTO `db_ecommerce` (`prdct_id`, `prdctname`, `prdctcode`, `stock`, `image`, `price`, `action`) VALUES
(17, 'Korean  Summer Floral Cotton Top', '23j4h23j232', '122', '12313', 250, ''),
(18, 'Korean Denim Jumpshort', '12e23ee2', '233', 'weq', 400, ''),
(19, 'Korean Lace Up Sneakers', 'wrdwd23d2', '400', 'qedqwd', 504, ''),
(20, 'Korean Lacey Dresses', 'qdc23', '239', 'cdqec', 69, ''),
(21, 'Korean Couple Shorts', '34gf23f23f', '230', 'cdscs', 350, ''),
(22, 'Korean BTS Certified Army Shirt Black (Unisex)', 'qwd1d13d11', '233', 'asca', 350, ''),
(23, 'ONHAND korean top', 'qscwefwf11r1', '343', '210', 210, ''),
(24, 'Korean Sassy Coordinates: Tops & Skirt', 'qwd23d3', '232', 'asdsf', 368, ''),
(25, 'KOREAN FACIAL MASK', 'awd23d23d3', '232', 'asfsef', 20, ''),
(26, 'Korean Combined Fabric Dress C6', '2r233r2e', '234', '1rwd23', 230, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_ecommerce`
--
ALTER TABLE `db_ecommerce`
  ADD PRIMARY KEY (`prdct_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_ecommerce`
--
ALTER TABLE `db_ecommerce`
  MODIFY `prdct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
