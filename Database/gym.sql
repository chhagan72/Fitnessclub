-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 12, 2024 at 05:43 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `mobil` int NOT NULL,
  `address1` text NOT NULL,
  `address2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` int NOT NULL,
  `pname` text NOT NULL,
  `pprice` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `fname`, `lname`, `email`, `mobil`, `address1`, `address2`, `city`, `state`, `zip`, `pname`, `pprice`) VALUES
(1, 'rugved', 'ghirnikar', 'rugved@gmai.com', 2147483647, 'godbole plot ', 'dabki road akola', 'akola', 'maharashtra', 444002, 'protein', 3200),
(2, 'shubh', 'band', 'shubh@gmail.com', 2147483647, 'patur ', 'akola', 'akola', 'maharashtra', 444002, 'dumb', 1750),
(3, 'shubh2', 'band', 'shubh2@gmail.com', 2147483647, 'paras', 'knskjdskdkj', 'akola', 'gagaga', 444444, 'protein', 2005),
(4, 'rugved', 'patil', 'patil', 2147483647, 'dabki road', 'dabki road akola', 'akola', 'maharashtra', 444002, 'TREADMILL', 50000),
(5, 'rohan', 'awachar', 'rohan@gmail.com', 123456789, 'akola', 'dabki road akola', 'akola', 'maharashtra', 444002, 'NUTRITIONCOMBOPACK', 4000),
(6, 'rugved', 'patil', 'dhiraj@gmail.com', 123456789, 'akola', 'dabki road akola', 'akola', 'maharashtra', 444002, 'NUTRITIONCOMBOPACK', 4000),
(7, 'a', 'dcvdfv', 'xsxs@', 98475645, 'scsc', 'sdcsudjvhsd', 'xsx', 'sxsx', 212, 'PROTEINBOTTLE', 200),
(8, 'dcsd', 'sac', 'csdc@csdc', 5464, 'dsczx', 'zxckjsd', 'kijdkc', 'ldkvlo', 2394923, 'NUTRITIONCOMBOPACK', 4000),
(9, 'rugved', 'patil', 'rugved@gmail.com', 98475645, 'dabki road', 'knskjdskdkj', 'akola', 'maharashtra', 444002, 'CHESTMACHINE', 50000),
(10, 'rani', 'kavishwar', 'rani@gmail.com', 8765544, 'gfgkdk', 'fhdfk', 'shambhaji nagar', 'maharashtra', 444002, 'Punch_bag', 3500),
(11, 'shivani', 'patvi', 'patvishivani@gmail.com', 2147483647, 'dabki road', 'akola', 'akola', 'maharashtra', 444002, 'Punch_bag', 3500),
(12, 'prasana', 'metkar', 'prasannametkar@gmail.com', 2147483647, 'akola', 'akola', 'akola', 'maharashtra', 444002, 'Punch_bag', 3500),
(13, 'yash', 'baghat', 'yash@gmail.com', 2147483647, 'dabki road', 'akola', 'akola', 'maharashtra', 444444, 'Punch_bag', 3500),
(30, 'rohan', 'patil', 'ravindra@gmail.com', 2147483647, 'dabki road', 'akola', 'dabli', 'maharashtra', 444444, 'Punch_bag', 3500),
(29, 'rohan', 'patil', 'ravindra@gmail.com', 2147483647, 'dabki road', 'akola', 'dabli', 'maharashtra', 444444, '', 0),
(28, 'ajay', 'khelkar', 'khelkar@gmail.com', 123456789, 'nimkarda', 'akola', 'akola', 'maharashtra', 333331, 'Punch_bag', 3500),
(27, 'shubh', 'sac', 'sujaygawande@gmail.com', 99876, 'akola', 'akola', 'akola', 'maharashtra', 444002, 'Punch_bag', 3500),
(26, 'rohan', 'awachar', 'ranu@22gmail.com', 98475645, 'khandala', 'dabki road akola', 'akola', 'maharashtra', 444444, 'Punch_bag', 3500),
(25, 'rohan', 'awachar', 'ranu@22gmail.com', 98475645, 'khandala', 'dabki road akola', 'akola', 'maharashtra', 444444, '', 0),
(31, 'dcsddsds', 'fdsdv', 'dhiraj@gmail.com', 4567, 'djsda', 'dabki road akola', 'ccsvc ', 'czacc', 23232, 'Punch_bag', 3500),
(32, 'ghhh', 'opk', 'ghjip', 67885, 'hjiop', 'hhj', 'hjiop', 'mhn', 0, 'Punch_bag', 3500),
(33, 'hjok', 'ghu', 'ghji', 987, 'hjiop', 'hjj', 'kmjo', 'mhj', 56700, '', 0),
(34, 'leena', 'patil', 'leena@gmail.com', 2147483647, 'khandala', 'at post khandala', 'akola', 'maharashtra', 444102, 'Punch_bag', 3500),
(35, 'Ronii', 'Gawande', 'Ronni@gmial.com', 2147483647, 'dahigaon', 'at post', 'akola', 'Maharashtra', 444102, 'Punch_bag', 3500),
(36, 'd', 'd', 'sujay@gmail.com', 2147483647, 's', 'ds', 's', 's', 123, 'Punch_bag', 3500),
(37, 'viki', 'gawande', 'viki@gmail.com', 98765466, 'akola', 'akola', 'akola', 'mh', 44412, 'Punch_bag', 3500),
(38, 'chituu', 'chitu', 'chitu@gmail.com', 87654, 'akola', 'akola', 'akola', 'mH', 1234, 'Punch_bag', 3500),
(39, 'rug', 'pqtil', 'rug@gmail.com', 2147483647, 'khanada', 'hxjhsx', 'akola', 'mh', 444321, 'Punch_bag', 3500);

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

