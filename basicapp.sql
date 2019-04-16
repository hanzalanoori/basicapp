-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 02:21 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basicapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`, `created_at`) VALUES
(2, 'hanzalaaa', 'hanzalanoori616@gmail.com', '03412790362', '1', '2019-04-16 09:52:43'),
(3, 'hanzala', 'hanzala.noori@aaradyne.com', '03451354564', 'testing 1234', '2019-04-16 09:59:09'),
(4, 'hanzala', 'hanzlanoori@yahoo.com', '051726', 'sdsdsadsad', '2019-04-12 06:26:45'),
(5, 'hanzala', 'hanzlanoori@yahoo.com', '051726', 'test 1234', '2019-04-12 12:33:40'),
(9, 'hanzala', 'hanzlanoori@yahoo.com', '051726', 'test 12345', '2019-04-16 07:14:47'),
(10, 'hanzalaaa', 'hanzlanoori@yahoo.comaaa', '05172644', 'test 123455654', '2019-04-16 07:46:44'),
(11, 'ali hussain', 'alihussain@gmail.com', '03112548741', 'this is a laravel project.', '2019-04-16 12:01:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