DROP TABLE IF EXISTS `producttb`;
CREATE TABLE IF NOT EXISTS `producttb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`) VALUES
(1, 'PROTEIN SHAKER BOTTLE', 200),
(2, '5 KG DUMB-BELL', 1750),
(3, 'NUTRITION COMBO PACK', 4000),
(4, 'WEIGHT GAINER', 1200),
(5, 'THIGH MACHINE', 40000),
(6, 'TREAD-MILL', 50000),
(7, 'BALANCE BALL', 1500),
(8, 'ACTION AIR BIKE', 35000),
(9, 'GYM-BAG', 1400),
(10, 'T-BAR', 10000),
(11, 'CHEST MACHINE', 50000),
(12, 'PUNCH-BAG', 3500);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` varchar(20) DEFAULT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `user`, `email`, `password`) VALUES
(1, 'rugved', 'rugved@gmail.com', 'rugved123'),
(2, 'rugved', 'rugved@gmai.com', 'rugved123'),
(3, 'dhiraj', 'dhiraj@gmail.com', 'dhiraj'),
(4, 'shubh', 'shubh@gmail.com', 'shubh'),
(5, 'rugu', 'rugu@gmail.com', 'rugu@20'),
(6, 'sunil', 'ghirnikarsunil@gmail.com', 'sunil123'),
(7, 'rohan', 'rohan@gmail.com', 'rohan123'),
(8, 'sujay', 'sujaygawande@gmail.com', 'sujay@123'),
(9, 'shivani', 'patvishivani@gmail.com', 'shivdi'),
(10, 'prasanna', 'prasannametkar@gmail.com', 'prasanna@1'),
(11, 'ravindra', 'ravindra@gmail.com', 'ravindra12'),
(12, 'leena', 'leena@gmail.com', '1234567'),
(13, 'Ram', 'ramg@gmail.com', 'ram1234'),
(14, 'saurabh', 'saurabh@gmail.com', 'saurabh123'),
(15, 'shubham', 'shubham@gmail.com', 'shubham123'),
(16, 'vrunu', 'v@gmail.com', 'vrunu123'),
(17, 'viki', 'viki@gmail.com', 'viki123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Admin_Name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Admin_Password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Admin_Name`, `Admin_Password`) VALUES
('admin', 'dhiraj');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

DROP TABLE IF EXISTS `user_orders`;
CREATE TABLE IF NOT EXISTS `user_orders` (
  `Order_Id` int NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `Price` int NOT NULL,
  `Quantity` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
